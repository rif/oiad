<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractMultipleScrapper extends AbstractScrapper {

    public function scrapp($site) {
      $today = date('Y-m-d');
      $oldSetting = libxml_use_internal_errors(true);
      libxml_clear_errors();
      $context = NULL;
      if ($site->cookie){
        $opts = array('http' => array('header'=> 'Cookie: '.$site->cookie."\r\n"));
        $context = stream_context_create($opts);
      }
      $contents = file_get_contents($site->page, false, $context);
      try {
            $html = new DOMDocument();
            $html->loadHtml($contents);
            $this->xpath = new DOMXPath($html);
      } catch(ErrorException $e){
        return $e->getMessage();
      }
      $result = array();
      $today = date('Y-m-d');
      $prods = $this->_mxpath($this->_getDealIterator());
      foreach($prods as $count=>$prod){
        $deal = ORM::factory('deal');
        $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->where('count', '=', $count)->find();
        $deal->site = $site;
        $this->_fillMultipleDetails($deal, $site->page, $count);
        $deal->count = $count;
        $deal->pub_date = $today;
        $deal->save();
        array_push($result, $deal->id);
      }
      libxml_clear_errors();
      libxml_use_internal_errors($oldSetting);
      return $result;
    }

    protected function _getDealIterator() {}
    protected function _fillMultipleDetails($deal, $page, $count) {}

    protected function _mxpath($expr) {
      $items = $this->xpath->query($expr);
      $result = array();
      foreach($items as $item){
        array_push($result, trim($item->nodeValue));
      }
      return $result;
    }
}

?>

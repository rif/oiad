<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractScrapper {

    private $xpath;

    public function scrapp($site) {
      $today = date('Y-m-d');
      $oldSetting = libxml_use_internal_errors(true);
      libxml_clear_errors();

      try {
  	    $html = new DOMDocument();
  	    $html->loadHtmlFile($site->page);
  	    $this->xpath = new DOMXPath($html);
      } catch(ErrorException $e){
        return $e->getMessage();
      }
      if($site->has_multiple_deals == 'F') {
        $deal = ORM::factory('deal');
        $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->find();
        $deal->site = $site;
        $deal->item_link = $site->page;
        $this->_fillDetails($deal, $site->page);
        $deal->pub_date = $today;
        $deal->save();
        $result = $deal->id;
      } else {
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
        return $result;
      }

      libxml_clear_errors();
      libxml_use_internal_errors($oldSetting);
      return $result;
    }

    protected function _fillDetails($deal, $host) {}
    protected function _getDealIterator() {}
    protected function _fillMultipleDetails($deal, $page, $count) {}

    protected function _xpath($expr, $index=0) {
      $item = $this->xpath->query($expr);
      $item = $item ? $item->item($index) : Null;
      return $item ? trim($item->nodeValue) : '';
    }

    protected function _mxpath($expr) {
      $items = $this->xpath->query($expr);
      $result = array();
      foreach($items as $item){
        array_push($result, trim($item->nodeValue));
      }
      return $result;
    }

    protected function _get_host($host){
      $p = parse_url($host);
      return "http://".$p['host']."/";
    }
}

?>

<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractScrapper {

    protected $xpath;

    public function scrapp($site) {
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
      $result = $this->loadDeal($site);

      libxml_clear_errors();
      libxml_use_internal_errors($oldSetting);
      return $result;
    }

    protected function loadDeal($site){
      $today = date('Y-m-d');
      $deal = ORM::factory('deal');
      $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->find();
      $deal->site = $site;
      $deal->item_link = $site->page;
      $this->_fillDetails($deal, $site->page);
      $deal->pub_date = $today;
      $deal->save();
      return $deal->id;
    }

    protected function _fillDetails($deal, $page) {}

    protected function _xpath($expr, $index=0) {
      $item = $this->xpath->query($expr);
      $item = $item ? $item->item($index) : Null;
      return $item ? trim($item->nodeValue) : '';
    }

    protected function _get_host($page){
      $p = parse_url($page);
      return "http://".$p['host']."/";
    }
}
?>

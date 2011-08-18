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
      
      $deal = ORM::factory('deal');
      $deal->where('site', '=', $site->id)->where('pub_date', '=', $today)->find();
      $deal->site = $site;
      $deal->item_link = $site->page;
      $this->_fillDetails($deal, $site->page);
      $deal->pub_date = $today;
      $deal->save();
      
      libxml_clear_errors();
      libxml_use_internal_errors($oldSetting);
      return $deal->id;
    }
    
    protected function _fillDetails($deal, $host) {}

    protected function _xpath($expr) {
      $item = $this->xpath->query($expr);
      $item = $item ? $item->item(0) : Null;
      return $item ? trim($item->nodeValue) : '';
    }
    
    protected function _get_host($host){
      $p = parse_url($host);
      return "http://".$p['host']."/";
    }
}

?>

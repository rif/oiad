<?php

defined('SYSPATH') OR die('No Direct Script Access');

abstract class AbstractScrapper {

    private $xpath;

    public function scrapp($host) {
        $today = date('Y-m-d');
        $oldSetting = libxml_use_internal_errors(true);
        libxml_clear_errors();

        $html = new DOMDocument();
        $html->loadHtmlFile($host);
        $this->xpath = new DOMXPath($html);

        $deal = ORM::factory('deal');
        $deal->where('site_link', '=', $host)->where('pub_date', '=', $today)->find();
        $deal->site_link = $host;
        $deal->item_link = $host;
        $this->_fillDetails($deal, $host);
        $deal->pub_date = $today;
        $deal->save();

        libxml_clear_errors();
        libxml_use_internal_errors($oldSetting);

        return $deal->id;
    }

    protected function _fillDetails($deal, $host) {
        
    }

    protected function _xpath($expr) {
        $item = $this->xpath->query($expr);
        $item = $item ? $item->item(0) : Null;
        return $item ? trim($item->nodeValue) : '';
    }
    
    protected function _get_host($host){
        $p = parse_url($host);
        return "http://".$p['host'];
    }

}

?>

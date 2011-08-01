<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once(Kohana::find_file('vendor', 'phpQuery'));

abstract class AbstractScrapper 
{
    public function scrapp($host){
	$today = date('Y-m-d');
	$raw = file_get_contents($host);
        $doc = phpQuery::newDocument($raw);
		
        $deal = ORM::factory('deal');
	$deal->where('site_link', '=', $host)->where('pub_date', '=', $today)->find();
        $deal->site_link=$host;
        $deal->item_link=$host;
	$this->_fillDetails($deal, $host);
        $deal->pub_date = $today;
	$deal->save();
	}
	
    protected function _fillDetails($deal, $host){
	
    }
}
?>

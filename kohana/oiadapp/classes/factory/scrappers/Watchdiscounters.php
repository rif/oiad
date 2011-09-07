<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.watchdiscounters.com/cust/dailydealsteal.asp", new Watchdiscounters());

class Watchdiscounters extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//table[@style='border: 2px solid #003366;']//a/@href");
        	$deal->desc_short = $this->_xpath("//table[@style='border: 2px solid #003366;']//a");
        	$deal->price = $this->_xpath("//table[@style='border: 2px solid #003366;']//b");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//table[@style='border: 2px solid #003366;']//img[contains(@src,'images')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


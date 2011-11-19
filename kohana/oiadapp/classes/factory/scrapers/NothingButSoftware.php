<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.nothingbutsoftware.com/dailydeal.asp", new NothingButSoftware());

class NothingButSoftware extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='DailyDealTitle']/h1");
        	$deal->price = $this->_xpath("//div[@id='DealPriceCell']");
        	$deal->desc_long = $this->_xpath("//div[@id='DailDealDescription']");
        	$deal->pictures = $this->_xpath("//img[@id='DailyDealImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


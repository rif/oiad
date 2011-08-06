<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.crotonwatchdod.com/", new CrotonWatch());

class CrotonWatch extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Croton Watch";
        	$deal->desc_short = $this->_xpath("//span[@id='lblProductName']");
        	$deal->price = $this->_xpath("//span[@id='lblOurPrice']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='imgMain']/@src");
        	$deal->shipping = $this->_xpath("///ul[@class='links']/li[9]/a/@href");
    }
}

?>

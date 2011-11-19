<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://dailydeals.target.com/", new Target());

class Target extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@class='siteLink']/a");
        	$deal->price = $this->_xpath("//p[@class='dealPrice']");
        	$deal->desc_long = $this->_xpath("//p[@class='dealsDec']");
        	$deal->pictures = $this->_xpath("//img[@id='heroImage']/@src");
        	$deal->shipping = $this->_xpath("//p[@class='freeShipping']");
    }
}

?>


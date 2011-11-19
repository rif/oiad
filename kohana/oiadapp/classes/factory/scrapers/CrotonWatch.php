<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.crotonwatchdod.com/", new CrotonWatch());

class CrotonWatch extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='lblProductName']");
        	$deal->price = $this->_xpath("//span[@id='lblOurPrice']");
        	$deal->desc_long = $this->_xpath("//td[@class='basictext']/div");
        	$deal->pictures = $this->_xpath("//img[@id='imgMain']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


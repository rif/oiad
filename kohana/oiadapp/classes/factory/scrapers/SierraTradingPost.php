<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.sierratradingpost.com/BarnBurners/", new SierraTradingPost());

class SierraTradingPost extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//form[@id='addToCartForm']/h1");
        	$deal->price = $this->_xpath("//span[@id='displayPrice']");
        	$deal->desc_long = $this->_xpath("//div[@class='overviewDescription']");
        	$deal->pictures = $this->_xpath("//img[@id='largeImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


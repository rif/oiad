<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.priceplunge.com/", new PricePlunge());

class PricePlunge extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='featured-product-info']/h1");
        	$deal->price = $this->_xpath("//div[@class='price-tag-middle']");
        	$deal->desc_long = $this->_xpath("//div[@class='product-text']");
        	$deal->pictures = $this->_xpath("//img[@id='pika-large']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


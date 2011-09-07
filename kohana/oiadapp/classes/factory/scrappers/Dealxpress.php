<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dealxpress.us/", new Dealxpress());

class Dealxpress extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='381435167819611864-product-title']");
        	$deal->price = $this->_xpath("//div[@id='381435167819611864-product-price']");
        	$deal->desc_long = $this->_xpath("//div[@class='paragraph editable-text']");
        	$deal->pictures = $host.$this->_xpath("//img[@class='product-image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.steepandcheap.com", new SteepAndCheap());

class SteepAndCheap extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@id='product_title']");
        	$deal->price = $this->_xpath("//div[@id='price']");
        	$deal->desc_long = $this->_xpath("//p[@id='brand_description']");
        	$deal->pictures = $this->_xpath("//div[@id='item_image']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


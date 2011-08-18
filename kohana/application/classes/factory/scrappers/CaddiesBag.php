<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://www.caddiesbag.com/", new CaddiesBag());

class CaddiesBag extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='product_title']");
        	$deal->price = $this->_xpath("//div[@id='pricebox']/span[@id='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='description']");
        	$deal->pictures = $host.$this->_xpath("//div[@id='mainProduct']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


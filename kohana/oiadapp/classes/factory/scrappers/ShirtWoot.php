<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://shirt.woot.com/", new ShirtWoot());

class ShirtWoot extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@class='fn']");
        	$deal->price = $this->_xpath("//span[@class='amount']");
        	$deal->desc_long = $this->_xpath("//div[@class='story']");
        	$deal->pictures = $this->_xpath("//img[@class='photo']/@src");
        	$deal->shipping = $this->_xpath("//ul[@id='shippingOptions']");
    }
}

?>

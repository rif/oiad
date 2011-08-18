<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.chainlove.com/", new Chainlove());

class Chainlove extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@id='item_title']");
        	$deal->price = $this->_xpath("//div[@id='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='item_description']/p");
        	$deal->pictures = $this->_xpath("//div[@id='item_image']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.wheycheap.com/", new Wheycheap());

class Wheycheap extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='productname']");
        	$deal->price = $this->_xpath("//span[@class='sale']");
        	$deal->desc_long = $this->_xpath("//p[@class='description']");
        	$deal->pictures = $this->_xpath("//div[@id='photo']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


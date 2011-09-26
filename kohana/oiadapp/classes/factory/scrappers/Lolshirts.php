<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.lolshirts.com/", new Lolshirts());

class Lolshirts extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//li[@id='feature-0']/a/@href");
        	$deal->desc_short = $this->_xpath("");        	
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//li[@id='feature-0']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


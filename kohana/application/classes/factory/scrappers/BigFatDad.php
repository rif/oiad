<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.bigfatdad.com/", new BigFatDad());

class BigFatDad extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Big Fat Dad";
        	$deal->desc_short = $this->_xpath("//h1[@class='dod_product_name']");
        	$deal->price = $this->_xpath("//b/span/span");
        	$deal->desc_long = $this->_xpath("//div[@id='desc_div']/p[2]/strong[1]");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("//table/tbody/tr/td/b");
    }
}

?>

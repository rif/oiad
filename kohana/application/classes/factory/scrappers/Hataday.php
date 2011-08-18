<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.hataday.com/", new Hataday());

class Hataday extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='mainDescr']/h1");
        	$deal->price = $this->_xpath("//div[@id='mainDescr']/h2");
        	$deal->desc_long = $this->_xpath("//div[@id='mainDescr']/p[1]");
        	$deal->pictures = $host.$this->_xpath("//img[@id='image1']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='mainDescr']/h3");
    }
}

?>


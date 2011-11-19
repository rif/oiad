<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.thebuzzerbeater.com/", new BuzzerBeater());

class BuzzerBeater extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='mainDescr']/h1");
        	$deal->price = $this->_xpath("//div[@id='mainDescr']/h2");
        	$deal->desc_long = $this->_xpath("//div[@id='mainDescr']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='image1']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


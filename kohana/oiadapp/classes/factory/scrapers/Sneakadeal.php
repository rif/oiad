<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.sneakadeal.com/", new Sneakadeal());

class Sneakadeal extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='title']");
        	$deal->price = $this->_xpath("//div[@id='buy']/div/h2");
        	$deal->desc_long = $this->_xpath("//div[@id='description']");
        	$deal->pictures = $host.$this->_xpath("//div[@id='pictures']/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='buy']/div");
    }
}

?>


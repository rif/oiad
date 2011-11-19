<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dillyeo.com/", new Dillyeo());

class Dillyeo extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='product-name']/a");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//a[@class='product-image']/img/@src");
        	$deal->shipping = $this->_xpath("//ul[@class='Item2']/li[4]/a/@href");
    }
}

?>


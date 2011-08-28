<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://tick.qliqo.com/", new TickQliqo());

class TickQliqo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='title']/a");
        	$deal->price = $this->_xpath("//div[@class='product-price-inner']");
        	$deal->desc_long = $this->_xpath("//div[@class='content']/p[1]");
        	$deal->pictures = $host.$this->_xpath("//div[@class='product-image']/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='product-shipping']");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.qliqo.com/", new Qliqo());

class Qliqo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='title']/a");
        	$deal->price = $this->_xpath("//div[@class='product-price-inner']");
        	$deal->desc_long = $this->_xpath("//div[@class='product-info clear-block']/div[@class='content']");
        	$deal->pictures = $host.$this->_xpath("//img[@class='imagecache imagecache-200x200']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='product-shipping']");
    }
}

?>


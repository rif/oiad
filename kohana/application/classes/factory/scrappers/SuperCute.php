<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.supercutedod.com/", new SuperCute());

class SuperCute extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-long product']/div/span/font/span");
        	$deal->price = '$'.$this->_xpath("//div[@class='product-long-price']/div[2]");
        	$deal->desc_long = $this->_xpath("//div[@class='product-long product']/div/font");
        	$deal->pictures = $host.$this->_xpath("//img[@class='product-image']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='product-long product']/div");
    }
}

?>


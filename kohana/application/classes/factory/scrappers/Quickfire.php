<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.quickfiredeal.com/", new Quickfire());

class Quickfire extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='dod_product_name']");
        	$deal->price = $this->_xpath("//span[@class='dod_product_sale_price']");
        	$deal->desc_long = $this->_xpath("//em/p[2]/font[1]");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("//strong[contains(.,'Standard')]");
    }
}

?>


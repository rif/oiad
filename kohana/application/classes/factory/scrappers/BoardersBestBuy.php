<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.boardersbestbuy.com/", new BoardersBestBuy());

class BoardersBestBuy extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Boarders Best Buy";
        	$deal->desc_short = $this->_xpath("//span[@class='product-name']");
        	$deal->price = $this->_xpath("//span[@class='product-price']");
        	$deal->desc_long = $this->_xpath("//div[@id='product-info']/p[3]");
        	$deal->pictures = $this->_xpath("//img[@id='main_pic']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

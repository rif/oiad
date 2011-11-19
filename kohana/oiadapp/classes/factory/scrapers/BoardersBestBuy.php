<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.boardersbestbuy.com/", new BoardersBestBuy());

class BoardersBestBuy extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='product-name']");
        	$deal->price = $this->_xpath("//span[@class='product-price']");
        	$deal->desc_long = $this->_xpath("//div[@id='product-info']/li/preceding-sibling::p[1]");
        	$deal->pictures = $this->_xpath("//img[@id='main_pic']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


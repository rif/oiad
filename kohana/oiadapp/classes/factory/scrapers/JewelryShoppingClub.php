<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.jewelryshoppingclub.com/", new JewelryShoppingClub());

class JewelryShoppingClub extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lblTitle']");
        	$deal->price = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lblYourPrice']");
        	$deal->desc_long = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lbldescrip']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='ctl00_ContentPlaceHolder1_mainImage']/@src");
        	$deal->shipping = $this->_xpath("//span[@id='ctl00_ContentPlaceHolder1_lblShipping']");
    }
}

?>


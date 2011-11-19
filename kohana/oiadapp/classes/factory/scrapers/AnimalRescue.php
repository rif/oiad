<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.theanimalrescuesite.com/", new AnimalRescue());

class AnimalRescue extends AbstractScrapper {

	protected function _getPageToScrap($page) {
    	return "http://www.theanimalrescuesite.com/".$this->_xpath("//a[contains(.,'Daily Deal')]/@href");
  	}

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//section[@id='itemDetail']/h1");
        	$deal->price = $this->_xpath("//p[@class='addToCartPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='itemDescription']/p[2]");
        	$deal->pictures = "http://www.theanimalrescuesite.com/store/".$this->_xpath("//img[@id='productImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


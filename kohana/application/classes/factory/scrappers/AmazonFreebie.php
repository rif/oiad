<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.amazon.com/dp/B004G2LUXO/", new AmazonFreebie());

class AmazonFreebie extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='btAsinTitle']");
        	$deal->price = $this->_xpath("//b[@class='priceLarge']");
        	$deal->desc_long = $this->_xpath("//div[@class='cBoxInner']/span");
        	$deal->pictures = $this->_xpath("//img[@id='prodImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


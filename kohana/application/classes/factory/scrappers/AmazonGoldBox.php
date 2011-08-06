<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.amazon.com/gp/goldbox", new AmazonGoldBox());

class AmazonGoldBox extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Amazon Gold Box";
        	$deal->desc_short = $this->_xpath("//div[@class='gbox-dotd-container'][1]/a[@class='gbox-b']");
        	$deal->price = $this->_xpath("//span[@id='gbox-dotd-promo-price']");
        	$deal->desc_long = $this->_xpath("//span[@id='gbox-dotd-descr']/div[@class='gbox']");
        	$deal->pictures = $this->_xpath("//img[@class='gbox-img']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

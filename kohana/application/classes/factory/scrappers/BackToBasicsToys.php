<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.backtobasicstoys.com/item/productid/dealoftheday/", new BackToBasicsToys());

class BackToBasicsToys extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Back To Basics Toys";
        	$deal->desc_short = $this->_xpath("//span[@id='ModelName']");
        	$deal->price = $this->_xpath("//span[@id='UnitCost']");
        	$deal->desc_long = $this->_xpath("//div[@id='weblongdes']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='ProductImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

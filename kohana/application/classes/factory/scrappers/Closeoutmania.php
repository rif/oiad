<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.closeoutmania.com/", new Closeoutmania());

class Closeoutmania extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "CloseoutMania";
        	$deal->desc_short = $this->_xpath("//span[@id='ctl00_contentBody_lblTitle']");
        	$deal->price = $this->_xpath("//span[@id='ctl00_contentBody_lblDealPrice']");
        	$deal->desc_long = $this->_xpath("//span[@id='ctl00_contentBody_lblDesc']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='imgmainin']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='product-specification'][2]");
    }
}

?>

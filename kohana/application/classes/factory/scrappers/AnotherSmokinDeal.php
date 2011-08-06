<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://anothersmokingdeal.com/", new AnotherSmokinDeal());

class AnotherSmokinDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Another Smokin' Deal";
        	$deal->desc_short = $this->_xpath("//span[@class='product-name']");
        	$deal->price = $this->_xpath("//span[@class='product-price']");
        	$deal->desc_long = $this->_xpath("//div[@id='product-info']");
        	$deal->pictures = $this->_xpath("//img[@id='main_pic']/@src");
        	$deal->shipping = $this->_xpath("//div[@id='product-info']/table/tbody/tr/td[1]s");
    }
}

?>

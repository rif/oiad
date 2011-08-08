<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dailydeals.net/", new DailydealsNet());

class DailydealsNet extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "dailydeals.net";
        	$deal->desc_short = $this->_xpath("//div[@id='productNameWrap']");
        	$deal->price = $this->_xpath("//span[@class='variantprice']");
        	$deal->desc_long = $this->_xpath("//div[@id='productDescWrap']");
        	$deal->pictures = "http://www.dealgenius.com/".$this->_xpath("//div[@id='productImageWrap']/div[1]/div[@id='divProductPic1459']/img[@id='ProductPic1459']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='freeShippingWrap']");
    }
}

?>

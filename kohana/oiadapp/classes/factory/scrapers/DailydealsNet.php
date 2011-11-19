<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dailydeals.net/", new DailydealsNet());

class DailydealsNet extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='productNameWrap']");
        	$deal->price = $this->_xpath("//div[@id='dd-1653']/div[@id='productPageWrap']/div[@id='productInfoWrap']/div[@id='productPriceWrap']/div[@id='variantPrice']/div[@id='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='productDescWrap']");
        	$deal->pictures = "http://www.dealgenius.com/".$this->_xpath("//div[@id='dd-1653']//img[contains(@src,'Product')]/@src");
        	$deal->shipping = $this->_xpath("//span[@class='freeShippingWrap']");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://aebike.com/get/deal/", new AlfredEBike());

class AlfredEBike extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Alfred E Bike";
        	$deal->desc_short = $this->_xpath("//td[@class='seitemcontent']/h1/div/div");
        	$deal->price = $this->_xpath("//div[@class='sespecialprice']");
        	$deal->desc_long = $this->_xpath("//td[@class='seitemcontent']/ul/li");
        	$deal->pictures = "http://aebike.com".$this->_xpath("//div[@class='seimagecaption']/img/@src");
        	$deal->shipping = 'See description';
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://aebike.com/get/deal/", new AlfredEBike());

class AlfredEBike extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='seitemcontent']/h1/div/div");
        	$deal->price = $this->_xpath("//div[@class='sespecialprice']");
        	$deal->desc_long = $this->_xpath("//td[@class='seitemcontent']/ul/li");
        	$deal->pictures = "http://aebike.com".$this->_xpath("//div[@class='seimagecaption']/img/@src");
        	$deal->shipping = 'See description';
    }
}

?>


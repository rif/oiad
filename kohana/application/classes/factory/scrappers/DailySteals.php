<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dailysteals.com/", new DailySteals());

class DailySteals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Daily Steals";
        	$deal->desc_short = $this->_xpath("//div[@id='prodTitle1']/h1");
        	$deal->price = $this->_xpath("//div[@id='yourprice1']/span");
        	$deal->desc_long = $this->_xpath("//div[@id='prodDesc1']/p");
        	$deal->pictures = $this->_xpath("//a[@class='fancyzoom'][1]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

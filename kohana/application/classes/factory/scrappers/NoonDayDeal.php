<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.noondaydeal.com/", new NoonDayDeal());

class NoonDayDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='brandD']");
        	$deal->price = $this->_xpath("//span[@class='priceg']");
        	$deal->desc_long = $this->_xpath("//table[@class='defaultM']//tr[5]");
        	$deal->pictures = $host.$this->_xpath("//img[contains(@src, '/mages')]/@src");
        	$deal->shipping = $this->_xpath("//span[@class='pricegh']");
    }
}

?>


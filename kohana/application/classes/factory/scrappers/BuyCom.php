<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.buy.com/retail/clearance/todays_deals.asp", new BuyCom());

class BuyCom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Buy.com";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

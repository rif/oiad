<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.udealbest.com/wireless-special.html", new UdealbestWireless());

class UdealbestWireless extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "uDealBest Wireless";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

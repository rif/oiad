<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://deals.ebay.com/", new EbayDailyDeals());

class EbayDailyDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "eBay Daily Deals";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

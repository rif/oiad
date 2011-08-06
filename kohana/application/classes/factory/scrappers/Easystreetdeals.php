<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.easystreetdeals.com/", new Easystreetdeals());

class Easystreetdeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "EasyStreetDeals";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

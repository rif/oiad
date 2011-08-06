<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dealadaygolf.com/", new DealADayGolf());

class DealADayGolf extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Deal a Day Golf";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

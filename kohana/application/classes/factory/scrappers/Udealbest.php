<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.udealbest.com/deal-of-the-day.html", new Udealbest());

class Udealbest extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "uDealBest";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dailydeal.discountwatchstore.com/cust/dailydealsteal.asp?d=0", new DiscountWatchStore());

class DiscountWatchStore extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Discount Watch Store";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ecost.com/Email/HotSheet.aspx", new Ecost());

class Ecost extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "eCost";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
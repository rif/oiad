<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.walmart.com/cp/Value-of-the-Day/1058864?povid=cat14503-env172199-module101210-lLink1_VOD", new Walmart());

class Walmart extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Walmart";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

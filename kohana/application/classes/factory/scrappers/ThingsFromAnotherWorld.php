<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.tfaw.com/dod/", new ThingsFromAnotherWorld());

class ThingsFromAnotherWorld extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Things From Another World";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

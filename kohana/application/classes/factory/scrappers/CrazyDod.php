<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://crazydod.com/", new CrazyDod());

class CrazyDod extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Crazy DOD";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

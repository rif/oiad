<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.indiebike.com/The-Peloton/Deal-of-the-Day", new IndieBike());

class IndieBike extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "indie bike";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

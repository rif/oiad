<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.joolwe.com/steal-of-the-day.html", new Joolwe());

class Joolwe extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Joolwe";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

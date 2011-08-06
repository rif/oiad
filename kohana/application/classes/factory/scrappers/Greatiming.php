<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.greattiming.net/side_bar_special", new Greatiming());

class Greatiming extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "GreaTiming";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

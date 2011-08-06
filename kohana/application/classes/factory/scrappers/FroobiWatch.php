<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.froobi.com/watch-1.html", new FroobiWatch());

class FroobiWatch extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Froobi Watch";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

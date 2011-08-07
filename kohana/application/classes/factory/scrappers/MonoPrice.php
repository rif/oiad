<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.monoprice.com/home/index.asp", new MonoPrice());

class MonoPrice extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Mono Price";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
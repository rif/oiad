<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://tick.qliqo.com/", new TickQliqo());

class TickQliqo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Tick.Qliqo";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

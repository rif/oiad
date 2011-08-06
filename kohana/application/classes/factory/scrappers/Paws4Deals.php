<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.paws4deals.com/", new Paws4Deals());

class Paws4Deals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Paws 4 Deals";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

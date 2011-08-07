<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.gearxs.com/store/", new Gearxs());

class Gearxs extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "GearXS";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
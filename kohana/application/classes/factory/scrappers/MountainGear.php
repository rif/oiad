<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.mountaingear.com/pages/product/dod.asp?&N=0", new MountainGear());

class MountainGear extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Mountain Gear";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.slipperyrockcigars.com/", new SlipperyRockCigars());

class SlipperyRockCigars extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Slippery Rock Cigars";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

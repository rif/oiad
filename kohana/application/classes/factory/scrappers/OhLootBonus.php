<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ohloot.com/bonusdeal/", new OhLootBonus());

class OhLootBonus extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Oh Loot Bonus";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://www.theanimalrescuesite.com/store/item.do?siteId=310&ddSourceId=31841&ddSourceClass=Item", new AnimalRescue());

class AnimalRescue extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Animal Rescue";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

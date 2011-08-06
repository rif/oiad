<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://propertyroom.com/Catalog.aspx?Category=Steal%20of%20the%20Day&CategoryId=355", new PropertyRoom());

class PropertyRoom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Property Room";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

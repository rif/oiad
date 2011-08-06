<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.vanns.com/shop/servlet/dealoftheday", new VannS());

class VannS extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Vann's";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

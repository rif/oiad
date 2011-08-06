<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.alpacadirect.com/results~Sweaters~Clearance~category~26~secondary~2.htm", new AlpacaDirect());

class AlpacaDirect extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Alpaca Direct";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

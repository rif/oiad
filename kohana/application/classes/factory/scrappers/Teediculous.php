<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.teediculous.com/", new Teediculous());

class Teediculous extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Teediculous";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.animebug.com/", new Animebug());

class Animebug extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "AnimeBug";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
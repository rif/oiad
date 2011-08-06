<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.jizbee.com/free/", new JizbeeFree());

class JizbeeFree extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Jizbee Free";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

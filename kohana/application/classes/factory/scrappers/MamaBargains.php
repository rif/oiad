<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.mamabargains.com/", new MamaBargains());

class MamaBargains extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Mama Bargains";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.meijer.com/s/big-steals/_/N-5io?icid=hpdsthu", new Meijer());

class Meijer extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Meijer";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

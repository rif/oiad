<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://fab.com/deals/", new Fab());

class Fab extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


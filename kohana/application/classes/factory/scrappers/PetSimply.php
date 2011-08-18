<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://petsimply.com/deal/", new PetSimply());

class PetSimply extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


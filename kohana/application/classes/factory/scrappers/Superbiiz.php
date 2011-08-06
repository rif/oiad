<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.superbiiz.com/landing.php?id=0bc97b49879ca7e6b738a4aa36dda39d5530dbe1ead148365f1a2880d5035923", new Superbiiz());

class Superbiiz extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "SuperBiiz";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

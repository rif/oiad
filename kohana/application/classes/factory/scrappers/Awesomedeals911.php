<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.awesomedeals911.com/Store/Tab.aspx?tabid=1", new Awesomedeals911());

class Awesomedeals911 extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "AwesomeDeals911";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

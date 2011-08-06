<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.birkenstockexpress.com/Outlet/birkenstock-deal-of-the-day.cfm", new BirkenstockExpress());

class BirkenstockExpress extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Birkenstock Express";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

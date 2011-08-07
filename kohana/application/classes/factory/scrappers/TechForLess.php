<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.techforless.com/cgi-bin/tech4less/hot_deal.html", new TechForLess());

class TechForLess extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Tech For Less";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
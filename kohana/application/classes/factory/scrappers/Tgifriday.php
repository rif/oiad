<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://fridays.qrs1.net/greatdealsapp/19qske9t.html", new Tgifriday());

class Tgifriday extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "TGIFriday";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>
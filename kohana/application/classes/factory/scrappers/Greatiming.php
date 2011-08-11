<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.greattiming.net/side_bar_special", new Greatiming());

class Greatiming extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "GreaTiming";
        	$deal->desc_short = $this->_xpath("//span[@class='title'][1]");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@width='122']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

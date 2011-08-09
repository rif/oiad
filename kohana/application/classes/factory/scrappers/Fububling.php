<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.fububling.com/", new Fububling());

class Fububling extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Fububling";
        	$deal->desc_short = $this->_xpath("//div[@class='name']/a");
        	$deal->price = $this->_xpath("//div[@class='sale-price-bold']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//td[@class='horizontal-seperator']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

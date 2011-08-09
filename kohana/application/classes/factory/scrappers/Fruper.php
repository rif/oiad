<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://fruper.com/", new Fruper());

class Fruper extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Fruper!";
        	$deal->desc_short = $this->_xpath("//div[@class='name']/a");
        	$deal->price = $this->_xpath("//div[@class='price-bold']");
        	$deal->desc_long = $this->_xpath("//td[@class='horizontal-seperator']/div[2]");
        	$deal->pictures = $this->_xpath("//td[@class='horizontal-seperator']/a/img/@src");
        	$deal->shipping = $this->_xpath("//span[@id='copyright']");
    }
}

?>

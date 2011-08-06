<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.chronoshark.com/", new Chronoshark());

class Chronoshark extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "ChronoShark";
        	$deal->desc_short = $this->_xpath("//div[@id='rightcol']/h2");
        	$deal->price = $this->_xpath("//div[@class='cost']");
        	$deal->desc_long = $this->_xpath("//div[@id='rightcol']/p[1]/strong[1]");
        	$deal->pictures = $host.$this->_xpath("//div[@id='__main1']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

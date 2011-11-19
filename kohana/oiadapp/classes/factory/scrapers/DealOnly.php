<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealonly.com/", new DealOnly());

class DealOnly extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@class='PRODNAME']");
        	$deal->price = $this->_xpath("//font[@class='PRICEC']");
        	$deal->desc_long = $this->_xpath("//font[@class='SPEC2']");
        	$deal->pictures = $host.$this->_xpath("//img[@id='mainphoto']/@src");
        	$deal->shipping = $this->_xpath("/html/body/table/tbody/tr/td[1]/table/tbody/tr[4]/td/table/tbody/tr/td[3]/table[2]/tbody/tr/td");
    }
}

?>


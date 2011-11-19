<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.wozofoto.com/www/", new Wozofoto());

class Wozofoto extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='info']");
        	$deal->price = $this->_xpath("//div[@id='purchaseoptions']/p[2]");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//img[@id='mainphoto']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


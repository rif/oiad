<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.sparkleshark.com/", new Sparkleshark());

class Sparkleshark extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='product-name']/a");
        	$deal->price = $this->_xpath("//div[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='info-list']/div");
        	$deal->pictures = $host.$this->_xpath("//div[@class='product-image']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


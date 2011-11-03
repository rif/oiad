<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.maczot.com/", new Maczot());

class Maczot extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='product']//h2");
        	$deal->price = $this->_xpath("//span[@id='zotprice']");
        	$deal->desc_long = $this->_xpath("//div[@id='description']/ul");
        	$deal->pictures = $this->_xpath("//div[@id='product']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


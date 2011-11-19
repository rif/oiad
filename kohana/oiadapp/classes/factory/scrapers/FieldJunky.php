<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.fieldjunky.com/", new FieldJunky());

class FieldJunky extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//a[@class='bigtitle']/@href");
        	$deal->desc_short = $this->_xpath("//a[@class='bigtitle']");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//ul");
        	$deal->pictures = $host.$this->_xpath("//img[@class='offerImg']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.liquidationchannel.com/", new LiquidationChannel());

class LiquidationChannel extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//a[contains(@href,'Dealoftheday')]/@href");
        	$deal->desc_short = $this->_xpath("//a[contains(@href,'Dealoftheday')]/strong");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@width='80']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


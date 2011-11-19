<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.liquidationchannel.com/", new LiquidationChannel());

class LiquidationChannel extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//a[contains(@href,'Dealoftheday')]/@href");
        	$deal->desc_short = $this->_xpath("//a[contains(@href,'Dealoftheday')]/strong");
        	$deal->price = $this->_xpath("//td[@class='our_price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[contains(@class,'dod')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


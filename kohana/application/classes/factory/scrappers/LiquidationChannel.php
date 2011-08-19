<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.liquidationchannel.com/", new LiquidationChannel());

class LiquidationChannel extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='dod-mid']/table/tbody/tr/td/table/tbody/tr[2]/td/table/tbody/tr/td[2]/a/strong");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@class='hoverZoomLink']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


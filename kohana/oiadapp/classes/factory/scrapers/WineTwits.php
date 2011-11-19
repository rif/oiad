<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.winetwitsdeals.com/", new WineTwits());

class WineTwits extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='featuredProduct_hdr1']");
        	$deal->price = $this->_xpath("//font[@class='priceCurrent dealPriceNew']");
        	$deal->desc_long = $this->_xpath("//div[@class='featuredProduct']");
        	$deal->pictures = $host.$this->_xpath("//div[@class='featuredProduct']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


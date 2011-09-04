<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.housewaresdeals.com/on/demandware.store/Sites-HousewaresDeals-Site/default/Home-Show", new HousewaresDeals());

class HousewaresDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='rightcolumn']/h3");
        	$deal->price = $this->_xpath("//p[@class='price accentcolor']");
        	$deal->desc_long = $this->_xpath("//p[@class='product-description']");
        	$deal->pictures = $this->_xpath("//img[@class='RICHFX:imageDragBox()']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


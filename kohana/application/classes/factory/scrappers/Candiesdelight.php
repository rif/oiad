<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.candiesdelight.com/Deal_Of_The_Day_s/111.htm", new Candiesdelight());

class Candiesdelight extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='productnamecolor colors_productname']");
        	$deal->price = $this->_xpath("//font[@class='pricecolor colors_productprice']");
        	$deal->desc_long = $this->_xpath("//tr[@class='v65-productDisplay-row']//font[@class='text colors_text']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[contains(@src,'photos')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


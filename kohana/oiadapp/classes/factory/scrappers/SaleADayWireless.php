<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://1saleaday.com/wireless", new SaleADayWireless());

class SaleADayWireless extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='product-flash']/h2");
        	$deal->price = $this->_xpath("//li[@class='cta']");
        	$deal->desc_long = $this->_xpath("//div[@id='product-info']");
        	$deal->pictures = $this->_xpath("//img[@id='main_image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


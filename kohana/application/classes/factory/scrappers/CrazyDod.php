<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://crazydod.com/", new CrazyDod());

class CrazyDod extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='dod_product_name']");
        	$deal->price = $this->_xpath("//span[@class='dod_product_sale_price']");
        	$deal->desc_long = $this->_xpath("//div[@id='desc_div']/p");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='dod_product_shipping']");
    }
}

?>


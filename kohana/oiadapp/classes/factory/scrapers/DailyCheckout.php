<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://dailycheckout.com/", new DailyCheckout());

class DailyCheckout extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='product_title']");
        	$deal->price = $this->_xpath("//b[@class='product_price']");
        	$deal->desc_long = $this->_xpath("//td[@class='white_out'][1]/div[4]/span");
        	$deal->pictures = $host.$this->_xpath("//img[@id='main_gallery']/@src");
        	$deal->shipping = $this->_xpath("//b[@class='product_detail']");
    }
}

?>


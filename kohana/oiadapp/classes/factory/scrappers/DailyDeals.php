<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.2dailydeals.com/", new DailyDeals());

class DailyDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='product-name']");
        	$deal->price = $this->_xpath("//div[@class='second-price']/font");
        	$deal->desc_long = $this->_xpath("//div[@class='short-description']/p/code/span");
        	$deal->pictures = $this->_xpath("//img[@id='image0']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='shipping-price']");
    }
}

?>


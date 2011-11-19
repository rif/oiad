<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealadaywake.com/", new DealADayWake());

class DealADayWake extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='mp_current_name']");
        	$deal->price = $this->_xpath("//div[@class='mp_current_price']");
        	$deal->desc_long = $this->_xpath("//div[@class='mp_current_content']");
        	$deal->pictures = $this->_xpath("//div[@class='mp_current_img']/img[@class='alignleft mp_product_image_current wp-post-image']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


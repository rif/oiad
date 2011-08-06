<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.bigdailysale.com", new BigDailySale());

class BigDailySale extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Big Daily Sale";
        	$deal->desc_short = $this->_xpath("//div[@class='product-pic-name']/div[2]/h2");
        	$deal->price = $this->_xpath("//div[@class='product-pic-name']/div[2]/span/strong");
        	$deal->desc_long = $this->_xpath("//div[@class='basic-box']/div[@id='left-col']/div[2]");
        	$deal->pictures = $this->_xpath("//div[@class='product-pic-name']/div[1]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

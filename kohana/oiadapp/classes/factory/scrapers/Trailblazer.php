<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.shoptrailblazer.com/Default.aspx", new Trailblazer());

class Trailblazer extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 	$deal->item_link = $this->_xpath("//a[@class='deptlinkM']/@href");
        	$deal->desc_short = $this->_xpath("//a[@class='deptlinkM']");
        	$deal->price = $this->_xpath("//span[@class='dotdsale']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='footer-promo']//img[contains(@src,'product_images')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


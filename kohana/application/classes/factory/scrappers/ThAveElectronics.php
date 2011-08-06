<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.6ave.com/shop/SickDealProduct.aspx", new ThAveElectronics());

class ThAveElectronics extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "6th Ave Electronics";
        	$deal->desc_short = $this->_xpath("//td/span[@class='style8']");
        	$deal->price = $this->_xpath("//td[@align='left']/span[@class='style8']");
        	$deal->desc_long = $this->_xpath("//td[@class='description_text']");
        	$deal->pictures = "http://www.6ave.com/shop/".$this->_xpath("//div[@id='SP_ProductImage']/img/@src");
        	$deal->shipping = $this->_xpath("//form[@id='addCart']//span[@class='style16']");
    }
}

?>

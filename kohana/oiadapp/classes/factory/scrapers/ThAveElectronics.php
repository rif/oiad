<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.6ave.com/shop/SickDealProduct.aspx", new ThAveElectronics());

class ThAveElectronics extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td/span[@class='style8']");
        	$deal->price = $this->_xpath("//td[@align='left']/span[@class='style8']");
        	$deal->desc_long = $this->_xpath("//td[@class='description_text']");
        	$deal->pictures = "http://www.6ave.com/shop/".$this->_xpath("//div[@id='SP_ProductImage']/img/@src");
        	$deal->shipping = $this->_xpath("//form[@id='addCart']//span[@class='style16']");
    }
}

?>


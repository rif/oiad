<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.hsn.com/todays-special_xh.aspx", new Hsn());

class Hsn extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@id='pdName']");
        	$deal->price = $this->_xpath("//div[@class='listPriceClearance']");
        	$deal->desc_long = $this->_xpath("//div[@class='productTabContent']/div[@class='productTabPage'][1]");
        	$deal->pictures = $this->_xpath("//img[@class='pdMainImage']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='pdShippingAndHandling']/div[1]");
    }
}

?>


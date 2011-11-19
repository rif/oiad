<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.sportszoneapparel.com/", new SportsZoneApparel());

class SportsZoneApparel extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h5/a");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//p[@class='product_desc']/a");
        	$deal->pictures = $host.$this->_xpath("//a[@class='product_image']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='footer']/center/b/a[2]/@href");
    }
}

?>


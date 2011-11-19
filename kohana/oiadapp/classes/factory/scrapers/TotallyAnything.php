<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.totallyanything.com/", new TotallyAnything());

class TotallyAnything extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='dod_product_name_H1']");
        	$deal->price = $this->_xpath("//span[contains(.,'$')][@class='dod_product_sale_price']");
        	$deal->desc_long = $this->_xpath("//div[@id='desc_div']/p");
        	$deal->pictures = $host.$this->_xpath("//img[@id='img_main']/@src");
        	$deal->shipping = $this->_xpath("//p[contains(.,'Shipping')]");
    }
}

?>


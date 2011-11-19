<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.babyhalfoff.com/", new BabyHalfOff());

class BabyHalfOff extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='col-main_productfp']/h1");
        	$deal->price = $this->_xpath("//span[@id='product-price-5421']");
        	$deal->desc_long = $this->_xpath("//div[@class='col-main_productfp']");
        	$deal->pictures = $this->_xpath("//div[@class='col-main_productfp']/table[1]/tbody/tr/td/img/@src");
        	$deal->shipping = $this->_xpath("//ul[@class='product'][2]/li[2]");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://appledod.com/", new AppleDod());

class AppleDod extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-name']/h2");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='short-description std']/p");
        	$deal->pictures = $this->_xpath("//img[@id='image0']/@src");
        	$deal->shipping = $this->_xpath("//p[@class='welcome-msg']");
    }
}

?>


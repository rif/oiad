<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.walmart.com/cp/Value-of-the-Day/1058864?povid=cat14503-env172199-module101210-lLink1_VOD", new Walmart());

class Walmart extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='BodyLBold']/a");
        	$deal->price = $this->_xpath("//div[@class='camelPrice']");
        	$deal->desc_long = $this->_xpath("//div[@class='BodyM Info clearfix']/div[2]");
        	$deal->pictures = $this->_xpath("//div[@class='ItemImage']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


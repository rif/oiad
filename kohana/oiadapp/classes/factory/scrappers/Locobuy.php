<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.locobuy.com/", new Locobuy());

class Locobuy extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='prodinfo']/h2");
        	$deal->price = $this->_xpath("//div[@class='prodinfo']/h3");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//a[contains(@class,'productimg')]/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='prodinfo']/h4");
    }
}

?>


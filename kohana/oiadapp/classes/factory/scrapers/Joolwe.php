<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.joolwe.com/steal-of-the-day.html", new Joolwe());

class Joolwe extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-name']/h1");
        	$deal->price = $this->_xpath("//p[@class='special-price']/span");
        	$deal->desc_long = $this->_xpath("//div[@class='short-description std']");
        	$deal->pictures = $this->_xpath("//a[@id='mz1']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


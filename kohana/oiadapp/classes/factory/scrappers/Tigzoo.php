<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://tigzoo.com/", new Tigzoo());

class Tigzoo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@class='title']/a");
        	$deal->price = $this->_xpath("//h1/strong/span");
        	$deal->desc_long = $this->_xpath("//div[@class='post-content clear-block']//ul");
        	$deal->pictures = $this->_xpath("//img[@class='alignleft size-full wp-image-3988']/@src");
        	$deal->shipping = $this->_xpath("//div[contains(@class,'post-content clear-block')]/p[3]");
    }
}

?>


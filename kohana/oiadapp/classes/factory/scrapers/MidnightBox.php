<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.midnightbox.com/", new MidnightBox());

class MidnightBox extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='productRight']/h1");
        	$deal->price = $this->_xpath("//dd[@class='our-price']");
        	$deal->desc_long = $this->_xpath("//div[@class='clearfix descriptionFormat']/p");
        	$deal->pictures = $host.$this->_xpath("//a[@id='productimg']/img/@src");
        	$deal->shipping = $this->_xpath("//dd[@class='our-price']/span");
    }
}

?>


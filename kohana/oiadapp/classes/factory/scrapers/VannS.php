<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.vanns.com/shop/servlet/dealoftheday", new VannS());

class VannS extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='content']/h2");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='content']/p");
        	$deal->pictures = $this->_xpath("//div[@class='image']/img/@src");
        	$deal->shipping = $this->_xpath("//span[@class='freeshipping']");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.nerdyshirts.com/dailydeal", new NerdyShirts());

class NerdyShirts extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='product-name']/h1");
        	$deal->price = $this->_xpath("//p[@class='special-price']/span");
        	$deal->desc_long = $this->_xpath("//div[@class='description']/div[@class='std']");
        	$deal->pictures = $this->_xpath("//div[@class='product-img-box']/div/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


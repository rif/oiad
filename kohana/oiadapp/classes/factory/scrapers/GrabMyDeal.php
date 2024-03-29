<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.grabmydeal.com/index.php/current-deal.html", new GrabMyDeal());

class GrabMyDeal extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='product-name']");
        	$deal->price = $this->_xpath("//span[@id='product-price-138']");
        	$deal->desc_long = $this->_xpath("//div[@class='short-description']");
        	$deal->pictures = $this->_xpath("//p[@class='product-image-zoom']/img[@id='image']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='short-description']/p[1]/strong/span/em");
    }
}

?>


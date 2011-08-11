<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.grabmydeal.com/index.php/current-deal.html", new GrabMyDeal());

class GrabMyDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Grab My Deal";
        	$deal->desc_short = $this->_xpath("//h3[@class='product-name']");
        	$deal->price = $this->_xpath("//span[@id='product-price-138']");
        	$deal->desc_long = $this->_xpath("//div[@class='short-description']");
        	$deal->pictures = $this->_xpath("//p[@class='product-image-zoom']/img[@id='image']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='short-description']/p[1]/strong/span/em");
    }
}

?>

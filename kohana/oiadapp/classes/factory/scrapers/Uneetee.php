<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.uneetee.com/categories/Today%27s-Insaneetee-Deal/", new Uneetee());

class Uneetee extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@class='ProductDetails']/strong/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='ProductDetails']/strong/a");
        	$deal->price = $this->_xpath("//div[@class='ProductPriceRating']/em");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//div[@class='ProductImage']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://petsimply.com/deal/", new PetSimply());

class PetSimply extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//h2[@class='entry-title']/a/@href");
        	$deal->desc_short = $this->_xpath("///h2[@class='entry-title']/a");
        	$deal->price = $this->_xpath("//span[@class='deal-price']");
        	$deal->desc_long = $this->_xpath("//h2[@class='entry-title']/a/@href");
        	$deal->pictures = $this->_xpath("//img[@width='280']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


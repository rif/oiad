<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.snaggstuff.com/", new Snaffstuff());

class Snaffstuff extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@id='ct-name']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@id='ct-name']/a");
        	$deal->price = $this->_xpath("//div[@id='ct-price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//div[@id='ct-image']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


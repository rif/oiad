<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.wildties.com/ties/WS225687.html", new WildTies());

class WildTies extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='headerTextLarge']/span");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//table[@class='mainTextBlue']");
        	$deal->pictures = $this->_xpath("//div[@id='mainContent']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


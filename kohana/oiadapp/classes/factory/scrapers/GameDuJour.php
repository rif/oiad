<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.gamedujour.com/", new GameDuJour());

class GameDuJour extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='buy_container']/h1");
        	$deal->price = $this->_xpath("//td[@class='our_price']");
        	$deal->desc_long = $this->_xpath("//div[@class='left_column']");
        	$deal->pictures = $this->_xpath("//div[@class='screenshot_container']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


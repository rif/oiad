<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://game.giveawayoftheday.com/", new GameGiveawayOfTheDay());

class GameGiveawayOfTheDay extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='text-container'][2]/h1");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//div[@class='text-container'][2]/p");
        	$deal->pictures = $this->_xpath("//img[@style='display: block; border: 1px solid #3B3B3B']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


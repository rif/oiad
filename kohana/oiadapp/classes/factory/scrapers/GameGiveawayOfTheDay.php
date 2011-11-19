<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://game.giveawayoftheday.com/", new GameGiveawayOfTheDay());

class GameGiveawayOfTheDay extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("///div[@class='text-container']/h3/a/@src");
        	$deal->desc_short = $this->_xpath("///div[@class='text-container']/h3");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//div[@class='excerpt']/p");
        	$deal->pictures = $this->_xpath("//img[@style='display: block; border: 1px solid #3B3B3B']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


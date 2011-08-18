<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.giveawayoftheday.com/", new GiveawayOfTheDay());

class GiveawayOfTheDay extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='text-container']/h1");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//div[@class='text-container']/div[1]");
        	$deal->pictures = $this->_xpath("//div[@class='text-container']/div[1]/p[1]/img[@class='left']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


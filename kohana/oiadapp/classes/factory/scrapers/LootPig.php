<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.lootpig.com/", new LootPig());

class LootPig extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='catItemTitle']/a");
        	$deal->price = $this->_xpath("//div[@class='k2deals-buynow']/span");
        	$deal->desc_long = $this->_xpath("///div[@class='catItemIntroText']/div[@class='content'][1]");
        	$stuff =  explode("(", $this->_xpath("//div[@class='catItemImageBlock']/@style"));
        	$stuff = explode(")", $stuff[1]);
        	$deal->pictures =$stuff[0];
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.lootpig.com/", new LootPig());

class LootPig extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h3[@class='catItemTitle']/a");
        	$deal->price = $this->_xpath("//div[@class='k2deals-buynow']/span");
        	$deal->desc_long = $this->_xpath("//div[@class='catItemIntroText']/p[1]/span[@class='Apple-style-span']");
        	$deal->pictures = $this->_xpath("//div[@class='catItemImageBlock']/@style");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


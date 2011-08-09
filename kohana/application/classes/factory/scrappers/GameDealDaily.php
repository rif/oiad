<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.gamedealdaily.com/", new GameDealDaily());

class GameDealDaily extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Game Deal Daily";
        	$deal->desc_short = $this->_xpath("//div[@id='body_middle_medium']/h2");
        	$deal->price = $this->_xpath("//div[@id='body_middle_medium']/p[1]");
        	$deal->desc_long = $this->_xpath("//div[@id='body_middle_medium']/p[2]");
        	$deal->pictures = $host.$this->_xpath("//img[@id='image0']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

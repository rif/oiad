<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.bowlingball.com/", new BowlingballCom());

class BowlingballCom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Bowlingball.com";
        	$deal->desc_short = $this->_xpath("//div[@class='SVDescription']");
        	$deal->price = $this->_xpath("///div[@class='SVPrice']");
        	$deal->desc_long = $this->_xpath("//div[@class='SVDescription']");
        	$deal->pictures = $this->_xpath("//div[@class='SVImage']/a/img/@src");
        	$deal->shipping = $this->_xpath("///div[@class='SVDescription2']");
    }
}

?>

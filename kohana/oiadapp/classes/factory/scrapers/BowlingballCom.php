<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.bowlingball.com/", new BowlingballCom());

class BowlingballCom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='SVDescription']");
        	$deal->price = $this->_xpath("///div[@class='SVPrice']");
        	$deal->desc_long = $this->_xpath("//div[@class='SVDescription']");
        	$deal->pictures = $this->_xpath("//div[@class='SVImage']/a/img/@src");
        	$deal->shipping = $this->_xpath("///div[@class='SVDescription2']");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.volumevote.com/", new Volumevote());

class Volumevote extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='title']");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("//div[@class='artist']").' : '.$this->_xpath("//div[@class='album']");
        	$deal->pictures = $host.$this->_xpath("//img[contains(@src,'album_art/')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


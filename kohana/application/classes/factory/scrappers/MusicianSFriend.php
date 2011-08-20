<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.musiciansfriend.com/stupid", new MusicianSFriend());

class MusicianSFriend extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='infoContainer']/h2");
        	$deal->price = $this->_xpath("//div[@class='infoContainer']/p[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@id='dealDescription']/div[@class='chromeContent']/div");
        	$deal->pictures = $this->_xpath("//div[@class='chromeContent']/div/img[2]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


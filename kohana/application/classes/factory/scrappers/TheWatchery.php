<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.thewatchery.com/watch-of-the-day", new TheWatchery());

class TheWatchery extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@color='#3D3F42']");
        	$deal->price = $this->_xpath("//font[@color='red']");
        	$deal->desc_long = $this->_xpath("///td[@class='details']//td[@class='details']/table");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='detailimage']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


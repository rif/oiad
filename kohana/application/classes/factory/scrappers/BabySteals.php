<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.babysteals.com/", new BabySteals());

class BabySteals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='pagetitle']");
        	$deal->price = $this->_xpath("//div[@class='pricenew']");
        	$deal->desc_long = $this->_xpath("//div[@id='main']/div[4]");
        	$deal->pictures = $this->_xpath("//div[@class='zoomPad']/img/@src");
        	$deal->shipping = $host.$this->_xpath("//div[@id='sidebar']/div[@class='small']/ul/li[3]/a/@href");
    }
}

?>


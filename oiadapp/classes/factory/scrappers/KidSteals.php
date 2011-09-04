<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.kidsteals.com/", new KidSteals());

class KidSteals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='pagetitle']");
        	$deal->price = $this->_xpath("//div[@class='pricenew']");
        	$deal->desc_long = $this->_xpath("///div[@id='main']/div[4]");
        	$deal->pictures = $this->_xpath("//img[contains(@src, 'product')]/@src");
        	$deal->shipping = $this->_xpath("/html/body/div[@id='wrap']/div[@id='sidebar']/div[@class='small']");
    }
}

?>


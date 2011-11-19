<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.babysteals.com/", new BabySteals());

class BabySteals extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='pagetitle']");
        	$deal->price = $this->_xpath("//div[@class='pricenew']");
        	$deal->desc_long = $this->_xpath("//div[@id='main_v2']/div[4]/p[12]");
        	$deal->pictures = $this->_xpath("//img[@id='stealslidemain']/@src");
        	$deal->shipping = $host.$this->_xpath("//div[@id='sidebar']/div[@class='small']/ul/li[3]/a/@href");
    }
}

?>


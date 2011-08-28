<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.worldofbags.com/D-O-W", new WorldOfBags());

class WorldOfBags extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='item-info']/h1");
        	$deal->price = $this->_xpath("//p[@id='sale-price']");
        	$deal->desc_long = $this->_xpath("//div[@id='prodContent'][1]/p");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='item-image']/a[2]/img/@src");
        	$deal->shipping = $this->_get_host($host).$this->_xpath("//div[@id='footer']/div[@class='left']/ul[2]/li[4]/a/@href");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.worldofbags.com/D-O-W", new WorldOfBags());

class WorldOfBags extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='item-info']/h1");
        	$deal->price = $this->_xpath("//p[@id='sale-price']");
        	$deal->desc_long = $this->_xpath("//div[@id='prodContent'][1]/p");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='item-image']/a[2]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.tanzanite.com/item/?id=68&deal", new TanzaniteCom());

class TanzaniteCom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='item_title']");
        	$deal->price = $this->_xpath("//span[@class='item_price']");
        	$deal->desc_long = $this->_xpath("//div[@class='item_description']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//td[@width='345']/img/@src");
        	$deal->shipping = $this->_xpath("//a[@class='link_dark']/span[@class='color_dark']");
    }
}

?>


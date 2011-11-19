<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.omahasteaks.com/servlet/OnlineShopping?Dsp=237", new OmahaSteaks());

class OmahaSteaks extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@class='lefttopdealoftheday']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='lefttopdealoftheday']/a");
        	$deal->price = $this->_xpath("//div[@class='lefttopdealoftheday']/span[2]");
        	$deal->desc_long = $this->_xpath("//span[@class='componentitems']");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


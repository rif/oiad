<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.wineexpress.com/", new WineExpress());

class WineExpress extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//a[@class='wow_grn']/@href");
        	$deal->desc_short = $this->_xpath("//a[@class='wow_grn']");
        	$deal->price = $this->_xpath("//div[@style='padding-top:5px;font-size:11px;']");
        	$deal->desc_long = $this->_xpath("//a[@style='color:#000000;text-decoration:none;']");
        	$deal->pictures = $host.$this->_xpath("//td[@class='imageBorderWow']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


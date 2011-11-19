<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.slipperyrockcigars.com/", new SlipperyRockCigars());

class SlipperyRockCigars extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->item_link = $host.$this->_xpath("//div[@class='boxContentLeft'][2]/span[@class='txtCopy']/a[@class='txtDefault']/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='boxContentLeft'][2]/span[@class='txtCopy']/a[@class='txtDefault']");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//div[@class='boxContentLeft'][2]/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


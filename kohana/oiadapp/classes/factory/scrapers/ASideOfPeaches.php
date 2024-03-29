<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.asideofpeaches.com/", new ASideOfPeaches());

class ASideOfPeaches extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='producttext']");
        	$deal->price = $this->_xpath("//div[@class='side-bar-top']/h1");
        	$deal->desc_long = $this->_xpath("//span[@style='font-size: large']");
        	$deal->pictures = $host.$this->_xpath("//td[@class='leftside']/div[@class='content-middle']/div[2]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


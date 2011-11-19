<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://fruper.com/", new Fruper());

class Fruper extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='name']/a");
        	$deal->price = $this->_xpath("//div[@class='price-bold']");
        	$deal->desc_long = $this->_xpath("//td[@class='horizontal-seperator']/div[2]");
        	$deal->pictures = $this->_xpath("//td[@class='horizontal-seperator']/a/img/@src");
        	$deal->shipping = $this->_xpath("//span[@id='copyright']");
    }
}

?>


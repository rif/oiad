<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.ejectit.com/", new Ejectit());

class Ejectit extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='Header']");
        	$deal->price = $this->_xpath("//span[@class='variantprice']");
        	$deal->desc_long = $this->_xpath("//td[@class='InformationText']");
        	$deal->pictures = $host.$this->_xpath("//img[contains(@id, 'ProductPic')]/@src");
        	$deal->shipping = $this->_xpath("//td[@class='sidebar']");
    }
}

?>


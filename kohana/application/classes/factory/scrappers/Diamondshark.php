<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.diamondshark.com/", new Diamondshark());

class Diamondshark extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='rightcol']/h2");
        	$deal->price = $this->_xpath("//div[@class='cost']");
        	$deal->desc_long = $this->_xpath("//div[@id='rightcol']/div[@class='specs']/table");
        	$deal->pictures = $this->_xpath("//a[@class='hoverZoomLink']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='rightcol']/p/strong/em/strong");
    }
}

?>


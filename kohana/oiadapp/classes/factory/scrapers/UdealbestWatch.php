<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.udealbest.com/watch-special.html", new UdealbestWatch());

class UdealbestWatch extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='columnlistp']/h2");
        	$deal->price = $this->_xpath("//span[@class='Apple-style-span']/span/font");
        	$deal->desc_long = $this->_xpath("//div[@class='paragraph editable-text']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@class='galleryImageBorder']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


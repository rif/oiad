<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.anitasarts.com/specials.html", new AnitaSArts());

class AnitaSArts extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='specialsListBoxContents']/a[2]");
        	$deal->price = $this->_xpath("//span[@class='productSpecialPrice']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='specialsListBoxContents']/a[1]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


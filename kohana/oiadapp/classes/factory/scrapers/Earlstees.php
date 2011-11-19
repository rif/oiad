<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.earlstees.com/shop/catalog/", new Earlstees());

class Earlstees extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("//span[@class='productSpecialPrice']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $host.$this->_xpath("//td[@class='boxText']/a[1]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


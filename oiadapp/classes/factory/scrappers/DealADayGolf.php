<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dealadaygolf.com/", new DealADayGolf());

class DealADayGolf extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='bigDescription']/h1");
        	$deal->price = $this->_xpath("//td[@class='priceBig']");
        	$deal->desc_long = $this->_xpath("//td[@class='descriptionText']");
        	$deal->pictures = $this->_xpath("//div[@id='bigImages']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.telescope.com/", new Telescope());

class Telescope extends AbstractScrapper {

	protected function _getPageToScrap($page) {
    	return $this->_xpath("//div[@id='home-cms-area3']/div/div[@class='homekicker']/a[1]/@href");
  	}

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='item-name']");
        	$deal->price = $this->_xpath("//span[@class='price-right']");
        	$deal->desc_long = $this->_xpath("//div[@class='item-desscription-container']/div[@class='content-block']");
        	$deal->pictures = $this->_xpath("//div[@class='fluid-display']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='tabs-4']/p");
    }
}

?>


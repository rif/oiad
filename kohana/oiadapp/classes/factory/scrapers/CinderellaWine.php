<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://cinderellawine.com/", new CinderellaWine());

class CinderellaWine extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='dyntextval']");
        	$deal->price = $this->_xpath("//p[@id='product-dollars']");
        	$deal->desc_long = $this->_xpath("//p[@id='review']");
        	$deal->pictures = $this->_xpath("//a[@class='lightbox-enabled']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@id='product-text']/div[@id='hype']/b[2]/u");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.wiredforwine.com/Featured_Wine.htm", new WiredForWine());

class WiredForWine extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//li[@id='catProdTd_2519784']/h2/a");
        	$deal->price = $this->_xpath("//td[@class='final']");
        	$deal->desc_long = $this->_xpath("//div[@class='wine_center']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='wine_left']/a/img/@src");
        	$deal->shipping = $this->_get_host($host).$this->_xpath("//a[contains(.,'Shipping')]/@href");
    }
}

?>


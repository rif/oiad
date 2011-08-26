<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.shindigz.com/dod.cfm", new Shindigz());

class Shindigz extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@class='item_name']");
        	$deal->price = $this->_xpath("//div[@class='sale_price']");
        	$deal->desc_long = $this->_xpath("//div[@id='div1']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[contains(@src, 'itm_img')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


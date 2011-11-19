<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://awatchforyou.com/", new AWatchForYou());

class AWatchForYou extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='products_heading']");
        	$deal->price = $this->_xpath("//span[@class='txt_our_price']");
        	$deal->desc_long = $this->_xpath("//span[@class='txt_description_home']");
        	$deal->pictures = $host.$this->_xpath("//td[@width='44%']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


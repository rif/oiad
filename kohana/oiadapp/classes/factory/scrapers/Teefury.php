<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.teefury.com/", new Teefury());

class Teefury extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='hd']/h2");
        	$deal->price = $this->_xpath("//div[@class='price price-10']");
        	$deal->desc_long = $this->_xpath("//span[@id='spaninterview']/div[2]");
        	$deal->pictures = $this->_xpath("//div[@class='img']/img/@src");
        	$deal->shipping = $this->_xpath("//span[@class='shipping']");
    }
}

?>


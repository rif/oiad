<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.bedeals.com/index.php/noon-bedeal/", new BedealsNoon());

class BedealsNoon extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='content_headings_pro']/a");
        	$deal->price = $this->_xpath("//span[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='right_side_middle']/div[2]");
        	$deal->pictures = $this->_xpath("//img[@id='productImgDefault']/@src");
        	$deal->shipping = $this->_xpath("//p[@class='shipping-price']");
    }
}

?>


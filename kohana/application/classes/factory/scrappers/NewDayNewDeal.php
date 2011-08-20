<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("https://www.newdaynewdeal.com/", new NewDayNewDeal());

class NewDayNewDeal extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@class='productname']");
        	$deal->price = $this->_xpath("//span[@class='pricetext']");
        	$deal->desc_long = $this->_xpath("//p[@class='descriptiontext']");
        	$deal->pictures = $host.$this->_xpath("//table[@id='dealarea']//img[contains(@src, 'items')]/@src");
        	$deal->shipping = $this->_xpath("//span[@class='shippingtext']");
    }
}

?>


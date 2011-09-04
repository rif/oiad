<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.easystreetdeals.com/", new Easystreetdeals());

class Easystreetdeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='productnamecolor colors_productname']");
        	$deal->price = $this->_xpath("//font[@class='pricecolor colors_productprice']");
        	$deal->desc_long = $this->_xpath("//tr[@class='v65-productDisplay-row'][4]/td/font[@class='text colors_text']");
        	$deal->pictures = $host.$this->_xpath("//tr[@class='v65-productDisplay-row'][3]/td/a/img/@src");
        	$deal->shipping = $this->_xpath("//tr[@class='v65-productDisplay-row'][4]/td/font[@class='text colors_text']/div[1]");
    }
}

?>


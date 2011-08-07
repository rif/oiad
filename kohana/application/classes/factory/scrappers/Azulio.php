<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.azulio.com/dailydeal/", new Azulio());

class Azulio extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "azulio";
        	$deal->desc_short = $this->_xpath("//div[@class='ProductMain']/div[1]");
        	$deal->price = $this->_xpath("//div[@class='Value']/div[@class='ProductPrice VariationProductPrice']");
        	$deal->desc_long = $this->_xpath("//div[@class='ProductDescriptionContainer']/ul");
        	$deal->pictures = $this->_xpath("//div[@class='ProductThumbImage']/a/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='ProductDescriptionContainer']/p[4]");
    }
}

?>
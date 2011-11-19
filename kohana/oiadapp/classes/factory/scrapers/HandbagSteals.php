<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.handbagsteals.com", new HandbagSteals());

class HandbagSteals extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='node-50']/h2/a");
        	$deal->price = $this->_xpath("//div[@class='price_row sale_price clearfix']/div[@class='detail']");
        	$deal->desc_long = $this->_xpath("//div[@class='product_description']/div[2]");
        	$deal->pictures = $this->_xpath("//img[@width='170']/@src");
        	$deal->shipping = $this->_xpath("//div[@class='content']/h3/b");
    }
}

?>


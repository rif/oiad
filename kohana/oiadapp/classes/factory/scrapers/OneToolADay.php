<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.onetooladay.com/", new OneToolADay());

class OneToolADay extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='entry']/h2[1]");
        	$deal->price = $this->_xpath("//b[contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("//div[@id='info_box']");
        	$deal->pictures = $this->_xpath("//div[@class='product-image']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.specialtystoreservices.com/special.aspx", new SpecialtyStoreServices());

class SpecialtyStoreServices extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='ModelName']");
        	$deal->price = $this->_xpath("//span[@id='UnitCost']");
        	$deal->desc_long = $this->_xpath("//span[@id='desc']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='ProductImage']/@src");
        	$deal->shipping = $this->_get_host($host).$this->_xpath("//a[@class='blue'][2]/@href");
    }
}

?>


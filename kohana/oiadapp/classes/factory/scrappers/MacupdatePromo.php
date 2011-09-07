<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.mupromo.com/", new MacupdatePromo());

class MacupdatePromo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='apptitle']");
        	$deal->price = $this->_xpath("//span[@class='redprice']");
        	$deal->desc_long = $this->_xpath("//div[@id='desc']");
        	$deal->pictures = $this->_xpath("//div[@id='screenshot']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


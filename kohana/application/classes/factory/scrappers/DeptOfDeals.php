<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.deptofdeals.com/", new DeptOfDeals());

class DeptOfDeals extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='productnamecolor colors_productname']");
        	$deal->price = $this->_xpath("//font[@class='pricecolor colors_productprice']");
        	$deal->desc_long = $this->_xpath("//a[@class='productnamecolor colors_productname']");
        	$deal->pictures = $host.$this->_xpath("//img[@style='BORDER-RIGHT: #666666 1px solid; BORDER-TOP: #666666 1px solid; BORDER-LEFT: #666666 1px solid; BORDER-BOTTOM: #666666 1px solid']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


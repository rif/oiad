<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.jomadeals.com/luxury/", new JomaDealsLuxury());

class JomaDealsLuxury extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//table[@id='ctl00_Body_tblMain']//span");
        	$deal->price = $this->_xpath("//span[@id='ctl00_Body_lblSalePrice']");
        	$deal->desc_long = $this->_xpath("//table[@id='ctl00_Body_tblMain']//td[@colspan='3']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='imgMediumImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


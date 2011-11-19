<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.sears.com/shc/s/dap_10153_12605_DAP_WOW+Specials?storeId=10153&vName=WOW+Specials&catalogInd=DAP&catalogId=12605&i_cntr=1299622707723", new Sears());

class Sears extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@id='arsHeroTitle']/a");
        	$deal->price = $this->_xpath("//div[@id='arsHeroText']/h3");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//img[@id='arsHeroImage1']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


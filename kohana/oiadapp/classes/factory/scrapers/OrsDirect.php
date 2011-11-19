<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.orsdirect.com/", new OrsDirect());

class OrsDirect extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@size='2']/b");
        	$deal->price = $this->_xpath("//b[contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("//p[contains(.,'deal for today')]");
        	$deal->pictures = $this->_xpath("//img[@width='275']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='rt-col-text-red']");
    }
}

?>


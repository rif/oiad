<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.judaicabargains.com/", new JudaicaBargains());

class JudaicaBargains extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='style1']");
        	$deal->price = $this->_xpath("//span[@class='style2']");
        	$deal->desc_long = $this->_xpath("//td[@colspan='2']");
        	$deal->pictures = $host.$this->_xpath("//img[@width='350']/@src");
        	$deal->shipping = $this->_xpath("//a[contains(@href, 'shipping')]/@href");
    }
}

?>


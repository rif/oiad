<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dailymemories.com/", new DailyMemoires());

class DailyMemoires extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2");
        	$deal->price = $this->_xpath("//h3");
        	$deal->desc_long = $this->_xpath("//td[@style='padding:10px']");
        	$deal->pictures = $host.$this->_xpath("//img[@height='200']/@src");
        	$deal->shipping = $this->_xpath("//td[contains(.,'Shipping')]/following-sibling::td[contains(.,'$')]");
    }
}

?>


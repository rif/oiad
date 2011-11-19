<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.pawschoice.com/deal-of-the-day.aspx", new PawsChoice());

class PawsChoice extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@id='ModelName']");
        	$deal->price = $this->_xpath("//span[@id='UnitCost']");
        	$deal->desc_long = $this->_xpath("//span[@id='desc']/lb/ul");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='ProductImage']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


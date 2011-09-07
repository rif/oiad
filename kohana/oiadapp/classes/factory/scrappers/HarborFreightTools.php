<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.harborfreight.com/clearance", new HarborFreightTools());

class HarborFreightTools extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//div[@class='std']/table/tbody/tr[2]/td[2]/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


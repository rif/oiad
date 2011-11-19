<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.flowerstoflourishes.com/", new FlowersToFlourishes());

class FlowersToFlourishes extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@class='style2'][2]");
        	$deal->price = $this->_xpath("//span[@class='style7']");
        	$deal->desc_long = $this->_xpath("//p[@class='style2'][2]/following-sibling::p");
        	$deal->pictures = $host.$this->_xpath("//img[@width='350']/@src");
        	$deal->shipping = $this->_xpath("//span[@class='style8']");
    }
}

?>


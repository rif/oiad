<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://blog.hollywoodtoysandcostumes.com/", new HollywoodToysCostumes());

class HollywoodToysCostumes extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='post'][1]/h1/a");
        	$deal->price = $this->_xpath("//div[@class='entry']/table/tbody/tr/td[1]/table/tbody/tr/td/p[4]/span/span/strong/strong");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("//a[@target='_blank']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


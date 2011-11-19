<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.13deals.com/", new Deals());

class Deals extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//p[@class='prodheader']");
        	$deal->price = $this->_xpath("//p[@class='lrgorange']");
        	$deal->desc_long = $this->_xpath("//td[@width='810']/p[3]");
        	$deal->pictures = $host.$this->_xpath("//td[@align='center']/img/@src");
        	$deal->shipping = $this->_xpath("//p[@class='lrgorange']/span[@class='drkblue']");
    }
}

?>


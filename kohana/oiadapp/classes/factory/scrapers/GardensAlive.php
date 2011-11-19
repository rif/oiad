<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.gardensalive.com/", new GardensAlive());

class GardensAlive extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='red14']/font");
        	$deal->price = $this->_xpath("//span[@style='color: #CC0000']/b");
        	$deal->desc_long = $this->_xpath("//td[@width='220']");
        	$deal->pictures = $host.$this->_xpath("//td[@width='250']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


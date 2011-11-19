<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.gemnation.com/watches/Deal-Of-The-Day.html", new Gemnation());

class Gemnation extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='watch-title'][1]");
        	$deal->price = $this->_xpath("//td[@class='our-price-value']");
        	$deal->desc_long = $this->_xpath("//td/span[@class='brand-info']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='big']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='warranty']/div");
    }
}

?>


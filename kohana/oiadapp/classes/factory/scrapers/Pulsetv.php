<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://deal.pulsetv.com/", new Pulsetv());

class Pulsetv extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h1[@id='H1']");
        	$deal->price = $this->_xpath("//span[@id='Span1']");
        	$deal->desc_long = $this->_xpath("//div[@id='productDescription']");
        	$deal->pictures = $this->_xpath("//img[@id='ctl00_cphMainBox_imgProdImageDesc']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


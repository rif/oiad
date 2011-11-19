<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.lacrosse.com/Navigation.process?Ne=330&Srp=24&N=840", new LacrosseCom());

class LacrosseCom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
      		$deal->desc_short = $this->_xpath("//p[@class='headline']");
        	$deal->price = $this->_xpath("//p[@class='price']");
        	$deal->desc_long = $this->_xpath("//div[@class='product-box']");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='dealDay']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


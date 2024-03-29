<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealdotcom.com/home", new Dealdotcom());

class Dealdotcom extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[class='title]/h3");
        	$deal->price = $this->_xpath("//h3[@class='price']");
        	$deal->desc_long = $this->_xpath("//span[@class='description_text']/p");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='info']/img/@src");
        	$deal->shipping = $this->_xpath("//div[@class='shipping']");
    }
}

?>


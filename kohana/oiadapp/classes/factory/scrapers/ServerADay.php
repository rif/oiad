<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.serveraday.com/", new ServerADay());

class ServerADay extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='content_text']/h1/font");
        	$deal->price = $this->_xpath("//div[contains(.,'$')]");
        	$deal->desc_long = $this->_xpath("//table[@class='theserver']");
        	$deal->pictures = $host.$this->_xpath("//div[@class='content_text']//img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


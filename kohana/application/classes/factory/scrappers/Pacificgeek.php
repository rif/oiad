<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.pacificgeek.com/nooner.asp", new Pacificgeek());

class Pacificgeek extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='style-pro2 style13']");
        	$deal->price = $this->_xpath("//span[@class='style13']");
        	$deal->desc_long = $this->_xpath("//td[@class='\"InformationText\"']");
        	$deal->pictures = $this->_xpath("//img[@width='250']/@src");
        	$deal->shipping = $this->_xpath("//strong[contains(.,'Shipping')]/following::td[1]");
    }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.taketours.com/tour-of-the-day/", new Taketours());

class Taketours extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//h2[@class='font25']");
        	$deal->price = $this->_xpath("//span[@class='floatL']");
        	$deal->desc_long = $this->_xpath("//div[@class='td_l_orser_mr floatL']/ul");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='td_l_orser_mr floatL']/div/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


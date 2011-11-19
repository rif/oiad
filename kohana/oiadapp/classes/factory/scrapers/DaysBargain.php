<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.2daysbargain.com/", new DaysBargain());

class DaysBargain extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//td[@class='rightheadingbg']//td[@class='text3']");
        	$deal->price = $this->_xpath("//td[@class='nobg']//td[@class='text6']");
        	$deal->desc_long = $this->_xpath("//td[@class='text12']//td[@class='font']/p[2]/span");
        	$deal->pictures = $host.$this->_xpath("//a[@class='account']/img/@src");
        	$deal->shipping = $this->_xpath("//td[@class='nobg']//td[@class='text15']");
    }
}

?>


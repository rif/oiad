<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.downlowtooslow.com/", new Downlowtooslow());

class Downlowtooslow extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//table[@class='curved']//font");
        	$deal->price = $this->_xpath("//td[@style='font-size:26px;padding-right:6px;']");
        	$deal->desc_long = $this->_xpath("//td[@style='padding-left:20px;']");
        	$deal->pictures = $this->_xpath("//div[@id='vmMainPage']//img[@height='340']/@src");
        	$deal->shipping = $this->_xpath("//table[@class='curved']/tbody/tr[2]/td/div/table/tbody/tr[1]/td[3]");
    }
}

?>


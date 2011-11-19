<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.mountaingear.com/pages/product/dod.asp?&N=0", new MountainGear());

class MountainGear extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//span[@class='GeneralPageHeader_MG']");
        	$deal->price = $this->_xpath("//table[@id='Table9']//font[@color='#FF0000']");
        	$deal->desc_long = $this->_xpath("//div[@class='general-text']");
        	$deal->pictures = $this->_xpath("//img[@id='imgProduct']/@src");
        	$deal->shipping = $this->_xpath("//a[@class='footer'][6]/@href");
    }
}

?>


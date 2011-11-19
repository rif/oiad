<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.newdavincis.com/specials.html", new Newdavincis30Minute());

class Newdavincis30Minute extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->item_link = $this->_get_host($host).$this->_xpath("//div[@id='davinci_special']/a[2]/@href");
        	$deal->desc_short = $this->_xpath("//div[@id='weekdaysaleContent']/a");
        	$deal->price = $this->_xpath("//span[@class='productSpecialPrice']");
        	$deal->desc_long = $this->_get_host($host).$this->_xpath("//div[@id='davinci_special']/a[2]/@href");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@id='weekdaysaleContent']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


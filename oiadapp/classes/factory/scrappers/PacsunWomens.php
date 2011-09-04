<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://shop.pacsun.com/content.jsp?pageName=sale", new PacsunWomens());

class PacsunWomens extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@class='dealContainer']/@href");
        	$deal->desc_short = $this->_xpath("//li[@class='prod']");
        	$deal->price = $this->_xpath("//li[@class='price']");
        	$deal->desc_long = $this->_xpath("//li[@class='prodDetail']");
        	$deal->pictures = $this->_xpath("//div[@class='dealIMG']/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


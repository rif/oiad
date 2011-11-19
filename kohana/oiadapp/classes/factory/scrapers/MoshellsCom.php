<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.moshells.com/", new MoshellsCom());

class MoshellsCom extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//div[@class='rgt-top-bnr-lft-text']/h2/a/@href");
        	$deal->desc_short = $this->_xpath("///div[@class='rgt-top-bnr-lft-text']/h2/a");
        	$deal->price = $this->_xpath("//div[@class='rgt-bnr-price']");
        	$deal->desc_long = $host.$this->_xpath("//div[@class='rgt-top-bnr-lft-text']/h2/a/@href");
        	$deal->pictures = $this->_xpath("//div[@class='rgt-bnr-pro-img']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


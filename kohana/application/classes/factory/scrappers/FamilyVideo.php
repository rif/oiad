<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.familyvideo.com/catalog/pod_history.php", new FamilyVideo());

class FamilyVideo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Family Video";
        	$deal->desc_short = $this->_xpath("//span[@class='detail_subhead']");
        	$deal->price = $this->_xpath("///span[@class='products_specials_price']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = "http://www.familyvideo.com/catalog/".$this->_xpath("//img[@width='144']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='footer']/nobr[1]/a[@class='footerText']/@href");
    }
}

?>

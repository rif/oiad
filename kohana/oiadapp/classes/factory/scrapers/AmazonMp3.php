<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.amazon.com/MP3-Music-Download/b/ref=topnav_storetab_dmusic?ie=UTF8&node=163856011", new AmazonMp3());

class AmazonMp3 extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = "http://www.amazon.com".$this->_xpath("//div[@class='unified_widget rcmBody']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@class='unified_widget rcmBody']/a");
        	$deal->price = $this->_xpath("//div[@class='unified_widget rcmBody']/p[@class='seeMore']/a");
        	$deal->desc_long = $this->_xpath("//div[@class='unified_widget rcmBody']");
        	$deal->pictures = $this->_xpath("//div[@class='prodImage']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


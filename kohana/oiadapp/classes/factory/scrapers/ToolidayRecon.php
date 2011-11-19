<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://recon.tooliday.com/", new ToolidayRecon());

class ToolidayRecon extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@id='rightcontent-product']");
        	$deal->price = $this->_xpath("//p[@class='special-price']/span[2]");
        	$deal->desc_long = $this->_xpath("//div[@class='proddesc']");
        	$deal->pictures = $this->_xpath("//img[@id='tdayprodimage']/@src");
        	$deal->shipping = $this->_get_host($host).$this->_xpath("//div[@class='footer-list2']/ul/li[2]/a/@href");
    }
}

?>


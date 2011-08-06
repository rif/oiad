<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.alphashark.com/", new Alphashark());

class Alphashark extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "AlphaShark";
        	$deal->desc_short = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@id='page']/div[@id='columns']/div[@id='ctl00_PageContent_pnlContent']/div[@id='rightcol']/h2");
        	$deal->price = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@id='page']/div[@id='columns']/div[@id='ctl00_PageContent_pnlContent']/div[@id='rightcol']/div[@class='price']/div[@class='cost']");
        	$deal->desc_long = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@id='page']/div[@id='columns']/div[@id='ctl00_PageContent_pnlContent']/div[@id='rightcol']/p/strong[1]");
        	$deal->pictures = $host.$this->_xpath("/html/body/form[@id='aspnetForm']/div[@id='page']/div[@id='columns']/div[@id='ctl00_PageContent_pnlContent']/div[@id='leftcol']/div[1]/div/div[@id='__main1']/a[@class='hoverZoomLink']/img/@src");
        	$deal->shipping = $this->_xpath("/html/body/form[@id='aspnetForm']/div[@id='page']/div[@id='columns']/div[@id='ctl00_PageContent_pnlContent']/div[@id='rightcol']/p/strong[2]/span");
    }
}

?>

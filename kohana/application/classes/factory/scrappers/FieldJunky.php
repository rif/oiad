<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.fieldjunky.com/", new FieldJunky());

class FieldJunky extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Field Junky";
        	$deal->desc_short = $this->_xpath("//td[@class='blockTD']/table/tbody/tr[1]/td[@class='padding10px ']/table/tbody/tr[2]/td[@class='offerTd']/form/h2[@class='offerTitle ']/a[@class='bigtitle']");
        	$deal->price = $this->_xpath("//td[@class='blockTD']/table/tbody/tr[1]/td[@class='padding10px ']/table/tbody/tr[2]/td[@class='offerTd']/form/div[@class='priceBlock']/span[@class='price']");
        	$deal->desc_long = $host.$this->_xpath("//td[@class='blockTD']/table/tbody/tr[1]/td[@class='padding10px ']/table/tbody/tr[2]/td[@class='offerTd']/form/a[@id='add_so_13930']/@href");
        	$deal->pictures = $host.$this->_xpath("//td[@class='blockTD']/table/tbody/tr[1]/td[@class='padding10px ']/table/tbody/tr[2]/td[@class='offerTd']/form/a[1]/img[@class='offerImg']/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

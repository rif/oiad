<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.vitabase.com/supplements/daily-deal.aspx", new Vitabase());

class Vitabase extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//label[@class='featured']");
        	$deal->price = $this->_xpath("//tr[@style='color: crimson; font-weight: bold;']/td[2]");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='dailyDealOffer']/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


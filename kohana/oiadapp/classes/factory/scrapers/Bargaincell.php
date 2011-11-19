<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.bargaincell.com/bargaincell_daily_deal.html", new Bargaincell());

class Bargaincell extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='deal_product_name']/strong");
        	$deal->price = $this->_xpath("//div[@class='new_dailydeal_ourprice']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//div[@class='fl round_content_l']/div[1]/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


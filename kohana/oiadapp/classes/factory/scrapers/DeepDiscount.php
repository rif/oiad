<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.deepdiscount.com/deals_daily-deep-deal/", new DeepDiscount());

class DeepDiscount extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//table[@class='ae_noborder']/tbody/tr[1]/td[2]/div/p[1]/a/strong/span");
        	$deal->price = $this->_xpath("//table[@class='ae_noborder']/tbody/tr[1]/td[2]/div/p[1]/span[2]");
        	$deal->desc_long = $this->_xpath("//table[@class='ae_noborder']/tbody/tr[3]/td/p");
        	$deal->pictures = $this->_xpath("//table[@class='ae_noborder']/tbody/tr[1]/td[1]/a/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


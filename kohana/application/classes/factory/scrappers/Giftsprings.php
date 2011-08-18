<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.giftsprings.com/Merchant2/merchant.mv?Screen=CTGY&Category_Code=daily-special", new Giftsprings());

class Giftsprings extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("/html/body/table/tbody/tr[2]/td/table[2]/tbody/tr[2]/td[2]/blockquote/font[2]/b/table/tbody/tr/td/table/tbody/tr[2]/td[2]/font/a");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


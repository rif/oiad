<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://accessories.us.dell.com/sna/sna.aspx?c=us&cs=19&l=en&s=dhs&~topic=daily_deals_available&~srd=true&sk=Daily_Deals&scat=prod&~srd=true&sk=daily_deals&scat=prod", new Dell());

class Dell extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


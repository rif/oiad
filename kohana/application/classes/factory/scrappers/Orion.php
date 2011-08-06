<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.telescope.com/control/product/~category_id=HP_DealDayZone/~pcategory=HOMEPAGE/~product_id=09925", new Orion());

class Orion extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 	$deal->site_name = "Orion";
        	$deal->desc_short = $this->_xpath("");
        	$deal->price = $this->_xpath("");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_xpath("");
        	$deal->shipping = $this->_xpath("");
    }
}

?>

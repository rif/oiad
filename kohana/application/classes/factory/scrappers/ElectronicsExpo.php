<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.electronics-expo.com/index.php?page=item&id=MONDLHDHSST8AC&source=DailyDeal", new ElectronicsExpo());

class ElectronicsExpo extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//font[@color='#8BC63F']");
        	$deal->price = $this->_xpath("//td[@class='our_price'][2]");
        	$deal->desc_long = $this->_xpath("//div[@class='midbox_display']//ul");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[@id='item_store']/@src");
        	$deal->shipping = $this->_xpath("//td[@class='shipping'][2]");
    }
}

?>


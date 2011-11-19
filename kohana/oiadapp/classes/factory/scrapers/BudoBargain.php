<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.budovideos.com/shop/customer/bargain.php", new BudoBargain());

class BudoBargain extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='bld']");
        	$deal->price = $this->_xpath("//span[@class='bld']");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//img[contains(@src, 'cover')]/@src");
        	$deal->shipping = "http://www.budovideos.com/shop/customer/".$this->_xpath("//div[@id='help_menu']/a[2]/@href");
    }
}

?>


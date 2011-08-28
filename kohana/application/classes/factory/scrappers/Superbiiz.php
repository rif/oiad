<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.superbiiz.com/landing.php?id=0bc97b49879ca7e6b738a4aa36dda39d5530dbe1ead148365f1a2880d5035923", new Superbiiz());

class Superbiiz extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_get_host($host).$this->_xpath("//table[@id='right_col']//div/a/@href");
        	$deal->desc_short = $this->_xpath("//table[@id='right_col']//div/a");
        	$deal->price = $this->_xpath("//a[@class='dailyspeical']/b/font");
        	$deal->desc_long = $this->_xpath("");
        	$deal->pictures = $this->_get_host($host).$this->_xpath("//a[@class='hotitem']/img/@src");
        	$deal->shipping = $this->_xpath("//table[@id='right_col']//span/small");
    }
}

?>


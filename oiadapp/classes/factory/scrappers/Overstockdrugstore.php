<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.overstockdrugstore.com/index.php", new Overstockdrugstore());

class Overstockdrugstore extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $this->_xpath("//div[@id='dealofdaycontent']/a/@href");
        	$deal->desc_short = $this->_xpath("//div[@id='dealofdaycontent']/span");
        	$deal->price = $this->_xpath("//span[@class='ourPrice']");
        	$deal->desc_long = $this->_xpath("//div[@id='dealofdaycontent']/a/@href");
        	$deal->pictures = $this->_xpath("//div[@id='dealofdaycontent']/a[1]/img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


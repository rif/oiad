<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.writersdigestshop.com/category/deal_day", new WriterSDigestShop());

class WriterSDigestShop extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//a[@class='title']");
        	$deal->price = $this->_xpath("//span[@style='color: red; font-size: 110%;']");
        	$deal->desc_long = $this->_xpath("//div[@style='color: #321909;line-height:16px;']");
        	$deal->pictures = $this->_xpath("//img[contains(@src,'thumbnail')]/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


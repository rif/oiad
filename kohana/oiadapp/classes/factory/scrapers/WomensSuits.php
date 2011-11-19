<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.womensuits.com/", new WomensSuits());

class WomensSuits extends AbstractScraper {

	 protected function _fillDetails($deal, $host){
	 		$deal->item_link = $host.$this->_xpath("//table//font[contains(.,'DEAL OF THE DAY')]/following::a[contains(.,'click here')]/@href");
        	$deal->desc_short = $this->_xpath("//table//font[contains(.,'DEAL OF THE DAY')]/following::td[@class='ash_text_big']");
        	$deal->price = $this->_xpath("//table//font[contains(.,'DEAL OF THE DAY')]/following::font[@color='darkgreen']");
        	$deal->desc_long = $this->_xpath("//table//font[contains(.,'DEAL OF THE DAY')]/following::td[@class='ash_text_big'][2]");
        	$deal->pictures = $this->_xpath("//table//font[contains(.,'DEAL OF THE DAY')]/following::img/@src");
        	$deal->shipping = $this->_xpath("");
    }
}

?>


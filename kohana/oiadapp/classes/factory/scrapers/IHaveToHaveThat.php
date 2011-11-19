<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.ihavetohavethat.com/", new IHaveToHaveThat());

class IHaveToHaveThat extends AbstractScrapper {

	 protected function _fillDetails($deal, $host){
        	$deal->desc_short = $this->_xpath("//div[@class='title dkblue']");
        	$deal->price = $this->_xpath("//div[@class='price orange']");
        	$deal->desc_long = $this->_xpath("//div[@class='prod_desc']/p");
        	$stuff = explode("=",$this->_xpath("//img[contains(@src,'products')]/@src"));
        	$stuff = explode("&", $stuff[1]);
        	$deal->pictures = 'http://www.thatdailydeal.com/'.$stuff[0];
        	$deal->shipping = $this->_xpath("//td[@class='that_info']/div[@class='center']/div[4]");
    }
}

?>


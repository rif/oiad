<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.doozyofadeal.com/", new Doozyofadeal());

class Doozyofadeal extends AbstractScrapper {
  protected function _fillDetails($deal, $host){
    $deal->item_link = $this->_xpath("//h1[@class='dealHeading']/a/@href");
    $deal->desc_short = $this->_xpath("//h1[@class='dealHeading']/a");
    $deal->price = $this->_xpath("//li[@class='YourPrice']']");
    $deal->desc_long = $this->_xpath("//div[@class='prdDiscription']");
    $deal->pictures = "http://www.doozyofadeal.com".$this->_xpath("//div[@class='imageArea']/img/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


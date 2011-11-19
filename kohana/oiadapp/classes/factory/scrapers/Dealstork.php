<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dealstork.com/", new Dealstork());

class Dealstork extends AbstractScrapper {
  protected function _fillDetails($deal, $host){
    $deal->item_link = "http://www.dealstork.com".$this->_xpath("//div[@class='common_row']/ul/li[2]/a/@href");
    $deal->desc_short = $this->_xpath("//div[@class='bottom_curve']/h1/span");
    $deal->price = $this->_xpath("//div[@class='common_row']/ul/li[1]/span");
    $deal->desc_long = $this->_xpath("//div[@class='common_row']/p");
    $deal->pictures = "http://www.dealstork.com".$this->_xpath("//img[@class='active']/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


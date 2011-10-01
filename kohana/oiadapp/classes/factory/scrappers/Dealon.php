<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.dealon.com/", new Dealon());

class Dealon extends AbstractScrapper {
  protected function _fillDetails($deal, $host){
    $deal->desc_short = $this->_xpath("//h1[@id='deal-title']");
    $deal->price = $this->_xpath("//div[@class='deal-meter-buy']/div/div");
    $deal->desc_long = $this->_xpath("//div[@class='deal-details']/div[@class='deal-details-left-column']");
    $deal->pictures = "http://www.dealon.com/".$this->_xpath("//img[@class='deal-image']/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


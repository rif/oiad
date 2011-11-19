<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.crowdsavings.com/", new Crowdsavings());

class Crowdsavings extends AbstractScrapper {
  protected function _fillDetails($deal, $host){
    $deal->item_link = $this->_xpath("//div[@id='banner']/div/a/@href");
    $deal->desc_short = $this->_xpath("//div[@id='banner']/div/a");
    $deal->price = $this->_xpath("//div[@class='tag available bottom-left tag-available']/div");
    $deal->desc_long = $this->_xpath("//div[@id='details']");
    $deal->pictures = "http://www.crowdsavings.com".$this->_xpath("//img[@class='active']/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


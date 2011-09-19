<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.groupon.com/", new Groupuon());

class Groupuon extends AbstractScrapper {
  protected function _fillDetails($deal, $host){
    $deal->item_link = "http://www.groupon.com".$this->_xpath("//div[@class='deal clearfix']//h2/a/@href");
    $deal->desc_short = $this->_xpath("//div[@class='deal clearfix']//h2/a");
    $deal->price = $this->_xpath("//div[@id='amount']");
    $deal->desc_long = $this->_xpath("//div[@class='pitch_content']");
    $deal->pictures = $this->_xpath("//div[@id='everyscape']//img/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


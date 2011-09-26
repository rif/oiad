<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.bellechic.com/", new Bellechic());

class Bellechic extends AbstractMultipleScrapper {

  protected function _getPageToScrap($page) {
    return "http://www.bellechic.com".$this->_xpath("//div[@class='details']/h3/a/@href");
  }

  protected function _getDealIterator() {
    return "//div[@class='image']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = "http://www.bellechic.com".$this->_xpath("//div[@class='title']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='title']/a", $count);
    $deal->price = $this->_xpath("//span[@class='price']", $count);
    $deal->desc_long = $this->_xpath("");
    $deal->pictures = $this->_xpath("//div[@class='image']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.josbank.com/menswear/shop/SubCategory_11001_10050_9252000", new JosABank());

class JosABank extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//div[@class='padding_wrapper']/a/img[contains(@src,'JosBank')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
  	$base = "http://www.josbank.com/menswear/shop/";
    $deal->item_link = $base.$this->_xpath("//div[@class='padding_wrapper']/h2/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='padding_wrapper']/h2/a", $count);
    $deal->price = $this->_xpath("//div[@class='padding_wrapper']//p[@class='cost']/span[@class='promo']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='padding_wrapper']/a/img[contains(@src,'JosBank')]/@src", $count);
    $deal->shipping = $base.$this->_xpath("//div[@class='padding_wrapper']/a[contains(.,'SHIPPING')]/@href");
  }
}

?>


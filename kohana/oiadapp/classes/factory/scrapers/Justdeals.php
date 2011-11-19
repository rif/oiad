<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.justdeals.com/", new Justdeals());

class Justdeals extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//img[contains(@class,'imagecache-wheel_thumb')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//span[@class='field-content']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//span[@class='field-content']/a", $count);
    $deal->price = $this->_xpath("//span[contains(@class,'uc-price-sell_price uc-price')]", $count);
    $deal->desc_long = $this->_xpath("//div[@class='views-field-field-product-wheel-desc-value']/div[@class='field-content']/p", $count);
    $deal->pictures = $this->_xpath("//img[contains(@class,'imagecache-wheel_thumb')]/@src", $count);
  }
}

?>


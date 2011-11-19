<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.graveyardmall.com/categories/Daily-Deal/", new Graveyardmall());

class Graveyardmall extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//div[@class='ProductImage']/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//div[@class='ProductDetails']/strong/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='ProductDetails']/strong/a", $count);
    $prices = explode(" ", $this->_xpath("//div[@class='ProductPriceRating']/em", $count));
    $deal->price = count($prices)>1 ? $prices[1] : $prices[0];
    $deal->desc_long =  $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//div[@class='ProductImage']/a/img/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>


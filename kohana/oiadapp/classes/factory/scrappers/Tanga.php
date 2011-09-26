<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.tanga.com/", new Tanga());

class Tanga extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//div[@class='image']/div/div/a/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $page.$this->_xpath("//div[@class='content']/h4/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='content']/h4/a", $count);
    $price_shipping = explode('+', $this->_xpath("//div[@class='price']", $count));
    if(count($price_shipping) == 2) {
      $deal->price = $price_shipping[0];
      $deal->shipping =  $price_shipping[1];  
    } else {
      $deal->price = $price_shipping[0];
    }    
    $deal->desc_long = $this->_xpath("//div[@class='description']", $count);
    $deal->pictures = $this->_xpath("//div[@class='image']/div/div/a/img/@src", $count);    
  }
}

?>


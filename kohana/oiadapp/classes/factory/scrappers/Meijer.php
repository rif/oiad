<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www3.meijer.com/bigsteals.xml", new Meijer());

class Meijer extends AbstractFeedScrapper {
  protected function _fillFeedDetails($deal, $item){
    $deal->item_link = $item['link'];
    $deal->desc_short = $item['merchant_name'];
    $deal->price = $item['price'];
    $deal->desc_long = $item['description'].$item['details'];
    $deal->pictures = $item['image_url'];
    $deal->shipping = '';
  }
}

?>


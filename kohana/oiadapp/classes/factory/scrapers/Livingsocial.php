<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://livingsocial.com/", new Livingsocial());

class Livingsocial extends AbstractFeedScrapper {
  protected function _fillFeedDetails($deal, $item){
    $deal->item_link = $item['link']['href'];
    $deal->desc_short = $item['merchant_name'];
    $deal->price = $item['price'];
    $deal->desc_long = $item['description'].$item['details'];
    $deal->pictures = $item['image_url'];
    $deal->shipping = '';
  }
}

?>


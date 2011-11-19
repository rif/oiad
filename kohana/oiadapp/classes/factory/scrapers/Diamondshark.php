<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://feeds.feedburner.com/DiamondShark-DailyDealRSSFeed/", new Diamondshark());

class Diamondshark extends AbstractFeedScraper {
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


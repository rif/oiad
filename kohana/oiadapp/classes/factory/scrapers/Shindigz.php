<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.shindigz.com/party/news/rss.cfm", new Shindigz());

class Shindigz extends AbstractFeedScrapper {
  protected function _fillFeedDetails($deal, $item){
    $deal->item_link = $item['link'];
    $deal->desc_short = $item['title'];
    $deal->price = '';
    $deal->desc_long = $item['description'];
    $deal->pictures = '';
    $deal->shipping = '';
  }
}

?>

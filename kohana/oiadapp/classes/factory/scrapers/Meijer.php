<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www3.meijer.com/bigsteals.xml", new Meijer());

class Meijer extends AbstractFeedScraper {
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


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://deals.dailycandy.com/", new DailyCandy());

class DailyCandy extends AbstractMultipleScrapper {
    protected function _getDealIterator() {
    return "//a[@title='Go']/img/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//a[@title='Go']/@href", $count);
    $deal->desc_short = $this->_xpath("//h1']", $count);
    $deal->price = $this->_xpath("//h2", $count);
    $deal->desc_long = $this->_xpath("");
    $deal->pictures = $this->_xpath("//a[@title='Go']/img/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>


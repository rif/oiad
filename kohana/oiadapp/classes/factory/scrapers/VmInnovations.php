<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.vminnovations.com/", new VmInnovations());

class VmInnovations extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("", $count);
    $deal->desc_short = $this->_xpath("", $count);
    $deal->price = $this->_xpath("", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>


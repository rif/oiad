<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.harborfreight.com/clearance", new HarborFreightTools());

class HarborFreightTools extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//img[@width='240']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
  	$link = $this->_xpath("//img[@width='240']/parent::a/@href", $count);
  	$link = strpos($link,"www") ? $link : "http://www.harborfreight.com".$link;
    $deal->item_link = $link;
    $deal->desc_short = $this->_xpath("", $count);
    $deal->price = $this->_xpath("", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//img[@width='240']/@src", $count);
    $deal->shipping = $this->_xpath("", $count);
  }
}

?>


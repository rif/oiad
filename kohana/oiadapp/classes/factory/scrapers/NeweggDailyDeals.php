<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.newegg.com/DailyDeal.aspx?name=DailyDeal", new NeweggDailyDeals());

class NeweggDailyDeals extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//img[@width='125']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//div[@class='itemText']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//div[@class='itemText']/a/span[1]", $count);
    $deal->price = $this->_xpath("//li[@class='priceFinal']", $count);
    $deal->desc_long = $this->_xpath("//div[@class='itemText']", $count);
    $deal->pictures = $this->_xpath("//img[@width='125']/@src", $count);
    $deal->shipping = $this->_xpath("//li[@class='priceShip']", $count);
  }
}

?>


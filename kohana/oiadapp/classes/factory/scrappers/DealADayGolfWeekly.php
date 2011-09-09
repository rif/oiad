<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dealadaygolf.com/weeklydeals.php", new DealADayGolfWeekly());

class DealADayGolfWeekly extends AbstractScrapper {

  protected function _getDealIterator() {
    return "//img[@class='main_image']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//div[@class='pad20 ']/a[contains(@href, 'past-deal')]/@href", $count);
    $deal->desc_short = $this->_xpath("//h2", $count);
    $deal->price = $this->_xpath("//td[@class='priceBig']", $count).','.$this->_xpath("//td[@class='priceBig']/following-sibling::td[1]", $count);
    $deal->desc_long = $this->_xpath("//ul", $count);
    $deal->pictures = $this->_xpath("//img[@class='main_image']/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>


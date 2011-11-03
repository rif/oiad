<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://dealadaygolf.com/weeklydeals.php", new DealADayGolfWeekly());

class DealADayGolfWeekly extends AbstractMultipleScrapper {

  protected function _getDealIterator() {
    return "//img[@class='main_image']/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
    $deal->item_link = $this->_xpath("//td[@class='bigDescription'][1]/div[@class='pad20 ']/a/@href", $count);
    $deal->desc_short = $this->_xpath("//td[@class='bigDescription']//h2", $count);
    $deal->desc_long = $this->_xpath("//td[@class='bigDescription']//ul", $count);
    $deal->price = $this->_xpath("//td[@class='priceBig']", $count).','.$this->_xpath("//td[@class='priceBig']/following-sibling::td[1]", $count);
    $deal->pictures = $this->_xpath("//img[@class='main_image']/@src", $count);
    $deal->shipping = $this->_xpath("//div[@id='Menu']//a[contains(.,'Shipping')]/@href");
  }
}

?>


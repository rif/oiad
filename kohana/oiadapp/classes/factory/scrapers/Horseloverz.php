<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.horseloverz.com/c-Deals-of-the-Day-1020.html", new Horseloverz());

class Horseloverz extends AbstractMultipleScraper {

  protected function _getDealIterator() {
    return "//td[@class='DialogBox']//img[contains(@src, 'use_cbeq_image_medium')]/@src";
  }

  protected function _fillMultipleDetails($deal, $page, $count){
  	$host = $this->_get_host($page);
    $deal->item_link = $host.$this->_xpath("//a[@class='ProductTitle']/@href", $count);
    $deal->desc_short = $this->_xpath("//a[@class='ProductTitle']", $count);
    $deal->price = $this->_xpath("//font[@class='ProductPrice']", $count);
    $deal->desc_long = $this->_xpath("", $count);
    $deal->pictures = $this->_xpath("//td[@class='DialogBox']//img[contains(@src, 'use_cbeq_image_medium')]/@src", $count);
    $deal->shipping = $this->_xpath("");
  }
}

?>


<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.alpacadirect.com/results~Sweaters~Clearance~category~26~secondary~2.htm", new AlpacaDirect());

class AlpacaDirect extends AbstractScrapper {

    protected function _getDealIterator() {
      return "//img[contains(@src, 'product_images')]/@src";
    }

    protected function _fillMultipleDetails($deal, $page, $count){
      $deal->item_link = $this->_xpath("//td/a[contains(@href,'Details')]/@href", $count);
      $deal->desc_short = $this->_xpath("//td/a[contains(@href,'Details')]", $count);
      $deal->price = $this->_xpath("//span[@class='TextRed']", $count);
      $deal->desc_long = $this->_xpath("");
      $deal->pictures = $this->_get_host($page).$this->_xpath($this->_getDealIterator(), $count);
      $deal->shipping = $this->_xpath("");
    }
}

?>


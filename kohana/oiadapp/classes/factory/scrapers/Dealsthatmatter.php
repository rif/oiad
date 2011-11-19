<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScraper("http://www.dealsthatmatter.com/", new Dealsthatmatter());

class Dealsthatmatter extends AbstractScraper {
  protected function _fillDetails($deal, $host){
    $deal->item_link = "http://www.dealsthatmatter.com".$this->_xpath("//div[@id='buy_button']/a/@href");
    $deal->desc_short = $this->_xpath("//div[@class='content_left'][1]/div[@class='tk-museo'][1]");
    $deal->price = $this->_xpath("//div[@id='buy_button']");
    $deal->desc_long = $this->_xpath("//div[@id='deal_body']/div[2]/div[2]/div[2]");
    $deal->pictures = $this->_xpath("//div[@id='deal_body']//img/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


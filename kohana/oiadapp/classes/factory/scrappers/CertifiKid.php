<?php
defined('SYSPATH') OR die('No Direct Script Access');

PolyFactory::addScrapper("http://www.certifikid.com/", new CertifiKid());

class CertifiKid extends AbstractScrapper {
  protected function _fillDetails($deal, $host){
    $deal->item_link = "http://www.certifikid.com".$this->_xpath("//div[@class='daily-deal']/h1/a/@href");
    $deal->desc_short = $this->_xpath("//div[@class='daily-deal']/h1/a");
    $deal->price = $this->_xpath("//span[@class='price']");
    $deal->desc_long = $this->_xpath("//div[@class='left']");
    $deal->pictures = "http://www.certifikid.com".$this->_xpath("//img[contains(@src,'content_images')]/@src");
    $deal->shipping = $this->_xpath("");
  }
}

?>


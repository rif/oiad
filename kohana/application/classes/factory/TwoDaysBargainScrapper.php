<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://www.2daysbargain.com/', new TwoDaysBargainScrapper());

class TwoDaysBargainScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '2Days Bargain';
        $deal->desc_short = trim(pq('td.rightheadingbg td.text3')->text());
        $deal->price = pq('td.nobg td.text6')->text();
        $deal->desc_long = trim(pq('td.text12 td.font span')->text());
        $deal->pictures = "h".$host.pq("a.account>img:first")->attr("src")."g";
        
        $deal->shipping = pq('td.nobg td.text15')->text();
    }
}

?>
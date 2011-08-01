<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('http://www.6ave.com/shop/SickDealProduct.aspx', new SixthAveElectronicsScrapper());

class SixthAveElectronicsScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = '6th Ave Electronics';
        $deal->desc_short = trim(pq('#addCart span.style8:first')->text());
        $deal->price = trim(pq('#addCart span.style8:last')->text());
        $deal->desc_long = trim(pq('td.description_text>p')->text());
        $deal->pictures = "h"."http://www.6ave.com/shop/".pq('#SP_ProductImage>img')->attr('src')."g";        
        $deal->shipping = trim(pq('#addCart span.style16:last')->text());
    }
}

?>
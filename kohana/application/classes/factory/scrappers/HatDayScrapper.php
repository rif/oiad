<?php
defined('SYSPATH') OR die('No Direct Script Access');


PolyFactory::addScrapper('http://www.hataday.com/', new HatDayScrapper());

class HatDayScrapper extends AbstractScrapper {

    protected function _fillDetails($deal, $host) {
        $deal->site_name = 'HatADay';
        $deal->desc_short = trim(pq('#mainDescr>h1')->text());
        $deal->price = pq('#mainDescr>h2')->text();
        $deal->shipping = trim(pq('#mainDescr>h3')->text());
        $deal->desc_long = trim(pq('#mainDescr>p:first')->text());
        $images = "<";
        
        foreach(pq('#mainImage>img') as $img){
            $old_src = pq($img)->attr('src');
            if(strlen($images) > 0){
                $images .= "|";
            }
            $img  = pq($img)->attr('src', $host."/".$old_src);
            $images .= $img->attr('src');
        }
        $images .= ">";
        $deal->pictures = $images;
    }

}

?>

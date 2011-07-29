<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('www.hataday.com', new HatDayScrapper());

class HatDayScrapper extends AbstractScrapper {

    public function scrapp($host, $rss) {
        $raw = file_get_contents("http://".$host);
        $doc = phpQuery::newDocument($raw);
        
        
        $deal = ORM::factory('deal');
        $deal->site_name="HatADay";
        $deal->site_link=$host;
        $deal->item_link=$host;
        $deal->desc_short = trim(pq('#mainDescr>h1')->text());
        $deal->price = pq('#mainDescr>h2')->text();
        $deal->shipping = trim(pq('#mainDescr>h3')->text());
        $deal->desc_long = trim(pq('#mainDescr>p')->text());
        $images = "";
        foreach(pq('#mainImage>img') as $img){
            $old_src = pq($img)->attr('src');
            $images .= pq($img)->attr('src', "http://".$host."/".$old_src);
        }
        $deal->pictures = $images;
        $deal->pub_date = date('Y-m-d');
		$deal->save();
    }

}

?>

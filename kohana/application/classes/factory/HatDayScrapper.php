<?php
defined('SYSPATH') OR die('No Direct Script Access');

require_once 'PolyFactory.php';

PolyFactory::addScrapper('www.hataday.com', new HatDayScrapper());

class HatDayScrapper extends AbstractScrapper {
    const rss_link = "http://www.hataday.com/rss/index.php";

    public function scrapp() {
        /*$items = Feed::parse(self::rss_link);
        // Calculate 24 hours ago
        $yesterday = strtotime('yesterday'); #$yesterday = time() - (24*60*60);
        // Loop through all of the items in the feed
        foreach ($items as $item) {
            // Compare the timestamp of the feed item with 24 hours ago.
            if (array_key_exists("pubDate", $item) && time($item["pubDate"]) > $yesterday) {
                foreach ($item as $key => $val) {
                    echo $key . " = " . $val . "<br />";
                }
                break;
            }
        }*/
        $raw = file_get_contents("http://www.hataday.com/");
        $doc = phpQuery::newDocument($raw);
        echo "Short description: ".pq('#mainDescr>h1')->text()."<br />";
        echo "Price: ".pq('#mainDescr>h2')->text()."<br />";
        echo "Shipping: ".pq('#mainDescr>h3')->text()."<br />";
        echo "Long description: ".pq('#mainDescr>p')->text()."<br />";
        echo "Images: <br/>";
        foreach(pq('#mainImage>img') as $img){
            $old_src = pq($img)->attr('src');
            echo pq($img)->attr('src', "http://www.hataday.com/".$old_src);
            
        }
        echo "<br/>";
    }

}

?>

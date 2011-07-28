<?php

require_once 'PolyFactory.php';

PolyFactory::addScrapper('www.hataday.com', new HatDayScrapper());

class HatDayScrapper extends AbstractScrapper {

    const link = "http://www.hataday.com/rss/index.php";

    public function scrapp() {
        $items = Feed::parse(self::link);
        // Calculate 24 hours ago
        $yesterday = strtotime('yesterday'); #$yesterday = time() - (24*60*60);
        $found = false;
        // Loop through all of the items in the feed
        foreach ($items as $item) {
            // Compare the timestamp of the feed item with 24 hours ago.
            if (array_key_exists("pubDate", $item) && time($item["pubDate"]) > $yesterday) {
                foreach($item as $key=>$val)
                {
                    echo $key." = ".$val."<br />";
                }
                break;
            }
        }
    }

}

?>

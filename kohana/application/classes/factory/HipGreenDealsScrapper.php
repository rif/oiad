<?php

defined('SYSPATH') OR die('No Direct Script Access');
require_once 'PolyFactory.php';

PolyFactory::addScrapper('hipgreendeals.com', new HipGreenDealsScrapper());

class HipGreenDealsScrapper extends AbstractScrapper {
    const rss_link = "http://www.hipgreendeals.com/feed/";

    public function scrapp() {
        $items = Feed::parse(self::rss_link);
        // Calculate 24 hours ago
        $yesterday = strtotime('yesterday'); #$yesterday = time() - (24*60*60);
        $found = false;
        // Loop through all of the items in the feed
        foreach ($items as $item) {
            // Compare the timestamp of the feed item with 24 hours ago.
            if (array_key_exists("pubDate", $item) && time($item["pubDate"]) > $yesterday) {
                foreach ($item as $key => $val) {
                    echo $key . " = " . $val . "<br />";
                }
                break;
            }
        }
    }

}
?>

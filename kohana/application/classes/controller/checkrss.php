<?php

defined('SYSPATH') OR die('No Direct Script Access');


Class Controller_Checkrss extends Controller_Template {

    public $template = 'check_rss';

    public function action_index() {
        $links = ORM::factory('link');
        $links = $links->find_all(); #->where("id", "<", "4")->find_all();

        $lines = array();
        foreach ($links as $link) {
            $items = Feed::parse($link->address);
            // Calculate 24 hours ago
            $yesterday = strtotime('yesterday'); #$yesterday = time() - (24*60*60);
            $found = false;
            // Loop through all of the items in the feed
            foreach ($items as $item) {
                // Compare the timestamp of the feed item with 24 hours ago.
                if (array_key_exists("pubDate", $item) && time($item["pubDate"]) > $yesterday) {
                    $found = true;
                    break;
                }
            }
            $lines[$link->address] = $found ? 'active' : 'inactive';
        }
        $this->template->lines = $lines;
    }

}

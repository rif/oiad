<?php defined('SYSPATH') OR die('No Direct Script Access');
#require_once(Kohana::find_file('vendor', 'simplepie/SimplePieAutoloader')); //Don't need .php extension for find_file
 
Class Controller_Checkrss extends Controller_Template
{
	public $template = 'check_rss';
    public function action_index()
    {
		$links = ORM::factory('link');
       	$links = $links->find_all();#->where("id", "<", "4")->find_all();
		
		$lines = array();
		foreach ($links as $link)
		{  
		   $items = Feed::parse($link->address);
		    $found = false;
		    // Loop through all of the items in the feed
		    foreach ($items as $item)
		    {
		        // Calculate 24 hours ago
		        $yesterday = time() - (24*60*60);
		
		        // Compare the timestamp of the feed item with 24 hours ago.
		        if (array_key_exists("pubDate", $item) && time($item["pubDate"]) > $yesterday)
		        {
		            $status =  'active';
		            $found = true;
		            break;
		        } 
		    }
		
		    if (!$found)
		    {
		        $status =  'inactive';
		    }
			$lines[$link->address] = $status;
		}
		$this->template->lines = $lines;
    }
}

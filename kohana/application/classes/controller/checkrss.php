<?php defined('SYSPATH') OR die('No Direct Script Access');
#require_once(Kohana::find_file('vendor', 'simplepie/SimplePieAutoloader')); //Don't need .php extension for find_file
 
Class Controller_Checkrss extends Controller
{
    public function action_index()
    {
		$links = ORM::factory('link');
       	$links = $links->find_all();
		
		echo "<ol>";
		foreach ($links as $link)
		{
    		echo "<li>".$link->address;

		   
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
		            echo '"active"';
		            $found = true;
		            break;
		        } 
		    }
		
		    if (!$found)
		    {
		        echo '"inactive"';
		    }
			echo "</li>";
		}
		echo "</ol>";
    }
}

<div id="categories">

<h1>Reports</h1>
<div id="reports">
	<?php
	define('ACTIVITY', 1);
	define('CATEGORY', 2);
	define('SCRAPER', 3);
	define('TITLE', 0);
	define('ITEMS',1);
	define('URL', 0);
	define('TEXT', 1);
	
	$report_links = array(
		ACTIVITY => array(TITLE => 'Site activity',
		      ITEMS => array(
		      		array(URL => '/reports/olddeals/?days=2', TEXT=>'Sites not updated in more than 48 hours'),
					array(URL => '/reports/olddeals/?days=7', TEXT=>'Sites not updated in more than a week'),
					array(URL => '/reports/olddeals/?days=30', TEXT=>'Sites not updated in more than 30 days'))
			  ),
		CATEGORY => array(TITLE => 'Sites by category',
		      ITEMS => array(	  
					array(URL => '/reports/sites/', TEXT=>'All sites'),
					array(URL => '/reports/categoryless/', TEXT=>'Sites not assigned to a category'))
			 ),
		SCRAPER => array(TITLE => 'Scrapers',
		      ITEMS => array(	  	 
					array(URL => '/reports/outofdate/', TEXT=>'Sites with out of date scrapers'))
			)
	);
	
	//add the categories to the reports array
	foreach($categories as $cat)
	{
		$report_links[CATEGORY][ITEMS][] = array(URL =>'/reports/sites/?cid='.$cat->id, TEXT=>__('Sites assigned to ').$cat->name);
	}
	
	//output a table for each category of reports
	$tr_classes = Array('even','odd');
	
	foreach($report_links as $report_category)
	{
		echo '<table class="table">';
		echo '<thead><tr><th><b>';
		echo $report_category[TITLE];
		echo '</b></th></tr></thead>';
		echo '<tbody>';
		foreach($report_category[ITEMS] as $i => $link)
		{
			echo '<tr class="'.$tr_classes[$i%2].'">';
			echo '<td class="large">'.HTML::anchor($link[URL], __($link[TEXT])).'</td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}
		
	?>
	</div>
</div>
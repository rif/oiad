<div id="categories">
<h1>Reports</h1>

<table class="table">
	<tbody>
	<?php
	
	$report_links = array(
		array('url' => '/reports/sites/', 'text'=>'All sites'),
		array('url' => '/reports/categoryless/', 'text'=>'Sites not assigned to a category'),
		array('url' => '/reports/outofdate/', 'text'=>'Sites with out of date scrapers'),
		array('url' => '/reports/olddeals/?days=2', 'text'=>'Sites not updated in more than 48 hours'),
		array('url' => '/reports/olddeals/?days=7', 'text'=>'Sites not updated in more than a week'),
		array('url' => '/reports/olddeals/?days=30', 'text'=>'Sites not updated in more than 30 days')
		
	);
	
	$tr_classes = Array('even','odd');
	
	foreach($report_links as $i=>$link)
	{
		echo '<tr class="'.$tr_classes[$i%2].'">';
		echo '<td class="large">'.HTML::anchor($link["url"], __($link["text"])).'</td>';
		echo '</tr>';
	}
		
	foreach($categories as $i=>$cat)
	{
		echo '<tr class="'.$tr_classes[$i%2].'">';
		echo '<td class="large">'.HTML::anchor('/reports/sites/?cid='.$cat->id, __('Sites assigned to ').$cat->name).'</td>';
		echo '</tr>';
	}
	?>
	</tbody>
</table>
</div>
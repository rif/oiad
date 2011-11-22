<div id="categories">
<h1>Reports</h1>

<table class="table">
	<tbody>
	<?php
	
	echo '<tr class="even">';
	echo '<td class="large">'.HTML::anchor('/reports/sites/', __('All sites')).'</td>';
	echo '</tr>';

	echo '<tr class="odd">';
	echo '<td class="large">'.HTML::anchor('/reports/categoryless/', __('Sites not assigned to a category')).'</td>';
	echo '</tr>';
	
	echo '<tr class="even">';
	echo '<td class="large">'.HTML::anchor('/reports/olddeals/?days=2', __('Sites not updated in more than 48 hours')).'</td>';
	echo '</tr>';
	
	echo '<tr class="odd">';
	echo '<td class="large">'.HTML::anchor('/reports/olddeals/?days=7', __('Sites not updated in more than a week')).'</td>';
	echo '</tr>';
	
	echo '<tr class="even">';
	echo '<td class="large">'.HTML::anchor('/reports/olddeals/?days=30', __('Sites not updated in more than 30 days')).'</td>';
	echo '</tr>';	
		
	$tr_classes = Array('odd','even');
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
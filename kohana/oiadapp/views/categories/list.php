<div id="categories">
<h1>Categories</h1>

<?php echo HTML::anchor('/categories/edit/', 'Add category');?>

<table class="table">
	<tbody>
	<?php
	$tr_classes = Array('odd','even');
	foreach($categories as $i=>$cat)
	{
		echo '<tr class="'.$tr_classes[$i%2].'">';
		echo '<td class="large">'.HTML::anchor('/categories/show/'.$cat->id, $cat->name).'</td>';
		echo '<td>'.HTML::anchor('/categories/edit/'.$cat->id, 'Edit').'</td>';
		echo '<td>'.HTML::anchor('/categories/delete/'.$cat->id, 'Delete').'</td>';
		echo "</tr>";
	}
	?>
	</tbody>
</table>
</div>
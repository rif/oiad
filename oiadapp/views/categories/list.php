<h1>Categories</h1>

<?php echo HTML::anchor('/categories/edit/', 'Add category');?>

<ol>
<?php
foreach($categories as $cat)
{
	echo '<li>';
	echo HTML::anchor('/categories/show/'.$cat->id, $cat->name."&nbsp;");
	echo HTML::anchor('/categories/edit/'.$cat->id, 'Edit')."&nbsp;";
	echo HTML::anchor('/categories/delete/'.$cat->id, 'Delete')."&nbsp;";
	echo "</li>";
}
?>
</ol>

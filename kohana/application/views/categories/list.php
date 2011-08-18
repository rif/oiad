<h1>Categories</h1>

<ol>
<?php
foreach($categories as $cat)
{
	echo '<li>';
	echo HTML::anchor('/categories/show/'.$cat->id, $cat->name."&nbsp;");
	echo HTML::anchor('/categories/edit/'.$cat->id, 'Edit')."&nbsp;";
	echo "</li>";
}
?>
</ol>

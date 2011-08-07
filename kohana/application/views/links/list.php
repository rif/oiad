<h1>Current links</h1>

<ol>
<?php
foreach($links as $link)
{
	echo '<li>';
	$p = parse_url($link->host);
	echo HTML::anchor($link->host, $p['host'])."&nbsp;";
	echo $link->active == 'T' ? '<span class="active">&nbsp;</span>&nbsp;' :  '<span class="inactive">&nbsp;</span>&nbsp;';
	echo HTML::anchor('/links/edit/'.$link->id, 'Edit')."&nbsp;";
	echo HTML::anchor('/links/scrapp/'.$link->id, 'Scrap')."&nbsp;";
	echo "</li>";
}
?>
</ol>

<h2>Add links</h2>

<?php
echo Form::open('/links/index');
echo Form::label('hosts', 'Host names (one per line):')."<br/>";
echo Form::textarea('hosts', '')."<br/>";
echo Form::submit('submit', 'Load');
echo Form::close();
if(isset($errors)){
foreach($errors as $error)
	{
		echo '<p class="error">'.$error.'</p>';
	}
}
?>

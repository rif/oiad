<h1>Current Sites</h1>

<ol>
<?php
foreach($links as $link)
{
	echo '<li>';
	$p = parse_url($link->host);
	$content = array_key_exists('host', $p) ? $p['host'] : $link->host;
	echo HTML::anchor($link->host, $content."&nbsp;");
	$class = $link->active == 'T' ? 'active':'';
	echo HTML::anchor(URL::site('/links/toggleactive/'.$link->id), "&nbsp;", array('class'=>'toggle-state '.$class)); 
	echo HTML::anchor('/links/edit/'.$link->id, 'Edit')."&nbsp;";
	echo HTML::anchor('/links/scrapp/'.$link->id, 'Scrap')."&nbsp;";
	echo "</li>";
}
?>
</ol>

<h2>Add Sites</h2>

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

<script type="text/javascript">
$(function(){
$(".toggle-state").click(function(e){
    var link = $(this);
    $.get(link.attr("href"), function(result){
        link.toggleClass("active");
    });
    e.preventDefault();
});
});
</script>
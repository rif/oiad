<h1>Current Sites</h1>

<ol>
<?php
foreach($sites as $site)
{
	echo '<li>';
	echo HTML::anchor($site->page, $site->name."&nbsp;");
	$class = $site->active == 'T' ? 'active':'';
	echo HTML::anchor(URL::site('/sites/toggleactive/'.$site->id), "&nbsp;", array('class'=>'toggle-state '.$class)); 
	echo HTML::anchor('/sites/edit/'.$site->id, 'Edit')."&nbsp;";
	echo HTML::anchor('/sites/scrapp/'.$site->id, 'Scrap')."&nbsp;";
	echo "</li>";
}
?>
</ol>

<h2>Add Sites</h2>

<?php
echo Form::open('/sites/index');
echo Form::label('pages', 'Sites DOD page links (one per line):')."<br/>";
echo Form::textarea('pages', '')."<br/>";
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
    var site = $(this);
    $.get(site.attr("href"), function(result){
        site.toggleClass("active");
    });
    e.preventDefault();
});
});
</script>

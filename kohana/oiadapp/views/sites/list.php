<h1>Current Sites</h1>
<div id="sites">
<table>
<thead>
<tr>
    <th>#</th>
    <th>Site Name</th>
    <th>Active</th>
    <th>Time to next scrapp</th>
    <th>Actions</th>
</tr>
</thead>
<tbody>
<?php
$tr_classes = Array('odd','even');
foreach($sites as $i=>$site)
{

	echo '<tr class="'.$tr_classes[$i%2].'">';
    echo '<td>'.($i + 1).'</td>';
	echo '<td>'.HTML::anchor($site->page, $site->name."</td>");
	$class = $site->active == 'T' ? 'active':'';
	echo '<td>'.HTML::anchor(URL::site('/sites/toggleactive/'.$site->id), "&nbsp;", array('class'=>'toggle-state '.$class)).'</td>';

    $refresh = $site->refresh_period;
    echo '<td style="text-align: center;">';
	if($refresh && ($site->active == 'T')) {
        $next_scrapp = strtotime("+$refresh minutes",strtotime($site->last_scrapp));
        $now = strtotime("now");
        $mins = round(($next_scrapp - $now)/60,1);
        $hours = round(($next_scrapp - $now)/(60*60),1);
        $time_to_next_scrapp = $hours>1 ? $hours."h" : $mins."min";
        if ($mins > 0){
		  echo $time_to_next_scrapp;
        } else {
          echo '<span class="expired">Expired</span>';
        }
	} else {
     echo 'NA';
    }
    echo '</td>';
	echo '<td>'.HTML::anchor('/sites/edit/'.$site->id, 'Edit').' '.HTML::anchor('/sites/scrapp/'.$site->id, 'Scrap')."</td>";
	echo "</tr>";
}
?>
</tbody>
</table>
</div>

<h2>Add Sites</h2>

<?php
echo Form::open('/sites/index');
echo Form::label('pages', 'DOD page links (one per line):')."<br/>";
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

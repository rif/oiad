<h1><?php echo $page_name ?></h1>
<div id="sites">
<table>
<thead>
<tr>
    <th>#</th>
    <th>Site Name</th>
    <th>Last scrape</th>
</tr>
</thead>
<tbody>
<?php
$tr_classes = Array('odd','even');

foreach($sites as $i=>$site)
{
	echo '<tr class="'.$tr_classes[$i%2].'">';
    echo '<td>'.($i + 1).'</td>';
	echo '<td>'.HTML::anchor('/sites/edit/'.$site->id, $site->name."</td>");
    echo '<td>'.$site->last_scrape.'</td>';
	echo "</tr>";
}

?>
</tbody>
</table>
</div>

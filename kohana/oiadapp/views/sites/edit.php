<div id="site-edit">
<?php
echo HTML::anchor('/sites/delete/'.$site->id, 'Delete', array('id'=>'delete-link'));
echo Form::open('/sites/edit/'.$site->id);
echo '<div class="site-label">'.Form::label('name', 'Site name: '); echo Form::input('name', $site->name)."</div>";
echo '<div class="site-label">'.Form::label('page', 'Site DOD page link: '); echo Form::input('page', $site->page)."</div>";
echo '<div class="site-label">'.Form::label('type', 'Site type: '); echo Form::select('type', array('deal-of-the-day'=>'Deal Of The Day', 'coupon-of-the-day'=>'Coupon Of The Day', 'other-deals'=>'The Other Deals'), $site->type)."</div>";
echo '<div class="site-label">'.Form::label('refresh_period', 'Refresh period (in minutes): '); echo Form::input('refresh_period', $site->refresh_period)."</div>";
echo '<div class="site-label">'.Form::label('active', 'Active: '); echo Form::checkbox('active','T', $site->active == 'T')."</div>";
echo '<div class="site-label">'.Form::label('is_deal', 'Is deal: '); echo Form::checkbox('is_deal','T', $site->is_deal == 'T')."</div>";
echo '<div class="site-label">'.Form::label('country', 'Country: '); echo Form::input('country', $site->country)."</div>";
echo '<div class="site-label">'.Form::label('state', 'State: '); echo Form::input('state', $site->state)."</div>";
echo '<div class="site-label">'.Form::label('city', 'City: '); echo Form::input('city', $site->city)."</div>";
echo '<div class="site-label">'.Form::label('cookie', 'Cookie: '); echo Form::input('cookie', $site->cookie)."</div>";
echo '<div>'.Form::submit('submit', 'Submit')."</div>";
echo Form::close();
?>
<div class="clear"></div>
<div id="categories">
<hr />
<h2>Categories</h2>
<table class="table">
	<tbody>
	<?php
		$tr_classes = Array('odd','even');
	    $all_categories = ORM::factory('category')->find_all();
	    foreach($all_categories as $i=>$cat){
	    	echo '<tr class="'.$tr_classes[$i%2].'">';
	    	if (!$site->has('categories', $cat)){
	    		echo '<td class="large">'.$cat->name."</td>";
	    		echo '<td>'.HTML::anchor('/sites/add_category/'.$site->id.'/'.$cat->id, 'Add')."</td>";
			} else {
	        	echo '<td class="large">'.$cat->name.'</td>';
	        	echo '<td>'.HTML::anchor('/sites/remove_category/'.$site->id.'/'.$cat->id, 'Remove')."</td>";
			}
			echo '</tr>';
	    }
	?>
	</tbody>
</table>
</div>

<div id="timesincescrape">
	<hr />	
	<?php
		$last_scrape = strtotime($site->last_scrapp);
        $now = strtotime("now");
        $mins = round(($now - $last_scrape)/60,1);
        $hours = round(($now - $last_scrape)/(60*60),1);
        $time_since_last_scrape = $hours>1 ? $hours."h" : $mins."min";		
	?>
	<h2>Time since last scrap: <?php echo $time_since_last_scrape; ?></h2>
</div>

<div id="todaydeal">
<hr />
<h2>Today's deal</h2>

<?php
	echo "<b>Site link: </b>".HTML::anchor($site->page,$site->page)."<br/>"; 
	echo "<b>Item link: </b>".HTML::anchor($deal->item_link, $deal->item_link)."<br/>"; 
	echo "<b>Pictures</b>:<br/>";
	if($deal->pictures){
		echo "<ul>";
		foreach(explode('|', $deal->pictures) as $p){
			echo '<img src="'.$p.'" alt="'.$p.'"/>';
		}
		echo "</ul>";
	}
	echo "<b>Desc short</b>:".$deal->desc_short."<br/>";
	echo "<b>Desc long</b>:".$deal->desc_long."<br/>";
	echo "<b>Price</b>:".$deal->price."<br/>";
	echo "<b>Shipping</b>:".$deal->shipping."<br/>";
	echo "<br/>";
	echo HTML::anchor('/sites/', 'Back');
?>
</div>
</div><!-- site edit -->


<script type="text/javascript">
	$('#delete-link').click(function(e){
		if (confirm("Are you shure you want to delete this site?")) {
 			$.get($(this).attr('href'));
 			window.location = '/sites';
		}
		e.preventDefault();
	});
</script>

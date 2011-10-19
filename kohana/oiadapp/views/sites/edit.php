<?php
echo Form::open('/sites/edit/'.$site->id);
echo '<div class="site-label">'.Form::label('name', 'Site name: '); echo Form::input('name', $site->name)."</div>";
echo '<div class="site-label">'.Form::label('page', 'Site DOD page link: '); echo Form::input('page', $site->page)."</div>";
echo '<div class="site-label">'.Form::label('type', 'Site type: '); echo Form::select('type', array('DealOfTheDay'=>'Deal Of The Day', 'CouponOfTheDay'=>'Coupon Of The Day', 'TheOtherDeals'=>'The Other Deals', 'BlackFriday/CyberMonday'=>'Black Friday / Cyber Monday'), $site->type)."</div>";
echo '<div class="site-label">'.Form::label('refresh_period', 'Refresh period (in minutes): '); echo Form::input('refresh_period', $site->refresh_period)."</div>";
echo '<div class="site-label">'.Form::label('active', 'Active: '); echo Form::checkbox('active','T', $site->active == 'T');
echo '<div class="site-label">'.Form::label('is_deal', 'Is deal: '); echo Form::checkbox('is_deal','T', $site->is_deal == 'T')."</div>";
echo '<div class="site-label">'.Form::label('country', 'Country: '); echo Form::input('country', $site->country)."</div>";
echo '<div class="site-label">'.Form::label('state', 'State: '); echo Form::input('state', $site->state)."</div>";
echo '<div class="site-label">'.Form::label('city', 'City: '); echo Form::input('city', $site->city)."</div>";
echo '<div class="site-label">'.Form::label('cookie', 'Cookie: '); echo Form::input('cookie', $site->cookie)."</div>";
echo '<div>'.Form::submit('submit', 'Submit')."</div>";
echo Form::close();

echo HTML::anchor('/sites/delete/'.$site->id, 'Delete', array('id'=>'delete-link'));
?>

<br/>
<br/>
<br/>
<br/>

<div id="enabled_categories">
<h4>Site's categories</h4>
<ol>
<?php
    $categories = $site->categories->find_all();
    foreach($categories as $cat){
        echo "<li>".$cat->name." ".HTML::anchor('/sites/remove_category/'.$site->id.'/'.$cat->id, 'Remove')."</li>";
    }
?>
</ol>
</div>

<!--
<h4>Today's deal</h4>

<div id="todaydeal">
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
	echo HTML::anchor('/deals/', 'Back');
?>
</div>
-->

<div id="all_categories">
<h4>Other categories</h4>
<ul>
<?php
	$all_categories = ORM::factory('category')->find_all();
	foreach ($all_categories as $cat) {
		if (!$site->has('categories', $cat)){
			echo "<li>".$cat->name." ".HTML::anchor('/sites/add_category/'.$site->id.'/'.$cat->id, 'Add')."</li>";
		}
	}
?>
</ul>
</div>



<script type="text/javascript">
	$('#delete-link').click(function(e){
		if (confirm("Are you shure you want to delete this site?")) {
 			$.get($(this).attr('href'));
 			window.location = '/sites';
		}
		e.preventDefault();
	});
</script>

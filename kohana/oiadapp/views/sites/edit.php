<?php
echo Form::open('/sites/edit/'.$site->id);
echo "<div>".Form::label('name', 'Site name:'); echo Form::input('name', $site->name)."</div>";
echo "<div>".Form::label('page', 'Site DOD page link:'); echo Form::input('page', $site->page)."</div>";
echo "<div>".Form::label('refresh_period', 'Refresh period: (in minutes)'); echo Form::input('refresh_period', $site->refresh_period)."</div>";
echo "<div>".Form::label('active', 'Active:'); echo Form::checkbox('active','T', $site->active == 'T');
echo "&nbsp;".Form::label('is_deal', 'Is deal:'); echo Form::checkbox('is_deal','T', $site->is_deal == 'T')."</div>";
echo "<div>".Form::label('country', 'Country:'); echo Form::input('country', $site->country)."</div>";
echo "<div>".Form::label('state', 'State:'); echo Form::input('state', $site->state)."</div>";
echo "<div>".Form::label('city', 'City:'); echo Form::input('city', $site->city)."</div>";
echo "<div>".Form::label('cookie', 'Cookie:'); echo Form::input('cookie', $site->cookie)."</div>";
echo "<div>".Form::submit('submit', 'Submit')."</div>";
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

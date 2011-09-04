<?php
echo Form::open('/sites/edit/'.$site->id);
echo "<div>".Form::label('name', 'Site name:'); echo Form::input('name', $site->name)."</div>";
echo "<div>".Form::label('page', 'Site DOD page link:'); echo Form::input('page', $site->page)."</div>";
echo "<div>".Form::label('refresh_period', 'Refresh period: (in minutes)'); echo Form::input('refresh_period', $site->refresh_period)."</div>";
echo "<div>".Form::label('active', 'Active:'); echo Form::checkbox('active','T', $site->active == 'T')."</div>";
echo "<div>".Form::submit('submit', 'Submit')."</div>";
echo Form::close();

echo HTML::anchor('/sites/delete/'.$site->id, 'Delete', array('id'=>'delete-link'));
?>

<h2>Categories</h2>

<ol>
<?php
    $categories = $site->categories->find_all();
    foreach($categories as $cat){
        echo "<li>".$cat->name."</li>";
    }
?>
</ol>

<script type="text/javascript">
	$('#delete-link').click(function(e){
		if (confirm("Are you shure you want to delete this site?")) { 
 			$.get($(this).attr('href'));
 			window.location = '/';
		}
		e.preventDefault();
	});
</script>
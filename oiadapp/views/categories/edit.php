<?php
echo Form::open('/categories/edit/'.$cat->id);
echo "<div>".Form::label('name', 'Category name:'); echo Form::input('name', $cat->name)."</div>";
echo "<div>".Form::submit('submit', 'Submit')."</div>";
echo Form::close();
?>

<?php
$sites = $cat->sites->find_all();
if($sites->count()){
echo HTML::anchor('/cat/delete/'.$cat->id, 'Delete', array('id'=>'delete-link'));
echo '<br/><br/><br/><h2>Sites in this category</h2>';
}
?>

<ol>
<?php
    
    foreach($sites as $site){
        echo "<li>".$site->name."</li>";
    }
?>
</ol>

<script type="text/javascript">
	$('#delete-link').click(function(e){
		if (confirm("Are you shure you want to delete this site?")) { 
 			$.get($(this).attr('href'));
 			window.location = '/categories/';
		}
		e.preventDefault();
	});
</script>
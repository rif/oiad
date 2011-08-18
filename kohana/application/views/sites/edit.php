<?php
echo Form::open('/sites/edit/'.$site->id);
echo "<div>".Form::label('name', 'Site name:'); echo Form::input('host', $site->name)."</div>";
echo "<div>".Form::label('page', 'Site DOD page link:'); echo Form::input('host', $site->page, array('type'=>'url'))."</div>";
echo "<div>".Form::label('active', 'Active:'); echo Form::checkbox('active','T', $site->active == 'T')."</div>";
echo "<div>".Form::submit('submit', 'Submit')."</div>";
echo Form::close();

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

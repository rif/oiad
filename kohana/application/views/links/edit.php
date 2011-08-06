<?php
echo Form::open('/links/edit/'.$link->id);
echo "<div>".Form::label('host', 'Host name:'); echo Form::input('host', $link->host)."</div>";
echo "<div>".Form::label('active', 'Active:'); echo Form::checkbox('active', $link->active)."</div>";
echo "<div>".Form::submit('submit', 'Submit')."</div>";
echo Form::close();
if(isset($errors)){
foreach($errors as $error)
	{
		echo '<p class="error">'.$error.'</p>';
	}
}
?>

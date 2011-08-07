<?php
echo Form::open('/links/edit/'.$link->id);
echo "<div>".Form::label('host', 'Host name:'); echo Form::input('host', $link->host, array('type'=>'url'))."</div>";
echo "<div>".Form::label('active', 'Active:'); echo Form::checkbox('active','T', $link->active == 'T')."</div>";
echo "<div>".Form::submit('submit', 'Submit')."</div>";
echo Form::close();

?>

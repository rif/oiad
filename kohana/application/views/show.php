<html>
    <head>
        <style type="text/css">
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        </style>
    </head>
    <body>
        <h1>Add link</h1>
        <?php
        echo Form::open('/showlinks');
		echo Form::label('address', 'Address'); echo Form::input('address', 'www.');
		echo Form::submit('submit', 'Add');
		echo Form::close();
		?>
		<?php
		if(isset($errors)){
        foreach($errors as $error)
			{
        		echo '<p class="error">'.$error.'</p>';
			}
		}
        ?>
		<h1>Current links</h1>
		<!--a href="<?php URL::site('/checkrss'); ?>">Check links</a-->
        <ol>
        <?php
        foreach($links as $link)
		{
        	echo "<li>".$link->address."</li>";
		}
        ?>
        </ol>
    </body>
</html>

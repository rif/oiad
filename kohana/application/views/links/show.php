<html>
    <head>
        <style type="text/css">
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        </style>
    </head>
    <body>
        <h1>Add links</h1>
        <?php
        echo Form::open('/showlinks');
		echo Form::label('hosts', 'Host names (obe per line):')."<br/>";
		echo Form::textarea('hosts', '')."<br/>";
		echo Form::submit('submit', 'Load');
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
        
                <!--<?php echo HTML::anchor('/checkrss', 'Check RSS activity'); ?>-->
		<h1>Current links</h1>
		
        <ol>
        <?php
        foreach($links as $link)
		{
        	echo '<li><a href="'.$link->host.'">'.$link->host.'</a></li>';
		}
        ?>
        </ol>
    </body>
</html>

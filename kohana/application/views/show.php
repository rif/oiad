<html>
    <head>
        <title>We've got a message for you!</title>
        <style type="text/css">
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        </style>
    </head>
    <body>
        <h1>Links</h1>
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

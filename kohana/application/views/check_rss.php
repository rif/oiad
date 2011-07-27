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
        <?php
        foreach($links as $link)
        echo $link->address;
        ?>
    </body>
</html>
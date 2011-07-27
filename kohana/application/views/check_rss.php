<html>
    <head>
        <title>We've got a message for you!</title>
        <style type="text/css">
            body {font-family: Georgia;}
            h1 {font-style: italic;}
 
        </style>
    </head>
    <body>
        <h1>Statuses</h1>
        <table>
        	<thead>
        		<th>Address</th>
        		<th>Status</th>
        	</thead>
        	<tbody>
        		
        <?php
        foreach($lines as $address=>$status)
		{
			echo "<tr>";
        	echo"<td>".$address."</td><td>".$status."</td>";
			echo "</tr>";
		} 
        ?>
        
        </tbody>
        </table>
    </body>
</html>
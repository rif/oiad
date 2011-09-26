<!DOCTYPE html>
<html lang="en">
    <head>
    		<title>One Item A Day</title>
    		<?php echo HTML::style('media/stylesheets/backend.css', array('media'=>'screen, projection')); ?>

    		<?php echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));?>

    		<!--[if lt IE 8]><?php echo HTML::style('media/stylesheets/ie.cs', array('media'=>'screen, projection')); ?><![endif]-->
    		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    </head>
    <body>

    	<div id="container">
    	<div id="header">
    	 <h1>One Item A Day</h1>
    	</div>
       <div id="sidebar">
       <ul>        
        <li><?php echo HTML::anchor('/sites', 'Home'); ?></li>
        <li><?php echo HTML::anchor('/', 'Back to frontend'); ?></li>
        <li><?php echo HTML::anchor('/categories', 'Show All Categories'); ?></li>
        <li><?php echo HTML::anchor('/sites/scrapp_expired', 'Scrap Expired Sites'); ?></li>
       	<li><?php echo HTML::anchor('/sites/scrapp', 'Scrap All Sites'); ?></li>
       	<li><?php echo HTML::anchor('/deals', 'Show Today\'s Deals'); ?></li>
       </ul>
       </div>
       <div id="content">
   		<?php echo $content; ?>
        </div> <!-- content -->
         <div id="footer"></div>
        </div> <!-- container -->
    </body>
</html>

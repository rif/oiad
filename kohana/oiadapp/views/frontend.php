<!DOCTYPE html>
<html lang="en">
    <head>
    		<title>One Item A Day</title>
    		<?php echo HTML::style('media/stylesheets/screen.css', array('media'=>'screen, projection')); ?>

    		<?php echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));?>

    		<!--[if lt IE 8]><?php echo HTML::style('media/stylesheets/ie.cs', array('media'=>'screen, projection')); ?><![endif]-->
    		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    </head>
    <body>

    	<div id="container">
       <div id="sidebar">
        <a href="/"><img src="/media/images/logo.png" alt="logo"/></a>
       <ul>
        <li><?php echo HTML::anchor('/', 'Home'); ?></li>
        <li><?php echo HTML::anchor('/', 'Daily Deals'); ?></li>
        <li><?php echo HTML::anchor('/sites', 'Administration'); ?></li>
       </ul>
       Comercials
       </div>
       <div id="content">
   		<?php echo $content; ?>
        </div> <!-- content -->
         <div id="footer"></div>
        </div> <!-- container -->
    </body>
</html>

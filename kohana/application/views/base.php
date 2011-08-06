<!DOCTYPE html> 
<html lang="en">
    <head>
    		<?php
    		echo HTML::style('media/stylesheets/screen.css', array('media'=>'screen, projection'));
    		echo HTML::style('media/stylesheets/print.css', array('media'=>'print'));
    		?>
    		 <!--[if lt IE 8]>
    		 	 <?php echo HTML::style('media/stylesheets/ie.cs', array('media'=>'screen, projection')); ?>
  			<![endif]-->
    </head>
    <body>
    	<div id="header">
    	 
    	</div>
    	<div id="container">    	
       <div id="sidebar">
       <ul>
        <li><?php echo HTML::anchor('/', 'Home'); ?></li>
       	<li><?php echo HTML::anchor('/links/scrapp', 'Scrap All Links'); ?></li>
       	<li><?php echo HTML::anchor('/deals', 'Show Today\'s deals'); ?></li>
       </ul>
       </div>
       <div id="content">
   		<?php echo $content; ?>
        </div> <!-- content -->
        </div> <!-- container -->
        <div id="footer"></div>
    </body>
</html>

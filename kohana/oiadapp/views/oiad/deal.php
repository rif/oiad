<div id="deal">
<?php $site = ORM::factory('site',$deal->site) ?>
<h1><?php echo  $site->name; ?></h1>
<?php
	echo "<b>Site link: </b>".HTML::anchor($site->page,$site->page)."<br/>"; 
	echo "<b>Item link: </b>".HTML::anchor($deal->item_link, $deal->item_link)."<br/>"; 
	echo "<b>Pictures</b>:<br/>";
	if($deal->pictures){
		echo "<ul>";
		foreach(explode('|', $deal->pictures) as $p){
			echo '<img src="'.$p.'" alt="'.$p.'"/>';
		}
		echo "</ul>";
	}
	echo "<b>Desc short</b>:".$deal->desc_short."<br/>";
	echo "<b>Desc long</b>:".$deal->desc_long."<br/>";
	echo "<b>Price</b>:".$deal->price."<br/>";
	echo "<b>Shipping</b>:".$deal->shipping."<br/>";
	echo "<br/>";
	echo HTML::anchor('/', 'Back');
?>
</div>
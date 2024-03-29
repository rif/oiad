<ul id="promo-listing" class="cf">
	<?php
$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
foreach($deals as $d){
  //$site = $a[0];
  //$d = $a[1];
?>
	<li>
		<div class="item" >
			<?php echo HTML::anchor($d -> page, $d -> name, array('class' => 'item-site'));?><br/>
			<?php echo HTML::anchor('/oiad/showdeal/' . $d -> dealsid, truncate($d -> desc_short, 70, " "), array('class' => 'item-title'));?>
			<div class="item-body">
				<?php echo '<a href="/oiad/showdeal/' . $d -> dealsid . '"><img src="' . $d -> pictures . '" alt="' . $d -> pictures . '"/></a>';?>
				<div class="item-price">
					<?php echo htmlspecialchars($d -> price);?>
				</div>
				<div class="item-shipping">
					<?php echo htmlspecialchars($d -> shipping);?>
				</div>
				<?php
				if (strlen($user)) {
					$a1 = array('class' => 'fav');
					$a2 = array('class' => 'fav');
					if ($user -> has('sites', $d -> site)) {
						$a2['class'] .= ' hidden';
					} else {
						$a1['class'] .= ' hidden';
					}
					echo HTML::anchor('/preferences/unmarkmysite/' . $d -> site, 'UnMark as favorite', $a1);
					echo HTML::anchor('/preferences/markmysite/' . $d -> site, 'Mark as favorite', $a2);
				}
				?>
			</div>
			<!-- item-body -->
		</div><!-- item-->
	</li>
	<?php
	}
	?>
</ul>
<div id="pager">
	<?php echo $paging -> render('pagination/floating');?>
</div>
<form action="#" method="post" id="item-page-form">
	<div>
		<label>Items per page</label>
		<?php echo Form::select('items_per_page', array(15 => '15', 30 => '30', 45 => '45', $all => 'all', ), $paging -> items_per_page);?>
		<!--input type="text" name="items_per_page" value="<?php echo $paging->items_per_page; ?>" /-->
		<input class="submit" type="image" src="/media/images/but-item-<?php echo $section;?>.png" alt="Show items per page" />
	</div>
</form>
<?php
// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.

function truncate($string, $limit, $break = ".", $pad = "...") {
	// return with no change if string is shorter than $limit
	if (strlen($string) <= $limit)
		return $string;

	// is $break present between $limit and the end of the string?
	if (false !== ($breakpoint = strpos($string, $break, $limit))) {
		if ($breakpoint < strlen($string) - 1) {
			$string = substr($string, 0, $breakpoint) . $pad;
		}
	}

	return $string;
}
?>
<script type="text/javascript" charset="utf-8">
	$(function() {
		$(".item").on("click", "a.fav", function() {
			var link = $(this);
			$.get($(this).attr("href"), function() {
				$("a.fav", link.parent()).toggleClass("hidden")
			});
			return false;
		});
	});

</script>
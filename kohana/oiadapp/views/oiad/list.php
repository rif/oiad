<ul id="promo-listing" class="cf">
<?php
$section = (isset($_GET['section']) && strlen($_GET['section'])) ? $_GET['section'] : 'deal-of-the-day';
foreach($sites as $site)
{      
    $today = date('Y-m-d');
    $deals = $site->deals->where('pub_date', '=', $today)->find_all();    
    foreach($deals as $d){
    if(!$d->id) break;
?>
    <li>
    <div class="item" >
    <?php echo HTML::anchor(htmlspecialchars($d->item_link) ,truncate($d->desc_short, 35, " "), array('class'=>'item-title')); ?>
   <div class="item-body">
       <?php if($d->pictures){
        foreach(explode('|', $d->pictures) as $p){
            echo '<a href="'.htmlspecialchars($d->item_link).'"><img src="'.$p.'" alt="'.$p.'"/></a>';
        }        
    }?>
    <div class="item-desc-long"><?php echo htmlspecialchars(truncate($d->desc_long, 200, " ")); ?></div>
    <div class="item-price"><?php echo htmlspecialchars($d->price); ?></div>
    <div class="item-shipping"><?php echo htmlspecialchars($d->shipping); ?></div>
    </div> <!-- item-body -->
    </div><!-- item-->
    </li>
<?php
}
}
?>
</ul>

<div id="pager">
<?php echo $paging->render('pagination/floating'); ?>
</div> 

<form action="#" method="post" id="item-page-form">
    <div>
        <label>Items per page</label>
        <input type="text" value="" />
        <input class="submit" type="image" src="/media/images/but-item-<?php echo $section; ?>.png" alt="Show items per page" />        
    </div>
</form>


<?php
// Original PHP code by Chirp Internet: www.chirp.com.au
// Please acknowledge use of this code by including this header.

function truncate($string, $limit, $break=".", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  // is $break present between $limit and the end of the string?
  if(false !== ($breakpoint = strpos($string, $break, $limit))) {
    if($breakpoint < strlen($string) - 1) {
      $string = substr($string, 0, $breakpoint) . $pad;
    }
  }
    
  return $string;
}
?>

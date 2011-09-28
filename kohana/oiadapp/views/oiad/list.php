<div id="oiad-items">
<?php
foreach($categories as $cat){
    echo '<a class="category-link selected" href="#">'.$cat->name.'</a>&nbsp;';
}
?>
<div id="items-grid">
<?php
foreach($deals as $d)
{
    $site = $d->parent_site;
    $site_categories = $site->categories->find_all();    
?>
    <div class="item <?php foreach($site_categories as $c){echo $c->name.' ';}?>" >
    <?php echo HTML::anchor($d->item_link ,truncate($d->desc_short, 35, " "), array('class'=>'item-title')); ?>
   <div class="item-body">
       <?php if($d->pictures){
        foreach(explode('|', $d->pictures) as $p){
            echo '<a href="'.$d->item_link.'"><img src="'.$p.'" alt="'.$p.'"/></a>';
        }        
    }?>
    <div class="item-desc-long"><?php echo truncate($d->desc_long, 200, " "); ?></div>
    <div class="item-price"><?php echo $d->price; ?></div>
    <div class="item-shipping"><?php echo $d->shipping; ?></div>
    </div><!-- item-body -->
    </div><!-- item -->
<?php
}
?>
</div> <!-- items-grid -->
</div> <!-- oiad -items -->

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

<script type="text/javascript">
    $(function(){
        $(".category-link").click(function(e){
            $(this).toggleClass('selected');
            $("div[class*='" + $(this).text() + "']").fadeToggle();
            e.preventDefault();
        });       
    });
</script>

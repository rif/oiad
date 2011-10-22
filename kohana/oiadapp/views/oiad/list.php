<!--
<div id="oiad-items">
<span><?php echo __('Filter by category'); ?>:</span>
<?php
foreach($categories as $cat){
    echo '<a class="category-link selected" href="#">'.$cat->name.'</a>&nbsp;';
}
?>
<div id="items-grid">
<?php
foreach($sites as $site)
{
    $site_categories = $site->categories->find_all();   
    $today = date('Y-m-d');
    $deals = $site->deals->where('pub_date', '=', $today)->find_all();    
    foreach($deals as $d){
    if(!$d->id) break;
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
    </div>
    </div>
<?php
}
}
?>
</div> 
</div> 

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
-->
<!-- Promo Listing -->
                <ul id="promo-listing" class="cf">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <!-- /Promo Listing End -->
                
                <ul id="pager">
                    <li>More: </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                </ul>
                
                <form action="#" method="post" id="item-page-form">
                    <div>
                        <label>Items per page</label>
                        <input type="text" value="" />
                        <input class="submit" type="image" src="media/images/but-item-page-form.png" alt="Show items per page" />
                    </div>
                </form>


<script type="text/javascript">
    $(function(){
        $(".category-link").click(function(e){
            $(this).toggleClass('selected');
            $("div[class*='" + $(this).text() + "']").fadeToggle();
            e.preventDefault();
        });       
    });
</script>

<div id="oiad-deals">
<?php
foreach($categories as $cat){
    echo '<a class="category-link selected" href="#">'.$cat->name.'</a>&nbsp;';
}

foreach($deals as $d)
{
    $site = ORM::factory('site',$d->site);
    $site_categories = $site->categories->find_all();
    echo '<div class="';foreach($site_categories as $c){echo $c->name.' ';}echo '">';
    echo HTML::anchor("#",$d->desc_short, array('class'=>'deal-title'));
    echo '<div class="deal-body">';
    echo "<b>Item link: </b>".HTML::anchor($d->item_link, $d->item_link)."<br/>"; 
    echo "<b>Pictures</b>:<br/>";
    if($d->pictures){
        echo "<ul>";
        foreach(explode('|', $d->pictures) as $p){
            echo '<img src="'.$p.'" alt="'.$p.'"/>';
        }
        echo "</ul>";
    }    
    echo "<b>Desc long</b>:".$d->desc_long."<br/>";
    echo "<b>Price</b>:".$d->price."<br/>";
    echo "<b>Shipping</b>:".$d->shipping."<br/>";
    echo '</div>';
    echo "</div>";
}
?>
</div>
<script type="text/javascript">
    $(function(){
        $(".category-link").click(function(e){
            $(this).toggleClass('selected');
            $("div[class*='" + $(this).text() + "']").fadeToggle();
            e.preventDefault();
        });
        $(".deal-title").click(function(e){
            $(this).next(".deal-body").slideToggle();
            e.preventDefault();
        });
    });
</script>

<ol>
<?php
$i = 0;
foreach($deals as $d)
{
    $site = ORM::factory('site',$d->site);
    echo '<li>';
    echo HTML::anchor('/deals/showdeal/'.$d->id, $site->name)."<br/>";
    echo "<b>Site link: </b>".HTML::anchor($site->page, $site->page)."<br/>"; 
    echo "<b>Item link: </b>".HTML::anchor($d->item_link, $d->item_link)."<br/>"; 
    echo "<b>Pictures</b>:<br/>";
    if($d->pictures){
        echo "<ul>";
        foreach(explode('|', $d->pictures) as $p){
            echo '<img src="'.$p.'" alt="'.$p.'"/>';
        }
        echo "</ul>";
    }
    echo "<b>Desc short</b>:".$d->desc_short."<br/>";
    echo "<b>Desc long</b>:".$d->desc_long."<br/>";
    echo "<b>Price</b>:".$d->price."<br/>";
    echo "<b>Shipping</b>:".$d->shipping."<br/>";
    echo "</li>";
}
?>
</ol>
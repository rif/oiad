<h1><?php echo  $category->name; ?></h1>

<h3>Sites in this category</h3>
<ol>
<?php
    $sites = $category->sites->find_all();
    foreach($sites as $site){
        echo "<li>".$site->name."</li>";
    }
?>
</ol>
<?php echo HTML::anchor('/categories/', 'Back');?>
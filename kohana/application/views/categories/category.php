<h1><?php echo  $category->name; ?></h1>

<ol>
<?php
    $sites = $category->sites->find_all();
    foreach($sites as $site){
        echo "<li>".$site->name."</li>";
    }
?>
</ol>

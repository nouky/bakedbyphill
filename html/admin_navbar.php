<?php

 $uri = $_SERVER['REQUEST_URI'];
$newuri = ltrim($uri, $uri[0]);
$newuri = rtrim($newuri, ".php");


$pagename = (strpos($newuri, ".php")) ?  substr($newuri, 0, strpos($newuri, ".php")) : $newuri ;

?>

<div class="page-title" data-0="background-position:98% 40px,2% 40px;"
     data-end="background-position:98% -400px,2% -400px">
    <h1><?php echo $pagename; ?></h1>
    <ul class="breadcrumb-admin">
        <li class="active"><a href="siteupdate.php">Site Update</a></li>
        <li class="active"><a href="orders.php">Orders</a></li>
        <li class="active"><a href="subscriptions.php">Subscriptions</a></li>
        <li class="active"><a href="maillist.php">Mail list</a></li>
        <li class="active"><a href="logout.php">Log out</a></li>
    </ul>
</div>

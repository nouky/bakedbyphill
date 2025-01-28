<?php

$index_href = isset($notindex) && $notindex ? "index.php" : "";

?>

<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top"  id="navbar-custom">
    <div class="container">
        <!-- Logo and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Logo -->
            <div class="navbar-brand page-scroll">
                <a href="#page-top"><img src="img/logo.png"  alt=""></a>
            </div>
        </div>
        <!-- /.navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand">
            <ul class="nav navbar-nav page-scroll navbar-right">
                <li><a href="<?php echo $index_href; ?>#page-top">Home</a></li>
                <li><a href="<?php echo $index_href; ?>#prices">Prices</a></li>
                <li><a href="<?php echo $index_href; ?>#about">About us</a></li>
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo $index_href; ?>#blog-preview">Blog Preview</a></li>
                        <li><a href="blog.php">Blog Home</a></li>
                        <li><a href="blog-post.php">Blog Post</a></li>
                    </ul>
                </li>-->

                <li><a href="<?php echo $index_href; ?>#gallery">Gallery</a></li>
                <li><a href="<?php echo $index_href; ?>#specials">Specials</a></li>
                <li><a href="<?php echo $index_href; ?>#contact">Order</a></li>
                <!--<li><a href="http://preview.themeforest.net/item/piece-of-cake-responsive-html5-template/full_screen_preview/17847772">Sample</a></li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /container -->
</nav>
<!-- /nav -->

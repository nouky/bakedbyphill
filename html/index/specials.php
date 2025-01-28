<?php
    $result = $conn->query("SELECT description, ROUND(data,0) data FROM `sitedata`");
    $records = $result->fetchAll(PDO::FETCH_ASSOC);
    
  
?>
<!-- Parallax object -->
<div class="parallax-object hidden-sm hidden-xs hidden-md"
     data-100-start="transform:rotate(-0deg); left:3%;margin-top:-100px;"
     data-center="transform:rotate(-370deg);">
    <!-- Image -->
    <img src="img/cake2.png" alt="">
</div>

<!-- Section Specials -->
<section id="specials">
    <div class="container">
        <!-- Section Heading -->
        <div class="section-heading">
            <h2>Our Specials</h2>
            <div class="hr"></div>
        </div>
        <div class="row">
            <!-- Price Table 1 -->
            <div class='package col-md-4 col-sm-12'>
                <div class='package-name'>
                    <h5>Basic Event</h5>
                </div>
                <div class='package-price'>NAF <?php echo $records[0]['data']; ?>,-</div>
                <ul>
                    <li>
                        <strong>12 people</strong>
                    </li>
                    <li>
                        <strong>½</strong>
                        liber cake
                    </li>
                    <li>
                        <strong>12</strong>
                        cupcakes
                    </li>
                    <li>
                        <strong>12</strong>
                        koi lechi
                    </li>
                </ul>
                <!-- Button -->
                <div class="page-scroll">
                    <a class="btn" href="#contact">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Order
                    </a>
                </div>
            </div>
            <div class='package featured-package col-md-4 col-sm-12 res-margin'>
                <div class='package-name'>
                    <h5>Medium Event</h5>
                </div>
                <div class='package-price'>NAF <?php echo $records[1]['data']; ?>,-</div>
                <ul>
                    <li>
                        <strong>25 people</strong>
                    </li>
                    <li>
                        <strong>1</strong>
                        liber cake
                    </li>
                    <li>
                        <strong>25</strong>
                        cupcakes
                    </li>
                    <li>
                        <strong>25</strong>
                        koi lechi
                    </li>
                </ul>
                <!-- Button -->
                <div class="page-scroll">
                    <a class="btn" href="#contact">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Order
                    </a>
                </div>
            </div>
            <div class='package col-md-4 col-sm-12 res-margin'>
                <div class='package-name'>
                    <h5>Big Event</h5>
                </div>
                <div class='package-price'>NAF <?php echo $records[2]['data']; ?>,-</div>
                <ul>
                    <li>
                        <strong>50 people</strong>
                    </li>
                    <li>
                        <strong>1½</strong>
                        liber cake
                    </li>
                    <li>
                        <strong>50</strong>
                        cupcakes
                    </li>
                    <li>
                        <strong>50</strong>
                        koi lechi
                    </li>
                </ul>
                <!-- Button -->
                <div class="page-scroll">
                    <a class="btn" href="#contact">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Order
                    </a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!--/container -->
</section>
<!-- / section-->

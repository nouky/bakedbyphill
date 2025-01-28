<!-- Section Prices -->
<section id="prices" class="color-section2">
    <div class="container">
        <!-- Section heading -->
        <div class="section-heading">
            <h2>Our Prices</h2>
            <div class="hr"></div>
        </div>
        <div class="col-md-12">
            <div class="col-md-12 no-padding">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Cakes</a></li>
                    <li><a href="#tab2" data-toggle="tab">Snacks</a></li>
                    <li><a href="#tab-frozen" data-toggle="tab">Frozen Snacks</a></li>
                    <li><a href="#tab3" data-toggle="tab">Other</a></li>
                </ul>
            </div>
            <div class="col-md-12 no-padding">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active in fade" id="tab1">
                        <?php include "prices-cakes.php"; ?>
                    </div>

                    <div class="tab-pane fade" id="tab2">
                        <?php include "prices-snacks.php"; ?>
                    </div>

                    <div class="tab-pane fade" id="tab-frozen">
                        <?php include "prices-frozen.php"; ?>
                    </div>

                    <div class="tab-pane fade" id="tab3">
                        <?php include "prices-other.php"; ?>
                    </div>
                    <!-- /tab-pane -->
                </div>
                <!-- /tab-content-->
            </div>
            <!-- /col-md-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /container -->
</section>
<!-- /Section -->

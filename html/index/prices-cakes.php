<div class="row">
    <!-- Menu: Cakes-->
    <h3>Cakes</h3>
    <!-- column -->
    <div class="col-md-6">
        <div class="polaroid">
            <p>Our famous Drip Cake</p>
            <img src="img/menu1.jpg" alt="" class="img-responsive center-block" />
        </div>
        <div class="menu-body">
            <div class="menu-section">
                <div class="menu-item menu-item-units">
                    <div class="menu-item-name unit-label">
                        Add-on
                    </div>
                    <div class="menu-item-price">
                        1lb
                    </div>
                    <div class="menu-item-price">
                        1/2lb
                    </div>
                </div>
                <?php 
                    $items = getPrices("cakesAddon");
                    foreach($items as $key => $item){
                        
                        $attrClass = $key===0 ? "menu-item menu-item-first" : "menu-item";
                    
                        echo '
                            <div class="'. $attrClass .'">
                                <div class="menu-item-name">
                                    '. $item->name .'
                                </div>
                                <div class="menu-item-price">
                                    '. setDecimal($item->price2) .'
                                </div>
                                <div class="menu-item-price">
                                    '. setDecimal($item->price1) .'
                                </div>
                            </div>                    
                        ';
                    }
                ?>
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name align-center">
                    Prices are in guilders
                    </div>
                </div>
            </div>
            <!--/ menu section -->
        </div>
        <!-- / menu body -->
    </div>
    <!-- /col-md-6 -->
    <!-- column -->
    <div class="col-md-6">
        <div class="menu-body">
            <div class="menu-section">
                <!-- Item starts -->
                <div class="menu-item menu-item-units">
                    <div class="menu-item-name">
                        &nbsp;
                    </div>
                    <div class="menu-item-price">
                        1,5lb
                    </div>
                    <div class="menu-item-price">
                        1lb
                    </div>
                    <div class="menu-item-price">
                        1/2lb
                    </div>
                </div>
                
                <?php 
                
                $items = getPrices("cakesCake");
                foreach($items as $key => $item){
                    
                    $attrClass = $key===0 ? "menu-item menu-item-first" : "menu-item";
                
                    echo '
                        <div class="'. $attrClass .'">
                            <div class="menu-item-name">
                                '. $item->name .'
                            </div>
                            <div class="menu-item-price">
                                '. setDecimal($item->price3) .'
                            </div>
                            <div class="menu-item-price">
                                '. setDecimal($item->price2) .'
                            </div>
                            <div class="menu-item-price">
                                '. setDecimal($item->price1) .'
                            </div>
                        </div>                    
                    ';
                }
                ?>

                <div class="menu-item menu-item-last">
                    <div class="menu-item-name align-center">
                       Price includes cakeboard, buttercream & 9% OB
                    </div>
                </div>

                <!-- Item ends -->
            </div>
            <!--/ menu section -->
        </div>
        <!-- / menu body -->
    </div>
    <!-- /col-md-6 -->
</div>

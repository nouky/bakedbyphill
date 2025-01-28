<div class="row">
    <!-- Menu: Pastries-->
    <h3>Frozen Snacks</h3>
    <!-- column -->
    <div class="col-md-6">
        <div class="polaroid">
            <p>Frozen Kaasbal</p>
            <img src="img/menu-frozen.jpg" alt="" class="img-responsive center-block" />
        </div>
    </div>
    <!-- /col-md-6 -->
    <!-- column -->
    <div class="col-md-6">
        <div class="menu-body">
            <div class="menu-section">
                <div class="menu-item menu-item-units">
                    <div class="menu-item-name unit-label">

                    </div>
                    <div class="menu-item-price">
                        p/s
                    </div>
                </div>
                <?php 
  
                    $items = getPrices("frozenSnacks");
                    for ($x = 0; $x < count($items); $x++) {
                        
                        $attrClass = $x===0 ? "menu-item menu-item-first" : "menu-item";
                    
                        echo '
                            <div class="'. $attrClass .'">
                                <div class="menu-item-name">
                                    '. $items[$x]->name .'
                                </div>
                                <div class="menu-item-price">
                                    '. setDecimal( $items[$x]->price) .'
                                </div> 
                            </div>                    
                        ';
                    }
                ?>                 
                <!--div class="menu-item menu-item-first">
                    <div class="menu-item-name">
                        Frozen Kroket (6 pieces)
                    </div>
                    <div class="menu-item-price">
                        8,50
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-name">
                        Frozen Kaasbal (10 pieces)
                    </div>
                    <div class="menu-item-price">
                        12,50
                    </div>
                </div>
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name">
                        Frozen Soseshirol (10 pieces)
                    </div>
                    <div class="menu-item-price">
                        10,00
                    </div>
                </div>-->
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name align-center">
                        Tur preis ta excl. OB
                    </div>
                </div>
            </div>
            <!--/ menu section -->
        </div>
        <!-- / menu body -->
    </div>
    <!-- /col-md-6 -->
</div>

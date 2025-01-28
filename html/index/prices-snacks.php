<div class="row">
    <!-- Menu: Pastries-->
    <h3>Snacks </h3>
    <!-- column -->
    <div class="col-md-6">
        <div class="polaroid">
            <p>Kaasbal</p>
            <img src="img/menu2.jpg" alt="" class="img-responsive center-block" />
        </div>
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
                
                    $division = 2;
                    
                    $items = getPrices("snacks");
                    for ($x = 0; $x < $division; $x++) {
                        
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

                <!--<div class="menu-item menu-item-first">
                    <div class="menu-item-name">
                       Webu yena
                    </div>
                    <div class="menu-item-price">
                        1,75
                    </div>
                </div>
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name">
                       Omelet
                    </div>
                    <div class="menu-item-price">
                        1,80
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
    <!-- column -->
    <div class="col-md-6">
        <div class="menu-body">
            <div class="menu-section">
                <div class="menu-item menu-item-units">
                    <div class="menu-item-name unit-label">
                        Bestelling minimo mester ta 12 pida
                    </div>
                    <div class="menu-item-price">
                        p/s
                    </div>
                </div>
                <?php 
                
                    $items = getPrices("snacks");
                    for ($x = $division; $x < count($items); $x++) {
                        
                        $attrClass = $x===$division ? "menu-item menu-item-first" : "menu-item";
                    
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
               <!-- <div class="menu-item menu-item-first">
                    <div class="menu-item-name">
                        Soesjes plain
                    </div>
                    <div class="menu-item-price">
                        1,00
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-name">
                        Soesjes Tuna
                    </div>
                    <div class="menu-item-price">
                        1,65
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-name">
                        Soesjes Ham/Keshi
                    </div>
                    <div class="menu-item-price">
                        1,75
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-name">
                        Kroket                    </div>
                    <div class="menu-item-price">
                        1,90
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-name">
                        Soshesirol
                    </div>
                    <div class="menu-item-price">
                        1,40
                    </div>
                </div>
                <div class="menu-item">
                    <div class="menu-item-name">
                        Pikabal
                    </div>
                    <div class="menu-item-price">
                        1,65
                    </div>
                </div>
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name">
                        Kaasbal
                    </div>
                    <div class="menu-item-price">
                        1,75
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

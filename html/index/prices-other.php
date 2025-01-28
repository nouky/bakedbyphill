<div class="row">
    <!-- Menu: Sweets-->
    <h3>Other</h3>
    <!-- column -->
    <div class="col-md-6">
        <div class="polaroid">
            <p>Oreo Cheesecake</p>
            <img src="img/menu3.jpg" alt="" class="img-responsive center-block" />
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
                    
                    $items = getPrices("other");
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
                
     <!--       <div class="menu-item menu-item-first">
                <div class="menu-item-name">
                    Cakebites
                </div>
                <div class="menu-item-price">
                    3,25
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">
                    Ko'i lechi plain
                </div>
                <div class="menu-item-price">
                    2,75
                </div>
            </div>
            <div class="menu-item menu-item-last">
                <div class="menu-item-name">
                    Ko'i lechi decor
                </div>
                <div class="menu-item-price">
                    3,-
                </div>
            </div>-->
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name align-center">
                        Tur preis ta excl. OB
                    </div>
                </div>
            </div>
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

                    </div>
                    <div class="menu-item-price">
                        p/s
                    </div>
                </div>
                
                <?php 
                
                    $items = getPrices("other");
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
                
            <!--<div class="menu-item menu-item-first">

                <div class="menu-item-name">
                    Oreo Cheesecake (10 inch)
                </div>
                <div class="menu-item-price">
                    65,-
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">
                    Strawberry cheesecake (10 inch)
                </div>
                <div class="menu-item-price">
                    65,-
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">
                    Mango cheesecake (10 inch)
                </div>
                <div class="menu-item-price">
                    65,-
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">
                    Cherry cheesecake (10 inch)
                </div>
                <div class="menu-item-price">
                    65,-
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>

            <div class="menu-item">
                <div class="menu-item-name">
                    Cupcake
                </div>
                <div class="menu-item-price">
                    2,75
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>
            <div class="menu-item">
                <div class="menu-item-name">
                    Mini Cupcake
                </div>
                <div class="menu-item-price">
                    2,00
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>
            <div class="menu-item menu-item-last">
                <div class="menu-item-name">
                    Cake in a jar
                </div>
                <div class="menu-item-price">
                    6,75
                </div>
                <div class="menu-item-price">

                </div>
                <div class="menu-item-price">

                </div>
            </div>-->
                <div class="menu-item menu-item-last">
                    <div class="menu-item-name align-center">
                        Tur preis ta excl. OB
                    </div>
                </div>
            </div>
        </div>
        <!-- / menu body -->
    </div>
    <!-- /col-md-6 -->
</div>

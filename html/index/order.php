<!-- Section Contact -->
<?php
$mindate = date("Y-m-d", strtotime('+1 day'));
$maxdate = date('Y-m-d', strtotime('+1 year'));
?>
<section id="contact">
    <div class="container">
        <div class="col-lg-7 col-md-7">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Place your order</h2>
                <div class="hr"></div>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="row">
            <div class="col-lg-7 col-md-7 text-center">
                <h4>Get in touch with us</h4>
                <p>For more information about our services or any other questions, feel free to contact us.</p>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i>Kaya Hematita 37</li>
                    <li><i class="fa fa-phone"></i>+5999 522 6886</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                    </li>
                </ul>
                <div class="form-style" id="contact_form">
                    <!-- Contact results -->
                    <div id="contact_results"></div>
                    <!-- Form Starts -->
                    <div class="form-group">
                        <!-- <form id="order-form">
                            <input type="text" name="name" class="form-control input-field" placeholder="Name" value="Anouck Noorden">
                            <input type="email" name="email" class="form-control input-field" placeholder="Email" value="bakedby@gmail.com">
                            <input type="text" name="phone" class="form-control input-field" placeholder="Phone number" value="512-3748">
                            <span class="form-span">Date ready:</span>
                            <input type="date" name="deliverydate" class="form-control input-field" placeholder="Event Date" value="<?php echo $mindate; ?>"
                                   min="<?php echo $mindate; ?>" max="<?php echo $maxdate; ?>">
                            <select name="delivery" class="form-control input-field" >
                                <option value="" disabled >Delivery needed?</option>
                                <option value="1" selected>Yes</option>
                                <option value="0">No</option>
                            </select>
                            <input type="text" name="eventtype" class="form-control input-field" placeholder="Type of Event?" value="Wedding" />
                            <input type="text" name="amount" class="form-control input-field" placeholder="Amount of people for the cake" value="356"/>
                            <?php echo cakeflavorsDropdown($conn); ?>
                            <textarea name="comments" id="comments" class="textarea-field form-control" rows="4" placeholder="Comments">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>

                            <label id="response-message"></label>
                            <input type="submit" class="btn" id="submit_btn" value="Place Order">
                        </form>-->

                        <form id="order-form">
                            <input type="text" name="name" class="form-control input-field" placeholder="Name">
                            <input type="email" name="email" class="form-control input-field" placeholder="Email">
                            <input type="text" name="phone" class="form-control input-field" placeholder="Phone number">
                            <span class="form-span">Delivery date:</span>
                            <input type="date" name="deliverydate" class="form-control input-field"
                                   placeholder="Event Date"
                                   min="<?php echo $mindate; ?>" max="<?php echo $maxdate; ?>">
                            <select name="delivery" class="form-control input-field">
                                <option value="" disabled selected>Delivery needed?</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            <input type="text" name="eventtype" class="form-control input-field"
                                   placeholder="Type of Event?">
                            <input type="text" name="amount" class="form-control input-field"
                                   placeholder="Amount of people for the cake">
                            <?php echo cakeflavorsDropdown($conn); ?>
                            <input type="file" name="picture" class="form-control input-field"
                                   accept=".png, .jpg, .jpeg"/>
                            <textarea name="comments" id="comments" class="textarea-field form-control" rows="4"
                                      placeholder="Comments"></textarea>
                            <label id="response-message"></label>
                            <input type="submit" class="btn" id="submit_btn" value="Place Order">
                            <div class="lds-ring hide" id="spinner"><div></div><div></div><div></div><div></div></div>
                        </form>

                    </div>
                </div>
                <!--/Contact_form -->
            </div>
            <!-- / col-lg-7-->
        </div>
        <!--/row -->
    </div>
    <!-- /container-->
</section>
<!-- / section-->

<!-- Map -->
<div class="container-fluid">
    <div id="map-canvas"></div>
</div>
<!--/map-->

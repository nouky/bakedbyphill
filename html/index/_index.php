<?php

// show the special pop up till 12 Feb 2022
if ( date("Ymd") <  20220213) {
    include_once "modal.php";
}

include_once "slider.php";
include_once "prices.php";
include_once "callout.php";
//include_once "offer-of-the-week.php";

include_once "about-us.php";
include_once "testimonials.php";
//include_once "blog_index.php";
include_once "services.php";
include_once "callout.php";
include_once "gallery.php";
include_once "specials.php";
//include_once "promo.php";
//include_once "team.php";
include_once "newsletter.php";
include_once "order.php";

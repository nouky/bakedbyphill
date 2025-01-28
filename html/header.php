<?php

include_once "php/config.php";
include_once "php/formelements.php";
include_once "php/elements.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Page title -->
    <title>:: <?php echo $sitename; ?> ::</title>
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script>
    <![endif]-->
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- Icon fonts -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/flaticons/flaticon.css" rel="stylesheet" type="text/css">
    <link href="fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah%7COpen+Sans:400,700%7CPaytone+One" rel="stylesheet">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Color Style CSS -->
    <link href="styles/sweet.css" rel="stylesheet">
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/modal.css">
    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?php

include_once "navbar.php";

?>

<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object-load" id="object_one"></div>
            <div class="object-load" id="object_two"></div>
            <div class="object-load" id="object_three"></div>
        </div>
    </div>
</div>
<!-- /preloader -->

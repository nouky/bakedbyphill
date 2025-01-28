<?php

$sitename = "Baked by Phill";
//$email =  "bakedbyphill@gmail.com";
$email =  "bakedbyphill@gmail.com";

$hostname = 'premium87.web-hosting.com';
$dbname = 'kynopmqp_bakedbyphill';
$username = 'kynopmqp_bakedbyphill';
$pass = "BAKEDbymyPHILL123";



//$conn = mysqli_connect($hostname,$username, $pass, $dbname) or die ('Unable to connect to database! Please try again later.');

try {
    $conn = new PDO('mysql:host='. $hostname .';dbname='. $dbname, $username, $pass);
} catch (PDOException $e) {
    print "Error: Contact Administrator! <br/>";
//    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*_+=';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//echo generateRandomString();

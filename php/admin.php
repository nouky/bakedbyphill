<?php

session_start();

$pass = $_POST['password'];
$response["type"] = "error";

if ($pass  === 'Girigorie99!' || $pass  === "bosakaba123") {
    $_SESSION['loggedin'] = true;
    $response["type"] = "success";
}

echo json_encode($response);



<?php

include_once "config.php";

$response = array();
$validation = validation($response, $conn);

if ($validation) {
    echo json_encode($validation);
    exit();
}

// insert to db
try {
    $sql = "INSERT INTO `subscribe` (`email`, createdate) VALUES (?,?)";

    $currentdate = date('Y-m-d H:i:s');

    $sql = $conn->prepare($sql);
    $sql->bindParam(1, $_POST['email']);
    $sql->bindParam(2, $currentdate);

    if ($sql->execute()) {
        $response["message"]['email'] = "You are subscribed to our mailing list";
        $response["type"] = "success";
    } else {
        $response["message"]['email'] = "An error occured";
        $response["type"] = "error";
    }

    echo json_encode($response);

} catch (Exception $e) {
    die("Contact administrator, there is an error!");
}


// validate form
function validation($response, $conn)
{
    $errormessage = array();

    if (strlen($_POST["email"]) < 1) {
        $errormessage['email'] = "Please enter an email";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errormessage['email'] = "Email format not valid";
    }

    if (empty($errormessage)) {
        $sql = "SELECT count(*) FROM subscribe WHERE email=? and active=1";

        $query = $conn->prepare($sql);
        $query->bindParam(1, $_POST['email']);
        $query->execute();
        $number_of_rows = $query->fetchColumn();

        if ($number_of_rows > 0) {
            $errormessage['email'] = "Your email is already registered";
        }
    }

    if (!empty($errormessage)) {
        $response["message"] = $errormessage;
        $response["type"] = "error";
    }

    return $response;
}

<?php

include_once "config.php";
include_once "sendmail.php";

$response = array();
$validation = validation($response);

if ($validation) {
    echo json_encode($validation);
    exit();
}

// insert to db
try {
    $sql = "INSERT INTO orders (`name`,`email`,`phone`,`deliverydate`,`delivery`,`eventtype`,`amount`,`cakeflavor`,`comments`) 
                 VALUES (?,?,?,?,?,?,?,?,?)";

    $sql = $conn->prepare($sql);
    $sql->bindParam(1, $_POST['name']);
    $sql->bindParam(2, $_POST['email']);
    $sql->bindParam(3, $_POST['phone']);
    $sql->bindParam(4, $_POST['deliverydate']);
    $sql->bindParam(5, $_POST['delivery']);
    $sql->bindParam(6, $_POST['eventtype']);
    $sql->bindParam(7, $_POST['amount']);
    $sql->bindParam(8, $_POST['cakeflavor']);
    $sql->bindParam(9, $_POST['comments']);

    if ($sql->execute()) {
        sendmail();
        getImage($conn->lastInsertId());
    }

    $response["message"] = "Order placed!";
    $response["type"] = "success";

    echo json_encode($response);

} catch (Exception $e) {
    die("Contact administrator, there is an error!");
}


// validate form
function validation($response)
{
    $errormessage = array();

    if (strlen($_POST["name"]) < 1) {
        $errormessage['name'] = "Please enter a name";
    } elseif (strlen($_POST["name"]) < 3) {
        $errormessage['name'] = "Name is too short";
    }
    if (strlen($_POST["email"]) < 1) {
        $errormessage['name'] = "Please enter an Email";
    }elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errormessage['email'] = "Email format not valid";
    }
    if (strlen($_POST["phone"]) < 1) {
        $errormessage['phone'] = "Please enter a phone number";
    } elseif (strlen($_POST["phone"]) < 7) {
        $errormessage['phone'] = "Phone number too short";
    }

    if (!validateDate($_POST["deliverydate"], 'Y-m-d')) {
        $errormessage['deliverydate'] = "Enter a delivery date";
    }
    if (strlen($_POST["comments"]) < 1 && $_POST["cakeflavor"] == 0) {
        $errormessage['comments'] = "Choose a cake flavor or enter a comment";
    }
    if ($_FILES['picture']['name'] != "") {

        $allowedTypes = [
            'image/png' => 'png',
            'image/jpeg' => 'jpg'
        ];

        $filepath = $_FILES['picture']['tmp_name'];
        $fileSize = filesize($filepath);
        $imageinfo = getimagesize($filepath);
        $filetype = $imageinfo["mime"];


        if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
            $errormessage['picture'] = "File must be smaller then 3MB";
        }

        if (!in_array($filetype, array_keys($allowedTypes))) {
            $errormessage['picture'] = "File format must be png, jpeg or jpg";
        }
    }


//    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST("eventdate"))) {
//        $errormessage .= '{"' . $_POST["eventdate"] . '":"Enter delivery date"}';
//    }

    if (!empty($errormessage)) {
        $response["message"] = $errormessage;
        $response["type"] = "error";
    }

    return $response;
}

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function getImage($id)
{
    if ($_FILES['picture']['name'] != "") {
        $target_dir = "uploads/";
        $file = $_FILES['picture']['name'];
        $path = pathinfo($file);
//        $filename = $path['filename'];
        $filename = "image_" . $id;

        $temp_name = $_FILES['picture']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $path['extension'];

        if (!file_exists($path_filename_ext)) {
            move_uploaded_file($temp_name, $path_filename_ext);
        }
    }
}

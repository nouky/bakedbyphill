<?php


session_start();
if (isset($_SESSION['loggedin'])) {
    
    $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
    if ($contentType === "application/json") {
    
        //raw data
        $content = trim(file_get_contents("php://input"));
    
        // decode params
        $params = json_decode($content, true);
        if (is_array($params)) {
            
            // call functions
            if ($params['func'] === 'updCakes') updCakes($params);
    
        } else {
            /* send error back to user */
            echo 'Error found';
        }
    }
}

function updCakes($params) {
    var_dump($params['func']);
    
    exit();
    
    // insert to db
    try {
        $sql = "UPDATE 
                    orders 
                SET
                    description=?, type1=?, type2=?, type3=?, active=?
                WHERE 
                    cakesid=?";
    
        $sql = $conn->prepare($sql);
        $sql->bindParam(1, $params['name']);
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
    
    
    
} 
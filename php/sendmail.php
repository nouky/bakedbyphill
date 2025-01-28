<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail()
{
    require 'phpmailer/Exception.php';
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';

    $debug = false;
    // https://blog.mailtrap.io/phpmailer/

    $mail = new PHPMailer(true); // create a new object

    $mailSubject = "Activate your account";
    $fromName = "MOOCs";
    $fromMail = "noukyrast@gmail.com";

    $recipientName = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $recipientMail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    $recipientMail = "a.noorden@gmail.com";

    $user_name = $recipientName;
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $deliverydate = filter_var($_POST["deliverydate"], FILTER_SANITIZE_STRING);
    $delivery = filter_var($_POST["delivery"], FILTER_SANITIZE_STRING);
    $eventtype = filter_var($_POST["eventtype"], FILTER_SANITIZE_STRING);
    $amount = filter_var($_POST["amount"], FILTER_SANITIZE_STRING);
    $cakeflavor = filter_var($_POST["cakeflavor"], FILTER_SANITIZE_STRING);
    $comments = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       //Enable verbose debug output
        $mail->MailerDebug = false;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'noukyrast@gmail.com';                  //SMTP username
        $mail->Password = 'bosaKABA123';                          //SMTP password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($fromMail, $fromName);
        $mail->addAddress($recipientMail, $recipientName);          //Add a recipient
        //$mail->addAddress('ellen@example.com');                   //Multiple mails
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('path/to/blank.pdf', 'blank.pdf');
        //$mail->addAttachment('download.png');                     //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');        //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $mailSubject;

        //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        //$message = file_get_contents(dirname(__FILE__).'/MailActivation.html');
        $message = file_get_contents('mails/confirm-mail.php');
        $message = str_replace('%name%', $recipientName, $message);

        $mail->msgHTML($message);
        $mail->send();

        return true;

    } catch (Exception $e) {
        return $debug ? $e->getMessage() : false;
    }
}



function sendmailxx()
{
    if ($_POST) {

        $to_email = "a.noorden@gmail.com"; //Recipient email, Replace with own email here

        //check if its an ajax request, exit if not
        /*if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

            $output = json_encode(array( //create JSON data
                'type' => 'error',
                'text' => 'Sorry Request must be Ajax POST'
            ));
            die($output); //exit script outputting json data
        }*/

        //Sanitize input data using PHP filter_var().
        $user_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $user_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
        $deliverydate = filter_var($_POST["deliverydate"], FILTER_SANITIZE_STRING);
        $delivery = filter_var($_POST["delivery"], FILTER_SANITIZE_STRING);
        $eventtype = filter_var($_POST["eventtype"], FILTER_SANITIZE_STRING);
        $amount = filter_var($_POST["amount"], FILTER_SANITIZE_STRING);
        $cakeflavor = filter_var($_POST["cakeflavor"], FILTER_SANITIZE_STRING);
        $comments = filter_var($_POST["comments"], FILTER_SANITIZE_STRING);


        //additional php validation
        /*if (strlen($user_name) < 2) {
            $output = json_encode(array('type' => 'error', 'text' => '<p>Name is too short or empty!</p>'));
            die($output);
        }
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) { //email validation
            $output = json_encode(array('type' => 'error', 'text' => '<p>Please enter a valid email!</p>'));
            die($output);
        }
        if (strlen($subject) < 3) {
            $output = json_encode(array('type' => 'error', 'text' => '<p>Subject is required</p>'));
            die($output);
        }
        if (strlen($message) < 3) {
            $output = json_encode(array('type' => 'error', 'text' => '<p>Too short message! Please enter something.</p>'));
            die($output);
        }*/

        //email body
        $message_body = $user_name . ", thank you for your order. \r\n";
        $message_body .= "\r\nOrder details:";
        $message_body .= "\r\nPhone: " . $phone;
        $message_body .= "\r\nDate ready: " . $deliverydate;
        $message_body .= "\r\nDelivery: " . $delivery;
        $message_body .= "\r\nEvent type: " . $eventtype;
        $message_body .= "\r\nAmount of people: " . $amount;
        $message_body .= "\r\nCake flavor: " . $cakeflavor;
        $message_body .= "\r\nComments:\r\n" . $comments;
        $message_body .= "\r\n\r\nWe will contact you soon !";

        //proceed with PHP email.
        $headers = 'From: ' . $user_name . '' . "\r\n" .
            'Reply-To: ' . $user_email . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $subject = "Baked by Phill Order";
        $send_mail = mail($to_email, $subject, "body", $headers);

        if (!$send_mail) {
            //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
            $output = json_encode(array('type' => 'error', 'text' => '<p>Could not send mail! Please check your PHP mail configuration.</p>'));
            die($output);
        }/* else {
            $output = json_encode(array('type' => 'message', 'text' => '<div class="alert alert-success" role="alert">
		Hi ' . $user_name . ', Thank you for your order, we will contact you soon.</div>'));
            die($output);
        }*/
    }
}

<?php

// $message = $_REQUEST['message'];
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];


$to = "contactus@notal-crest.com.ng";
$headers = "From: ". $email;

// Send email
$mailSent = mail($to, $subject, $message, $headers);

if ($mailSent) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
?>
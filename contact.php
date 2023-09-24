<?php
$to = "shankar@agsflow.com.sg";
$Subject = "New Enquiry";
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

mail($to, $Subject, $message, $headers);
echo "Email has been sent! Thank you $name";
?>
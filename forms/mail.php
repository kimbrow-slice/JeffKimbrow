<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = "Mail From Website";
$message = $_POST['message'];
$to = "kimbrowjeff@gmail.com";

$headers = "From:" .$name. "\r\n" .

$txt = "You received a new inquiery from: " .$name."\r\nEmail: " .$email. "\r\n"
    "Message: " .$message;


if($email!=NULL){
    mail($to, $subject, $txt, $headers)
}

header('Location:thankyou.html')
?>
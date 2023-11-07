<?php
$to_email = "amaraganisaikiran99@gmail.com";
$subject = "This is subject";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}

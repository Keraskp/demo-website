<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'bishalpaul650@gmail.com';

$email_subject = 'new form submission';

$email_body = "User Name: $name.\n". 
               "User Email: $visitor_email.\n". 
               "User subject: $subject.\n". 
               "user message: $message .\n". 

$to = 'debnathdipjoy362@gmail.com';

$headers = "from: $email_from\r\n";

$headers .= "Replay-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location: contect.html");
?>


<?php
 
//form data
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
$message = strip_tags($_POST['message']);
 
// prove if a bot has entered data
$botty = strip_tags($_POST['botty']);
 
if($botty != NULL){
die;
}
 
 
// the email address where the script will email the form results to
$to = "olivier@webdevdesigner.com";
 
// where the email will look like it is sent from
$from = "contact@yourwebsite.com";
 
$subject = "Contact from your website";
 
$body = "Email from your website: " . "
 
";
$body .= "Name: " . $name. "
";
$body .= "Email: " . $email . "
";
$body .= "Message: " . $message . "
";
 
$headers = "From: $from" . "
";
$headers .= "Reply-To: $from" . "
";
$headers .= "Return-Path: $from" . "
";
 
// mail(to,subject,body,headers); 
 
$mailed = mail($to, $subject, $body, $headers);
 
if($mailed){
echo '<div class="valid">Thank you for your message. We will get back to you shortly.</div>';
}else{
echo '<div class="error">A problem occured. Try again later.</div>';
}
 
?>
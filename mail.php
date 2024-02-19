<?php  
if( isset($_POST['submit']) ) {
//getting user data
$firstName = $_POST['firstName'];
$fromEmail = $_POST['email'];
$phone = $_POST['tel'];
$locationName = $_POST['location'];
$messageInfo = $_POST['message'];
 
//Recipient email, Replace with your email Address
$mailTo = 'sahanalrgowda@gmail.com';
 
//email subject
$subject = ' A New Message Received From ' .$firstName;
 
//email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>Client Name: </b> '.$firstName .'</p>
<p> <b>Email: </b> '.$fromEmail .'</p>
<p> <b>Phone Number: </b> '.$phone .'</p>
<p> <b>City Name: </b> '.$locationName .'</p>
<p> <b>Message: </b> '.$messageInfo .'</p>';
 
//header for sender info
$headers = "From: " .$firstName . "<". $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
 
//PHP mailer function
 $result = mail($mailTo, $subject, $htmlContent, $headers);
 
   //error checking
   if($result) {
    $success = "The message was sent successfully!";
   } else {
    $failed = "Error: Message was not sent, Try again Later";
   }
}
 
?>
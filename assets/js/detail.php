<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_['subject'];
$to = "anuptwri007@gmail.com"; 	
//$subject = "Mail From Anup Tiwari";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Subject =" . $subject;
$headers = "From: panchoofly@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
$headers .="Reply-To: $email"."\r\n";
 mail($to,$subject,$txt,$headers);

//redirect
header("Location:index.html");
?>
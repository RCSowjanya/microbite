<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$message= $_POST['message'];
$to = "rcsowjanya@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Phone = ". $phone . "\r\n Message =" . $message;
$headers = "From: " . $mailfrom;
"CC: rcsowjanya72@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "waterlandent@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@ochuowo.github.io.waterlandent.com" . "\r\n" .
"CC: otiato.paul@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo "Thanks for your response.";

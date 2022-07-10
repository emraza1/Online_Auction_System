<?php

function sendEmail($name,$email,$msg){
$message ='Full Name :' .$name.' <br/> Email :    '.$email. ' <br/> Price :  '.$msg. '$<br/> Congrats ! you have got the order ... 
<br/>  
<html>
<head>
	<p><font > <a  color="red" href="https://www.paypal.com/signin?country.x=US&locale.x=en_US">Click to Open Payment method</a></font></p>
<body>

</body>
</html> ' ;
require("class.phpmailer.php");
require("class.smtp.php");


$mail= new PHPMailer();

$mail-> IsSMTP();

$mail->IsSMTP();                // Sets up a SMTP connection
$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
$mail->Port = 465;  //Gmail SMTP port

$mail-> Encoding='8bit';
$mail->Subject = $msg. ' Auction Winner';

$mail->Username = "";
$mail->Password = "" ;

$mail-> SetFrom($email,$name);

$mail->AddReplyTo ($email,$name);

$mail-> MsgHTML($message);


$mail-> AddAddress ($email);
$message=$msg;
$result=$mail->send();

$message =$result ? ' EMAIL SEND Succesfully' : 'failed' ;

unset($mail);

}
?>

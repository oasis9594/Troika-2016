<?php
require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
/********** CREDENTIALS *********/
$mail->Username = "auraxrock@gmail.com";  // SMTP username
$mail->Password = "yebhigift"; // SMTP password
/********************************/
$mail->From = "admin@ieee.com" ;
$mail->FromName = "Admin";
$mail->WordWrap = 100;
$mail->IsHTML(true);                                  // set email format to HTML
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->AddReplyTo("auraxrock@gmail.com", "FestInformation");
?>
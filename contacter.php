<?php
require ('PHPMailer-5.2.14/PHPMailerAutoload.php');

$name = $_POST["user_name"];//Got the name
$email = $_POST["user_email"];//Got the email
$subject = $_POST["msg_sub"];//Got the subject
$content = wordwrap($_POST["message"], 70,"<br>\n",TRUE);//Got the message

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'sh.mantragrid.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mailman@dcetech.com';                 // SMTP username
$mail->Password = '19271201';                           // SMTP password

$mail->setFrom('Someone', 'Mailer');
$mail->addAddress('contact@ieeedtu.com', 'IEEE Council');     // Add a recipient
$mail->Subject = $subject;
$mail->Body    = "From : $name ($email)\nMessage : $content";
//$mail->AltBody = $content;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent. Redirecting...';
	echo '<script>window.location="http://troika.dcetech.com"</script>';
}
?>
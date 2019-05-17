<?php
//session_start();

// use phpMailer/PHPMailer;
// use phpMailer/Exception;
//
require ('phpMailer/PHPMailerAutoload.php');
require ('phpMailer/PHPMailer.php');
require ('phpMailer/Exception.php');
require ('phpMailer/SMTP.php');


$_SESSION["email"] = $email;
$_SESSION["username"] = $username;

$mail = new PHPMailer();
$mail->isSMTP();                            // Set mailer to use SMTP
$mail->SMTPDebug = 1;                       // 1 = err and msg 2= msg only
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `SMTP = ssl` also accepted
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->Port = 587;                          // OR 465. TCP port to connect to
$mail->IsHTML(true);
$mail->Username = 'mrsrhino2009@gmail.com'; // SMTP username
$mail->Password = 'Wingham65';              // SMTP password

$mail->setFrom('mrsrhino2009@gmail.com', 'GoMA Friends');
$mail->addReplyTo('mrsrhino2009@gmail.com', 'GoMA Friends');
$mail->addAddress($email);   // Add a recipient
$mail->addCC('mrsrhino2009@gmail.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = "<h2>Welcome to GoMA Friends, " . $username . "</h2>";
$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

$mail->Subject = 'Welcome to GoMA Friends';
$mail->Body    = $bodyContent;

if(!$mail->Send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true ;
    $mail->Username   = 'ssm.gctc@gmail.com';
    $mail->Password   = 'Santosh@2001';
    $mail->SMTPSecure ="ssl" ;
    $mail->Port       = 465;
    $mail->setFrom('ssm.gctc@gmail.com', 'Mailer');
    $mail->addAddress('santoshkumarkorada64@gmail.com'); 
    $mail->addReplyTo('ssm.gctc@gmail.com', 'ssm');
    $mail->isHTML(true);                                 
    $mail->Subject = 'Here is the subject';
    $mail->Body    = "Respected Faculty,<br><br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; You got  a request from [name] bearing roll no: [roll].<br>
    Accept/Reject the request through the portal.<br><br>
    
    Thanks and Regards,<br>
    Student Service Manager,<br>
    Geethanjali College of Engineering and Technology.<br>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
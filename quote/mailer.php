<?php

require(dirname(dirname(dirname(__FILE__))) ."/PHPMailer/src/Exception.php");
require(dirname(dirname(dirname(__FILE__))) ."/PHPMailer/src/PHPMailer.php");
require(dirname(dirname(dirname(__FILE__))) ."/PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function mailQuote($to, $subject, $message)
{
    if (!isset($_SESSION['quoteNumber'])){
        date_default_timezone_set('Etc/UTC');
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            /*$mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'lifeadvice.ca';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'quote@lifeadvice.ca';                     // SMTP username
            $mail->Password   = 'Pankaj@123';                               // SMTP password
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->SMTPSecure = 'ssl';
            //Recipients
            $mail->setFrom('quote@lifeadvice.ca');
            $mail->addAddress($to);     // Add a recipient
            $mail->addReplyTo('quote@lifeadvice.ca');
            $mail->addCC("info@lifeadvice.ca");
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->send();*/

            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'visitorguard.ca';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'quote@visitorguard.ca';                     // SMTP username
            $mail->Password   = 'Pankaj@123';                               // SMTP password
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->SMTPSecure = 'ssl';
            //Recipients
            $mail->setFrom('quote@visitorguard.ca');
            $mail->addAddress($to);     // Add a recipient
            $mail->addReplyTo('quote@visitorguard.ca');
            $mail->addCC("info@visitorguard.ca");
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->send();

        } catch (Exception $e) {
            error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            //echo "<pre>";print_r($mail->ErrorInfo);die;
        }
    }
}

?>
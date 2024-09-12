<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'gcip.nigeria@rea.gov.ng';              // SMTP username
    $mail->Password   = 'qpwn nlcz cdjx lhpj';  // SMTP password or app password if using 2FA
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS for ssl
    $mail->Port       = 465;                                    // TCP port to connect to

    // Recipients
    $mail->setFrom('gcip.nigeria@rea.gov.ng', 'GCIP Nigeria');
    $mail->addAddress('mualiyuoox@gmail.com');                  // Add a recipient

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email sent via PHPMailer using Gmail\'s SMTP server. \n Date/Time:'. date("d M, Y h:i A");
    $mail->AltBody = 'This is the plain text version of the email content.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
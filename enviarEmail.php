<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeption;

require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'juagno19@gmail.com';                     // SMTP username
    $mail->Password   = '3135888212';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('juagno19@gmail.com', 'Junior');
    $mail->addAddress('juagno15@gmail.com', 'JDAN');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'SASPA';
    $mail->Body    = 'Recuperación de contraseña <b>lista</b>';
    $mail->AltBody = 'bery good';

    $mail->send();
    echo 'Mensaje enviado';
} catch (Exception $e) {
    echo "Mensaje no enviado. Mailer Error: {$mail->ErrorInfo}";
}
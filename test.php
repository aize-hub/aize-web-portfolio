<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug  = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'torresglaizeanne@gmail.com';
    $mail->Password   = 'eoff oqel njpp biwe';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ]
    ];
    $mail->setFrom('torresglaizeanne@gmail.com', 'Test');
    $mail->addAddress('torresglaizeanne@gmail.com');
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test.';
    $mail->send();
    echo 'SENT OK';
} catch (Exception $e) {
    echo 'ERROR: ' . $mail->ErrorInfo;
}
?>
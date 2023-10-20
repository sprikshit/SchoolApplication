<?php
session_start(); // Start the session

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $senderEmail = 'namanvijayvargiya007@gmail.com';
    $recipientEmail = 'sprikshit0610@gmail.com';

    // Generate and send OTP via email
    $otp = mt_rand(100000, 999999);

    // Store OTP and the number of attempts in session variables
    $_SESSION['correctOTP'] = $otp;
    
    $_SESSION['attemptsLeft'] = 3; // Set the maximum number of attempts

    // Create a PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $senderEmail;
        $mail->Password = 'fobqdzhnvncgkdfm'; // Replace with your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($senderEmail);
        $mail->addAddress($recipientEmail);

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Your OTP';
        $mail->Body = 'Your OTP is: ' . $otp;

        $mail->send();
        echo 'success';
    } catch (Exception $e) {
        echo 'error: ' . $mail->ErrorInfo;
    }
}
?>

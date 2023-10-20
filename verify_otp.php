<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredOTP = $_POST['enteredOTP'];
    $correctOTP = $_SESSION['correctOTP']; // Retrieve the correct OTP stored in a session variable

    // Debugging output
    var_dump($enteredOTP);
    var_dump($correctOTP);

    if ($enteredOTP === $correctOTP) { // Use strict comparison (===) as OTPs are often strings
        echo 'success';
    } else {
        echo 'error';
    }
}

?>

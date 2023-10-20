<?php
// Define the expected username and password
$expectedUsername = "SchoolAdmin";
$expectedPassword = "HelloWorld@1234";

// Get user input from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the provided credentials match the expected values
if ($username === $expectedUsername && $password === $expectedPassword) {
    // Successful login, redirect to the admin dashboard
    header("Location: admin_dashboard.php");
    exit();
} else {
    // Invalid login, redirect back to the login page with an error message
    header("Location: login.php?error=1");
    exit();
}
?>

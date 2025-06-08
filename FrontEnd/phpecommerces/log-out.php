<?php
session_start();

// Unset token and destroy session
unset($_SESSION['token']);
session_destroy();

// Debug: Check if sign-in.php exists
if (!file_exists("sign-in.php")) {
    die("Error: sign-in.php not found! Check the file path.");
}

// Redirect to sign-in page
header("Location: sign-in.php");
exit();
?>

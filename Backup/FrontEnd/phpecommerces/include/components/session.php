<?php
// Get JWT token from session or redirect to login page
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../../../../BackEnd/config/jwt_secret.php';
require_once __DIR__ . '/../../../../BackEnd/vendor/autoload.php';
require_once __DIR__ . '/function.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$user = verifyJWTFromSession(); // Call function to verify JWT token

// Redirect if no valid token or if user is not an admin
if ($user === null || $user->role !== 'user') {
    header("Location: sign-in.php");
    exit();
}
?>

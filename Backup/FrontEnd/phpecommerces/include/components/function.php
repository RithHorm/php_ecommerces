<?php
require_once __DIR__ . '/../../../../BackEnd/config/jwt_secret.php';
require_once __DIR__ . '/../../../../BackEnd/vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function verifyJWTFromSession() {
    try {
        // Check if token is set in session
        if (isset($_SESSION['token'])) {
            $token = $_SESSION['token'];
            // Decode JWT token
            return JWT::decode($token, new Key(JWT_SECRET, 'HS256'));
        }
    } catch (Exception $e) {
        // Token is invalid or expired, redirect to sign-in
        header("Location: sign-in.php");
        exit();
    }
    return null;
}
?>

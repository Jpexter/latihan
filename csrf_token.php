<?php
session_start();

// Fungsi untuk menghasilkan token CSRF
function generateCsrfToken() {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Fungsi untuk memeriksa validitas token CSRF
function isCsrfTokenValid($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Panggil fungsi generateCsrfToken() setiap kali halaman dimuat
generateCsrfToken();
?>

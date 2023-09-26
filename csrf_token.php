<?php
// Fungsi untuk menghasilkan token CSRF
function generateCsrfToken() {
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token; // Mengembalikan token
}
function isCsrfTokenValid($token): bool {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Panggil fungsi generateCsrfToken() saat pertama kali dimuat
if (!isset($_SESSION['csrf_token'])) {
    generateCsrfToken();
}
?>

<!-- Praktikum 06 - Tampilan CRUD dengan Ajax -->

<?php
// Mengatur tipe konten header sebagai JSON
header('Content-Type: application/json');

// Membuat token CSRF untuk keamanan Ajax request
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Mengambil header request untuk token CSRF
$headers = apache_request_headers();

// Memeriksa apakah token CSRF ada dalam header
if (isset($headers['Csrf-Token'])) {
    // Memeriksa kecocokan token CSRF dari header dengan token CSRF yang disimpan di session
    if ($headers['Csrf-Token'] !== $_SESSION['csrf_token']) {
        // Menghasilkan respon error dalam format JSON jika token CSRF tidak cocok
        exit(json_encode(['error' => 'Wrong CSRF token']));
    }
} else {
    // Menghasilkan respon error dalam format JSON jika token CSRF tidak ada dalam header
    exit(json_encode(['error' => 'No CSRF token']));
}
?>
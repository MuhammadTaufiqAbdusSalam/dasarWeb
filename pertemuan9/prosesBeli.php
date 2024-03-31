<!-- Praktikum 07 - Penerapan Cookies pada Fitur Keranjang Belanja -->
<?php
    // Memeriksa apakah data beliNovel dan beliBuku telah dikirimkan melalui metode POST
    if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
        // Mengatur cookies dengan nilai beliNovel dan beliBuku yang dikirimkan melalui POST
        setcookie("beliNovel", $_POST["beliNovel"]);
        setcookie("beliBuku", $_POST["beliBuku"]);
        
        // Mengarahkan pengguna ke halaman keranjangBelanja.php setelah mengatur cookies
        header("location: keranjangBelanja.php");
    }
?>
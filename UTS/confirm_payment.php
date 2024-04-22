<?php
session_start(); // Mulai sesi untuk menggunakan session PHP

// Mendefinisikan array untuk menyimpan harga tiket berdasarkan tujuan
$ticket_prices = array(
    "Jakarta - Malang" => 100000, // Contoh harga untuk Jakarta - Malang
    "Malang - Surabaya" => 50000, 
    "Mojoterto - Ponorogo" => 20000 
);

// Asumsi pembayaran berhasil, mungkin Anda ingin menyimpan detail pembayaran ke database.
// Untuk tujuan demonstrasi, mari anggap detail pembayaran disimpan di $_POST.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card_number'];
    $bank = $_POST['bank'];
    $no_tlp = $_POST['no_tlp'];

} else {
    // Jika metode permintaan bukan POST, redirect ke halaman pembayaran.
    header("Location: payment.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konfirmasi Pembayaran Tiket Kereta Api</title>
<link rel="stylesheet" href="style3.css">
</head>
<body>
<div class="container">
    <h2>Konfirmasi Pembayaran Tiket Kereta Api</h2>
    <p>Pembayaran Anda telah berhasil.</p>
    <hr>
    <h3>Detail Pembayaran:</h3>
    <p>Nomor Kartu Kredit: <?php echo $card_number; ?></p>
    <p>Bank: <?php echo $bank; ?></p>
    <p>Nomor Telepon: <?php echo $no_tlp; ?></p>
    <hr>
    <h3>Total Pembayaran: Rp <?php echo $ticket_prices[$_SESSION['tujuan']]; ?></h3>
    <hr>
    <p>Terima kasih telah memesan tiket kereta api.</p>
    <hr>
    <a href="index.html">Kembali ke Beranda</a>
</div>
</body>
</html>

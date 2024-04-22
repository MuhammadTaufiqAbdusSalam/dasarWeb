<?php
session_start(); // Memulai atau melanjutkan sesi PHP yang ada.
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Konfirmasi Pemesanan Tiket Kereta Api</title>
<link rel="stylesheet" href="style5.css">
</head>
<body>
<h2>Konfirmasi Pemesanan Tiket Kereta Api</h2>
<p>Nama: <?php echo $_SESSION['nama']; ?></p> <!-- Menampilkan nama yang disimpan di session -->
<p>Tujuan: <?php echo $_SESSION['tujuan']; ?></p>
<p>Tanggal: <?php echo $_SESSION['tanggal']; ?></p>
<a href="index.html">Kembali</a>
<a href="payment.php">Pembayaran</a>
</body>
</html>

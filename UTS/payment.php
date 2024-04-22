<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pembayaran Tiket Kereta Api</title>
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
    <h2>Pembayaran Tiket Kereta Api</h2>
    <p>Nama: <?php echo $_SESSION['nama']; ?></p>
    <p>Tujuan: <?php echo $_SESSION['tujuan']; ?></p>
    <p>Tanggal: <?php echo $_SESSION['tanggal']; ?></p>
    <hr>
    <?php 
    if(isset($_COOKIE['harga_tiket'])) { //kode memeriksa apakah cookie dengan nama "harga_tiket" sudah disetel atau belum.
        echo '<h3>Total Pembayaran: Rp ' . number_format($_COOKIE['harga_tiket'], 0, ',', '.') . '</h3>'; //jika cookie sudah ada, menampilkan total pembayaran tersebut dengan menggunakan
    } else {
        echo '<h3>Total Pembayaran: Rp 0</h3>'; // Jika cookie tidak tersedia, tampilkan nilai default
    }
    ?>
    <form action="confirm_payment.php" method="post">
        <label for="card_number">Nomor Kartu Kredit:</label>
        <input type="text" id="card_number" name="card_number" required><br><br>
        <label for="bank">Pembayaran Menggunakan:</label>
                <select id="bank" name="bank">
                    <option value="BRI"><h3>BRI</h3></option>
                    <option value="BNI"><h3>BNI</h3></option>
                    <option value="BCA"><h3>BCA</h3></option>
                </select><br><br>
        <label for="no_tlp">Nomor Telfon:</label>
        <input type="text" id="no_tlp" name="no_tlp" required><br><br>
        <input type="submit" value="Bayar Sekarang">
    </form>
</div>
</body>
</html>

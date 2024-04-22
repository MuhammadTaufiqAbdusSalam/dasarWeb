<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['nama']) && isset($_POST['tujuan']) && isset($_POST['tanggal'])) {
        // Simpan data dari form ke dalam session
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['tujuan'] = $_POST['tujuan'];
        $_SESSION['tanggal'] = $_POST['tanggal'];

        // Set harga berdasarkan tujuan yang dipilih
        $harga = 0;
        switch($_POST['tujuan']) {
            case "Jakarta - Malang":
                $harga = 100000; // Misalnya harga tiket Jakarta - Malang Rp 100.000
                break;
            case "Malang - Surabaya":
                $harga = 50000; 
                break;
            case "Mojoterto - Ponorogo":
                $harga = 20000; 
                break;
            // Tambahkan case untuk tujuan lain jika diperlukan
            default:
                $harga = 0;
        }

        // Simpan harga cookie
        setcookie('harga_tiket', $harga, time() + (3600), "/"); // Cookie berlaku 

        // Redirect ke halaman konfirmasi
        header("Location: confirmation.php");
        exit();
    } else {
        // Jika ada parameter yang tidak lengkap
        echo "Tidak lengkap, coba lagi.";
    }
} else {
    // Jika metode permintaan bukan POST atau GET
    echo "Metode permintaan tidak diizinkan.";
}
?>

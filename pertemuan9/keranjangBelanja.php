<!-- Praktikum 07 - Penerapan Cookies pada Fitur Keranjang Belanja -->
<html>
<head>
</head>
<body>
    <h2> Keranjang Belanja </h2>
    <?php
        // Mengambil nilai jumlah novel dan jumlah buku dari cookies
        $beliNovel = $_COOKIE['beliNovel']; 
        $beliBuku = $_COOKIE['beliBuku'];

        // Menampilkan jumlah novel dan buku yang ada dalam keranjang belanja
        echo "Jumlah Novel: " . $beliNovel . "<br>";
        echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>
</html>
<!DOCTYPE html>
<!--kode program ini digunakan untuk memvalidasi input nama yang 
dimasukkan oleh pengguna. Jika input nama kosong, akan ditampilkan 
pesan kesalahan. Jika input nama tidak kosong, akan ditampilkan pesan 
sukses bahwa data berhasil disimpan.-->
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
    // Inisialisasi variabel
    $namaErr = "";
    $nama = "";

    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validasi nama (contoh: pastikan nama tidak kosong)
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi!";
        } else {
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan!";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>"> 
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
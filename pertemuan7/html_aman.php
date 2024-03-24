<!DOCTYPE html>
<!--kode program ini digunakan untuk membuat formulir sederhana untuk memasukkan 
nama dan email, dan kemudian melakukan validasi alamat email yang dimasukkan oleh 
pengguna. Jika alamat email valid, maka informasi nama dan email akan ditampilkan; 
jika tidak valid, akan ditampilkan pesan kesalahan.-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

        // Pengecekan alamat email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Nama: " . $nama . "<br>";
            echo "Email: " . $email;
        } else {
            echo "Alamat email tidak valid!";
        }
    }
    ?>
    <h2>Form Input PHP</h2>
    <form method="post" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required> <br>

        <label for="email">Email : </label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
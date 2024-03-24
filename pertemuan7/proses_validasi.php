<?php
/*kode program ini digunakan untuk memvalidasi data yang 
dikirim melalui metode POST dari formulir HTML, dan menampilkan 
pesan kesalahan jika ada kesalahan validasi, atau menampilkan data 
yang berhasil dikirim jika tidak ada kesalahan. */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // validasi nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi";
    }

    // validasi email
    if (empty($email)) {
        $errors[] = "Email harus diisi";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }

    // validasi password
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter";
    }

    // jika ada kesalahan variabel
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirim:<br> Nama = $nama <br> Email = $email<br> Password = $password";
    }
}

?>

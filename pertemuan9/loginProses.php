<!-- Praktikum 02 - Login single user-->
<?php
    // Mengimpor file koneksi.php yang berisi konfigurasi koneksi ke database
    include "koneksi.php";

    // Mengambil nilai username dan password dari formulir yang dikirimkan dengan metode POST
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Mengenkripsi password menggunakan fungsi md5
    
    // Membuat query untuk memeriksa apakah username dan password sesuai dengan yang ada di database
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    
    // Menjalankan query dengan mysqli_query
    $result = mysqli_query($connect, $query);
    
    // Menghitung jumlah baris yang ditemukan oleh query
    $cek = mysqli_num_rows($result);
    
    // Jika ditemukan username dan password yang cocok
    if ($cek) {
        echo "Anda berhasil login. Silahkan menuju "; 
?>
        <!-- Menampilkan tautan ke halaman HOME -->
        <a href="homeAdmin.html">Halaman HOME</a>
<?php
    } else {
        echo "Anda gagal login. Silahkan "; 
?>
        <!-- Menampilkan tautan untuk kembali login -->
        <a href="loginForm.html">Login kembali</a>
<?php
        // Menampilkan pesan kesalahan MySQL jika terjadi
        echo mysqli_error($connect);
    }    
?>
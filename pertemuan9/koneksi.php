<!-- Praktikum 02 - Login single user-->
<?php
    // Konfigurasi koneksi ke database
    $namaHost = "localhost"; 
    $username = "root";      
    $password = "";          
    $database = "praktikumdb"; 

    try {
        // Menghubungkan ke database menggunakan fungsi mysqli_connect
        $connect = mysqli_connect($namaHost, $username, $password, $database);
        
        // Memeriksa apakah koneksi berhasil atau gagal
        if ($connect) {
            echo "Koneksi dengan MySQL Berhasil <br>"; 
        } else {
            echo "Koneksi dengan MySQL Gagal " . mysqli_connect_error(); 
        }
        
        // Query SQL untuk memasukkan data ke dalam tabel user
        // $sql = "INSERT INTO user(id, username, password) VALUES('1', 'admin', '123')";

        // Menjalankan query menggunakan mysqli_query
        if (mysqli_query($connect, $sql)) {
            echo "Data berhasil ditambahkan ke tabel"; 
        } else {
            throw new Exception("Record Gagal Ditambahkan: " . mysqli_error($connect)); 
        }
        
        // Menutup koneksi ke database menggunakan mysqli_close
        mysqli_close($connect);
    } 
    catch (Exception $e) {
        echo $e->getMessage(); // Menangkap dan menampilkan pesan kesalahan jika terjadi
    }
?>
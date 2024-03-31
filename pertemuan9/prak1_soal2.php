<!-- Praktikum 01 - Mebuat Tabel User-->
<!-- Membuat tabel user-->
<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "praktikumdb";
    try {
        $connect = mysqli_connect($namaHost, $username, $password, $database);
        if ($connect) {
            echo "Koneksi dengan MySQL Berhasil <br>";
        } else {
            echo "Koneksi dengan MySQL Gagal. <br>" . mysqli_connect_error();
        }
        $sql = "CREATE TABLE user(
            id INT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(50) NOT NULL)";
        if (mysqli_query($connect, $sql)) {
            echo "Table Berhasil Ditambahkan";
        } else {
            throw new Exception("Record Gagal Ditambahkan: " . mysqli_error($connect));
        }
        mysqli_close( $connect );
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
?>
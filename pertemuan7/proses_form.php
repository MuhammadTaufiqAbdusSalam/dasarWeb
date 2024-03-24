<?php
/*kode program ini digunakan untuk memproses data 
yang dikirim melalui metode POST dari formulir HTML, 
kemudian menampilkan data tersebut dalam halaman web. */
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama : ". $nama. "<br>";
    echo "Email : ". $email;
}
?>
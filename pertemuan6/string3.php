<?php
/*kode program ini untuk membalikkan setiap kata dalam sebuah string. */
$pesan = "Saya arek Malang";
$pesanPerkata = explode(" ", $pesan);
$pesanPerkata = array_map(fn($pesan) => strrev($pesan),$pesanPerkata);
$pesan = implode(" ",$pesanPerkata);

echo $pesan."<br>";
?>
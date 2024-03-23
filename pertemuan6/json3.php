<?php
/*kode program ini untuk menampilkan pesan salam yang mencakup 
nama dan usia yang diterima dari parameter yang dikirim melalui URL. */
$nama = @$_GET['nama'];
$usia = @$_GET['usia'];

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";

?>
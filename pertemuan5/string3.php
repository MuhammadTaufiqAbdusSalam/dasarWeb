<?php
/*langkah5
//fungsi strrev() untuk membalikkan urutan karakter dari sebuah string
$pesan = "Saya arek malang";
echo strrev($pesan) . "<br>";
*/

/*langkah8*/
$pesan = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerkata = explode(" ", $pesan);//fungsi explode() dengan spasi sebagai pemisah.
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerkata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerkata);//Array yang telah dimodifikasi kemudian digabungkan kembali menjadi string menggunakan fungsi implode().
echo $pesan . "<br>";
?>
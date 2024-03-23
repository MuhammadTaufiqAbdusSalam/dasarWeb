<?php
/*kode program ini untuk mendefinisikan dan memanggil fungsi PHP yang menerima 
parameter, di mana parameter kedua memiliki nilai default yang akan digunakan jika tidak diberikan nilai saat pemanggilan fungsi. */
function perkenalan($nama,$salam = "Assalamualaikum"){
    echo $salam.", Perkenalkan, nama saya ".$nama."<br> Senang berkenalan dengan anda.<br>";

}
//memanggil fungsi
perkenalan("taufiq","hallo");
echo"<hr>";
$saya = "elon";
$ucapanSalam = "Selamat pagi";
perkenalan($saya);
?>
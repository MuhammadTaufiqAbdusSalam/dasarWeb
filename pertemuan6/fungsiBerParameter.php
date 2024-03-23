<?php
/*kode program ini untuk mendefinisikan dan memanggil fungsi PHP yang menerima 
parameter, dan menampilkan pesan perkenalan yang disesuaikan dengan nilai parameter yang diberikan. */
function perkenalan($nama,$salam){
    echo $salam.", Perkenalkan, nama saya ".$nama."<br> Senang berkenalan dengan anda.<br>";

}
//memanggil fungsi
perkenalan("taufiq","hallo");
echo"<hr>";
$saya = "elon";
$ucapanSalam = "Selamat pagi";
perkenalan($saya,$ucapanSalam);
?>
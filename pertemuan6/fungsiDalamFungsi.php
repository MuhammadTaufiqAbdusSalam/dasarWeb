<?php
/*kode program ini untuk mendefinisikan dan memanggil dua fungsi PHP: hitungUmur() 
untuk menghitung umur berdasarkan tahun lahir dan tahun sekarang, dan perkenalan() untuk menampilkan 
pesan perkenalan yang mencakup nama, umur, dan pesan salam. */
function hitungUmur($thn_lahir,$Thn_sekarang){
    $umur = $Thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama,$salam = "Assalamualaikum"){
    echo $salam.", Perkenalkan, nama saya ".$nama."<br> Senang berkenalan dengan anda.<br>";
    echo "saya berusia". hitungUmur(2004,2023)." tahun<br>";
    echo "Senang berkenalan dengan anda";
}
perkenalan("taufiq");

?>
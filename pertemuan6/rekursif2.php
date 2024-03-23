<?php
/*kode program ini untuk menampilkan pesan 
"Ini perulangan ke-{$indeks}" sebanyak 20 kali secara berurutan, 
dengan menggunakan rekursi untuk melakukan perulangan. */
function tampilAngka(int $jumlah,int $indeks = 1){
    echo "Ini perulangan ke-{$indeks}<br>";
    if($indeks < $jumlah){
        tampilAngka($jumlah,$indeks+1);
    }
}
tampilAngka(20);
?>
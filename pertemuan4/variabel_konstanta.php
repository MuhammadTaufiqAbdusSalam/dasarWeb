<?php
/*Praktikum Bagian 1. Variabel dan Konstanta. Langkah2
*/
$angka1 =10;
$angka2 =5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumalahan $angka1 dan $angka2 adalah $hasil";
/*Praktikum Bagian 1. Variabel dan Konstanta. Langkah4
*/
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah";
/*Praktikum Bagian 1. Variabel dan Konstanta. Langkah6
*/
// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", "2023");
echo "Selamat datang di" . NAMA_SITUS . ", situs yang didirikan pada tahun" . TAHUN_PENDIRIAN . ".";
?>
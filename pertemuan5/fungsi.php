<?php
/*langkah 1
//Kode ini menghasilkan output yang sesuai dengan fungsinya. Outputnya menunjukkan teks perkenalan yang diulang dua kali karena fungsi perkenalan dipanggil dua kali.
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "Perkenalan, nama saya Taufiq <br/>";//Tulis sesuai nama kalian
    echo "Senang berkenalan denagan Anda<br/> ";
 }
//memanggil fungsi yang sudah dibuat
perkenalan();
perkenalan();
*/


/*langkah 4
//Kode ini menghasilkan output yang sesuai dengan fungsinya. Outputnya menunjukkan dua kali teks perkenalan dengan nama dan salam yang berbeda.
//membuat fungsi
function perkenalan($nama, $salam) {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Taufiq";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan($saya, $ucapanSalam);
*/


/*langkah 7
//Kode ini menghasilkan output yang sesuai dengan fungsinya. Outputnya menunjukkan dua kali teks perkenalan dengan salam yang berbeda.
//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
    }
    //memanggil fungsi yang sudah dibuat
    perkenalan("Hamdana","Hallo");
    
    echo "<hr>";
    
    $saya = "Taufiq";
    $ucapanSalam = "Selamat pagi";
    
    //memanggil lagi tanpa mengisi parameter salam
    perkenalan($saya);
*/


/*langkah 10
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
  }
  
  //contoh penggunaan fungsi
  echo "Umur saya adalah " . hitungUmur(2004, 2024) . " tahun"; 
  //ubah tahun sesuai dengan tahun lahir Anda
*/


/*langkah 13*/
//Kode PHP ini digunakan untuk memperkenalkan diri dengan nama, salam, dan umur.
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    }
    //memanggil fungsi perkenalan
    perkenalan ("Taufiq");
?>
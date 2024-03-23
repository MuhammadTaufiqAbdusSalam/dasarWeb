<?php
/*kode program ini untuk menjumlahkan dua variabel global 
$x dan $y, dan kemudian mencetak hasilnya. Ini menunjukkan 
cara menggunakan variabel global $GLOBALS untuk mengakses 
variabel di luar lingkup fungsi. */
$x = 75;
$y = 25;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS ['y'];
}

addition();
echo $z;
?>
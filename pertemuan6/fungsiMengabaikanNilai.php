<?php
/*kode program ini untuk menghitung umur 
seseorang berdasarkan tahun lahir dan tahun sekarang, 
dan kemudian mencetak umur tersebut. */
function hitungUmur($thn_lahir,$Thn_sekarang){
    $umur = $Thn_sekarang - $thn_lahir;
    return $umur;
}
echo "umur saya adalah " . hitungUmur(2004,2023)." tahun";
?>
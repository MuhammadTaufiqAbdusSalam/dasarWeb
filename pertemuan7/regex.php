<?php
/*fungsi keseluruhan dari kode program ini adalah 
untuk mengeksekusi operasi pencocokan pola dan penggantian 
teks berdasarkan pola yang ditentukan menggunakan fungsi-fungsi 
preg_match() dan preg_replace() dari PHP. */
//langkah2
$pattern = '/[a-z]/';
$text = 'This is a sample text.';
if(preg_match($pattern,$text)){
    echo "Huruf kecil ditemukan !";
}else{
    echo "Tidak ada huruf kecil !";
}
//langkah6
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';

if(preg_match($pattern,$text,$matches)){
    echo "Cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
//langkah10
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern,$replacement,$text);
echo $new_text;
//langkah14
$pattern = '/go{2,3}d/';
$text = 'god is good';
if(preg_match($pattern,$text,$matches)){
    echo "Cocokan : ".$matches[0];
}else{
    echo "Tidak ada yang cocok!";
}
?>
<?php
/*kode program ini untuk menampilkan teks, menghitung panjang karakter dan kata, 
serta mengubah format teks menjadi huruf kapital dan huruf kecil. */
$lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Sed nec libero ac arcu gravida hendrerit. Fusce sodales justo id justo 
efficitur, sed iaculis turpis feugiat. Etiam auctor eget justo sit amet condimentum. 
Integer laoreet libero vel ligula fermentum, ut vestibulum purus suscipit. 
Aliquam a nunc et quam vehicula dapibus in at metus. Donec ut erat ut justo commodo vulputate. 
Sed vel bibendum ligula. Nulla facilisi.";

echo "<p>{$lorem}</p>";
echo "panjang karakter: ".strlen($lorem). "<br>";
echo "panjang kata: ". str_word_count($lorem). "<br>";
echo "<p>" . strtoupper($lorem) . "</p>";
echo "<p>" . strtolower($lorem) . "</p>";
?>
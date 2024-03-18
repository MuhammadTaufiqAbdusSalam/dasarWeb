<?php
/*langkah3 
Tanda petik dua (" ") memproses escape string secara otomatis, sehingga karakter escape seperti \n, \r, dan \t akan diinterpretasikan sebagai karakter khusus.
Tanda petik satu (' ') akan mencetak escape string secara harfiah, artinya karakter escape seperti \n, \r, dan \t akan dicetak sebagai teks biasa.
*/
echo "Baris\nbaru <br>"; //soal 10.a
echo 'Baris\nbaru <br>'; //soal 10.b
echo "Halo\rDunia <br>"; //soal 10.c
echo 'Halo\rDunia <br>'; ////soal 10.d

echo "<pre>Halo\tDunia!</pre>"; //soal 10.e
echo '<pre>Halo\tDunia!</pre>'; //soal 10.f

echo "Katakanlah \"Tidak pada narkoba!\" <br>"; //soal 10.g
echo 'Katakanlah \'Tidak pada narkoba!\' <br>'; //soal 10.h
?>
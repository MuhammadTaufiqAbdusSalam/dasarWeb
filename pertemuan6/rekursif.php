<?php
/*kode program ini contoh 
dari sebuah fungsi rekursif dalam PHP yang 
mencetak pesan "halo dunia!" secara berulang-ulang tanpa henti. */
function tampilkanHaloDunia(){
    echo "halo dunia! <br>";
    tampilkanHaloDunia();
}
tampilkanHaloDunia();
?>
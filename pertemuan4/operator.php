<?php
    $a = 10;
    $b = 5;
/*Praktikum 3*/
    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;
/*soal 3.1 Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. 
Simpan file tersebut, kemudian buka browser dan jalankan*/
    echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
    echo "Hasil Pengurangan: " . $hasilKurang . "<br>";
    echo "Hasil Perkalian: " . $hasilKali . "<br>";
    echo "Hasil Pembagian: " . $hasilBagi . "<br>";
    echo "Sisa Bagi: " . $sisaBagi . "<br>";
    echo "Hasil Pangkat: " . $pangkat . "<br>";
    echo "<br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;
/*soal 3.2 Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi menggunakan variabel Boolean. 
Simpan file tersebut, kemudian buka browser dan jalankan */
    echo "Hasil sama: " . ($hasilSama ? 'true' : 'false') . "<br>";
    echo "Hasil tidak sama: " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
    echo "Hasil lebih kecil: " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
    echo "Hasil lebih besar: " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
    echo "Hasil lebih kecil atau sama: " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
    echo "Hasil lebih besar atau sama: " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
    echo "<br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;
/*soal 3.3 Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi menggunakan variabel Boolean. 
Simpan file tersebut, kemudian buka browser dan jalankan */
    echo "Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
    echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
    echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "<br>";
    echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "<br>";
    echo "<br>";

    $penjumlahan = $a += $b;
    $pengurangan = $a -= $b;
    $perkalian = $a *= $b;
    $pembagian = $a /= $b;
    $modulo = $a %= $b;
/*soal 3.4 Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi. 
Simpan file tersebut, kemudian buka browser dan jalankan */
    echo "Hasil penjumlahan: " . $penjumlahan . "<br>";
    echo "Hasil pengurangan: " . $pengurangan . "<br>";
    echo "Hasil perkalian: " . $perkalian . "<br>";
    echo "Hasil pembagian: " . $pembagian . "<br>";
    echo "Hasil modulo: " . $modulo . "<br>";
    echo "<br>";

    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;
/*soal 3.5 Lengkapi kode program di atas sehingga bisa menampilkan hasilnya dan rapi menggunakan variabel Boolean. 
Simpan file tersebut, kemudian buka browser dan jalankan */
    echo "Hasil identik: " . ($hasilIdentik ? 'true' : 'false') . "<br>";
    echo "Hasil tidak identik: " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
    echo "<br>";
/*soal 3.6 Ada soal cerita : Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
Berapa persen kursi yang masih kosong di restoran tersebut?
*/

//Variabel yang menyimpan total jumlah kursi yang tersedia di ruangan.
    $totalKursi = 45;
//Variabel yang menyimpan jumlah kursi yang sudah ditempati oleh pengunjung.
    $kursiDitempati = 28;
//Variabel yang menghitung jumlah kursi yang masih kosong dengan mengurangkan jumlah total kursi dengan jumlah kursi yang sudah ditempati.
    $kursiKosong = $totalKursi - $kursiDitempati;
//Variabel yang menghitung persentase kursi yang masih kosong dengan cara membagi jumlah kursi kosong dengan total kursi, lalu hasilnya dikalikan dengan 100 untuk mendapatkan nilai persentase.
    $persentaseKosong = ($kursiKosong / $totalKursi) * 100;
//Menampilkan hasil perhitungan persentase kursi yang masih kosong.
    echo "Presentase kursi kosong = {$persentaseKosong} <br>";
    echo "<br>"

?>
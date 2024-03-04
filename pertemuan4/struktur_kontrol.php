<?php
/*Praktikum Bagian 4 : Penggunaan Struktur Kontrol Pada PHP. Langkah1 */
    $nilaiNumerik = 92;

    if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
        echo "Nilai huruf: B";
    } elseif($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
        echo "Nilai huruf: C";
    } elseif($nilaiNumerik < 70) {
        echo "Nilai huruf: D";
    }

    echo "<br><br>";
/*Praktikum Bagian 4 : Penggunaan Struktur Kontrol Pada PHP. Langkah5 */
    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
    echo "<br><br>";
/*Praktikum Bagian 4 : Penggunaan Struktur Kontrol Pada PHP. Langkah9 */
    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i=1; $i <= $jumlahLahan ; $i++) { 
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
    echo "<br><br>";
/*Praktikum Bagian 4 : Penggunaan Struktur Kontrol Pada PHP. Langkah13 */
    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "Total skor ujian adalah: $totalSkor";
    echo "<br><br>";
/*Praktikum Bagian 4 : Penggunaan Struktur Kontrol Pada PHP. Langkah17 */
    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if($nilai < 60) {
            echo "Nilai: $nilai (Tidak lulus) <br>";
            continue;
        }
        echo "Nilai: $nilai (Lulus) <br>";
    }
    echo "<br><br>";
/*soal cerita : Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian 
matematika. Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru 
ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah 
mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 
75, 88, 79, 70, 96) Langkah 21
 */
    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
    rsort($nilaiSiswa);
    array_splice($nilaiSiswa, 0, 2);
    array_splice($nilaiSiswa, -2);
    $nilaiTotal = 0;

    foreach ($nilaiSiswa as $nilai) {
        $nilaiTotal += $nilai;
    }

    echo "Total nilai dari 10 siswa dengan mengabaikan dua nilai tertinggi dan dua terendah adalah: $nilaiTotal";
    echo "<br> Nilai rata-rata dari nilai siswa tersebut adalah: " . $nilaiTotal / count($nilaiSiswa);
    echo "<br><br>";
/*soal cerita : Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. Bantu 
pelanggan ini untuk menghitung harga yang harus dibayar setelah mendapatkan diskon. Langkah 23
 */
    $hargaProduk = 120000;
    $totalHarga = $hargaProduk * 1;;
    $hargaSetelahDiskon = 0;

    if($totalHarga > 100000) {
        echo "Anda mendapatkan diskon 20%";
        $hargaSetelahDiskon = $totalHarga - (($totalHarga * 20) / 100);
        echo "<br> Total belanjaan Anda adalah: Rp.{$hargaSetelahDiskon}";
    }
    echo "<br><br>";
/*soal cerita : Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. Jika mereka memiliki lebih dari 500 poin, 
maka mereka akan mendapatkan hadiah tambahan. Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)” Langkah 25
 */
    $totalSkor = 501;

    echo "Total skor pemain adalah: $totalSkor";
    echo "<br>Apakah pemain mendapatkan hadiah tambahan?";

    if($totalSkor > 500) {
        echo " YA";
    } else {
        echo " TIDAK";
    }
    echo "<br><br>";

 ?> 
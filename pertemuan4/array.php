<?php
//Praktikum Bagian 5 : Penggunaan Array Pada PHP langkah 2
// Menambahkan array nilaiSiswa dan menampilkan nilai siswa yang lulus saja
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai){
    if ($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: ". implode(', ', $nilaiLulus);
echo "<br>";
//Praktikum Bagian 5 : Penggunaan Array Pada PHP langkah 6
// Menambahkan array dua dimensi (daftarKaryawan) dan melakukan filter untuk mencari karyawan dengan pengalaman kerja lebih dari 5 tahun
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan){
    if ($karyawan[1] > 5){
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: ". implode(', ', $karyawanPengalamanLimaTahun);
echo "<br>";
//Praktikum Bagian 5 : Penggunaan Array Pada PHP langkah 10
// Menambahkan array tiga dimensi
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
}

/*Ada soal cerita : Seorang guru ingin mencetak daftar nilai siswa dalam ujian matematika. 
Guru tersebut memiliki data setiap siswa terdrir dari nama dan nilai. 
Bantu guru ini mencetak daftar nilai siswa yang mencapai nilai di atas rata-rata kelas. Dengan ketentuan 
nama dan nilai siswa Alice dapat 85, Bob dapat 92, Charlie dapat 78, David dapat 64, Eva dapat 90
 */
echo "--------------------Soal no 5.4--------------------<br>";
$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$siswaDiAtasRerata = [];

$totalNilai = 0;
foreach ($daftarNilaiSiswa as $nilai) {
    $totalNilai += $nilai[1];
}

$nilaiRerata = $totalNilai / count($daftarNilaiSiswa);

foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa[1] > $nilaiRerata) {
        $siswaDiAtasRerata[] = $siswa[0];
    }
}

echo "Siswa yang mendapatkan nilai lebih dari $nilaiRerata adalah: <br>" . implode(", ", $siswaDiAtasRerata);

?>
<!-- Praktikum 06 - Tampilan CRUD dengan Ajax -->

<?php
session_start(); 
include 'koneksi.php'; 
include 'csrf.php'; 

$id = $_POST['id']; // Mengambil nilai ID anggota dari parameter POST

// Query untuk mengambil data anggota berdasarkan ID
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";

$sql = $db1->prepare($query); // Mempersiapkan query SQL

$sql->bind_param('i', $id); // Mengikat parameter ke query untuk mencegah SQL injection

$sql->execute(); // Menjalankan query

$res1 = $sql->get_result(); // Mendapatkan hasil query

$h = array(); // Inisialisasi array untuk menyimpan data anggota

// Melakukan iterasi untuk setiap baris hasil query dan menyimpan data ke dalam array
while ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama'] = $row["nama"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['alamat'] = $row["alamat"];
    $h['no_telp'] = $row["no_telp"];
}

// Mengembalikan data anggota dalam format JSON
echo json_encode($h);

// Menutup koneksi dengan database
$db1->close();
?>
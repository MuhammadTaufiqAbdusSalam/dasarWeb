<!-- Praktikum 06 - Tampilan CRUD dengan Ajax -->

<?php
session_start(); 
include 'koneksi.php'; 
include 'csrf.php'; 

$id = $_POST['id']; // Mengambil nilai ID anggota dari parameter POST

$query = "DELETE FROM anggota WHERE id=?"; // Query untuk menghapus data anggota berdasarkan ID

$sql = $db1->prepare($query); // Mempersiapkan query SQL

$sql->bind_param("i", $id); // Mengikat parameter ke query untuk mencegah SQL injection

$sql->execute(); // Menjalankan query untuk menghapus data

echo json_encode(['success' => 'Sukses']); // Mengirimkan respons JSON untuk menandakan bahwa operasi penghapusan berhasil

$db1->close(); // Menutup koneksi dengan database
?>
<!--Praktikum 02 - CRUD Bagian Create -->
<!--Praktikum 03 - CRUD Bagian Edit -->
<!--Praktikum 04 - CRUD Bagian Delete -->

<?php
include('koneksi.php'); // Mengimpor file koneksi.php untuk terhubung dengan database

$aksi = $_GET['aksi']; // Mengambil nilai aksi dari parameter GET

if ($aksi == 'tambah') { // Memeriksa apakah aksi adalah 'tambah'
    $nama = $_POST['nama']; // Mengambil nilai nama dari input POST
    $jenis_kelamin = $_POST['jenis_kelamin']; // Mengambil nilai jenis_kelamin dari input POST
    $alamat = $_POST['alamat']; // Mengambil nilai alamat dari input POST
    $no_telp = $_POST['no_telp']; // Mengambil nilai no_telp dari input POST

    // Query untuk menambahkan data anggota ke dalam tabel anggota
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    // Menjalankan query dan memeriksa keberhasilan eksekusi
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Mengarahkan kembali ke halaman index.php setelah berhasil menambahkan data
        exit(); // Menghentikan eksekusi script PHP setelah melakukan redirect
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi); // Menampilkan pesan jika terjadi kesalahan saat menambahkan data
    }
} elseif ($aksi == 'ubah')  { 
    if (isset($_POST['id'])) { // Memeriksa apakah id anggota telah dikirim melalui metode POST
        $id = $_POST['id']; // Mengambil nilai id anggota dari inputan POST
        $nama = $_POST['nama']; // Mengambil nilai nama dari input POST
        $jenis_kelamin = $_POST['jenis_kelamin']; // Mengambil nilai jenis_kelamin dari input POST
        $alamat = $_POST['alamat']; // Mengambil nilai alamat dari input POST
        $no_telp = $_POST['no_telp']; // Mengambil nilai no_telp dari input POST
    
        // Query untuk mengubah data anggota berdasarkan id
        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id = $id";
        
        // Menjalankan query dan memeriksa keberhasilan eksekusi
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php"); // Mengarahkan kembali ke halaman index.php setelah berhasil mengubah data
            exit(); // Menghentikan eksekusi script PHP setelah melakukan redirect
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($koneksi); // Menampilkan pesan kesalahan jika terjadi kesalahan saat mengubah data
        }
    } else {
        echo "ID tidak valid."; // Pesan yang ditampilkan jika id tidak ditemukan atau tidak valid
    }
} elseif ($aksi == 'hapus')  { 
    if (isset($_GET['id'])) { // Memeriksa apakah id anggota telah dikirim melalui metode GET
        $id = $_GET['id']; // Mengambil nilai id anggota dari parameter GET
    
        // Query untuk menghapus data anggota berdasarkan id
        $query = "DELETE FROM anggota WHERE id = $id";
        
        // Menjalankan query dan memeriksa keberhasilan eksekusi
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php"); // Mengarahkan kembali ke halaman index.php setelah berhasil mengubah data
            exit(); // Menghentikan eksekusi script PHP setelah melakukan redirect
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi); // Menampilkan pesan kesalahan jika terjadi kesalahan saat mengubah data
        }
    } else {
        echo "ID tidak valid."; // Pesan yang ditampilkan jika id tidak ditemukan atau tidak valid
    }
} else {
    header("Location: index.php");
}
mysqli_close($koneksi); // Menutup koneksi dengan database
?>
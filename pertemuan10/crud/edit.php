<!--Praktikum 03 - CRUD Bagian Update -->
<!--Praktikum 05 - Tampilan CRUD dengan Bootstrap -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Mengimpor file CSS Bootstrap -->
</head>
<body>
    <?php
    include('koneksi.php'); // Mengimpor file koneksi.php untuk terhubung dengan database
    $id = $_GET['id']; // Mengambil nilai ID anggota dari parameter GET
    $query = "SELECT * FROM anggota WHERE id= $id"; // Query untuk mengambil data anggota berdasarkan ID
    $result = mysqli_query($koneksi, $query); // Menjalankan query
    $row = mysqli_fetch_assoc($result); // Mengambil baris data hasil query sebagai asosiatif array
    mysqli_close($koneksi); // Menutup koneksi dengan database
    ?>
    <div class="container">
        <h2>Edit Data Anggota</h2>
        <!-- Form untuk mengedit data anggota -->
        <form action="proses.php?aksi=ubah" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <!-- Input tersembunyi untuk menyimpan ID anggota -->
            <div class="form-group">    
                <label for="nama">Nama:</label>
                <input type="text" class="form_control" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required> <!-- Input untuk nama anggota -->
            </div>
            <div class="form-group">    
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="form-check">    
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if ($row['jenis_kelamin'] === 'L') echo 'checked'; ?> required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">    
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P') echo 'checked'; ?> required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">    
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $row['alamat']; ?>" required> <!-- Input untuk alamat anggota -->
            </div>
            <div class="form-group">    
                <label for="no_telp">No. Telp:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" required> <!-- Input untuk nomor telepon anggota -->
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button> <!-- Tombol untuk menyimpan perubahan -->
        </form> <!-- Tutup form -->
        <a class="btn btn-secondary mt-2" href="index.php">Kembali</a> <!-- Link untuk kembali ke halaman utama -->
    </div> <!-- Tutup div container -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Mengimpor jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> <!-- Mengimpor Popper.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Mengimpor file JS Bootstrap -->
</body>
</html>
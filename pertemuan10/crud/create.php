<!--Praktikum 02 - CRUD Bagian Create -->
<!--Praktikum 05 - Tampilan CRUD dengan Bootstrap -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Mengimpor file CSS Bootstrap -->
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post"> <!-- Form untuk menambahkan data anggota baru, aksi form diarahkan ke proses.php dengan aksi=tambah -->
            <div class="form-group">    
                <label for="nama">Nama: </label> <!-- Label dan input field untuk nama anggota -->
                <input type="text" class="form_control" name="nama" id="nama" required> <!-- Input teks untuk nama anggota, atribut required memastikan field tidak boleh kosong -->
            </div>
            <div class="form-group">    
                <label for="jenis_kelamin">Jenis Kelamin: </label> <!-- Label untuk jenis kelamin anggota -->
                <div class="form-check"> <!-- Grup tombol radio untuk memilih jenis kelamin -->
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label> 
                </div> <!-- Tutup div form-check -->
                <div class="form-check"> <!-- Grup tombol radio untuk memilih jenis kelamin -->
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" required>
                    <label class="form-check-label"  for="perempuan">Perempuan</label> 
                </div> <!-- Tutup div form-check -->
            </div> <!-- Tutup div form-group -->
            <div class="form-group">    
                <label for="alamat">Alamat:</label> <!-- Label dan input field untuk alamat anggota -->
                <input type="text" class="form_control" name="alamat" id="alamat" required> <!-- Input teks untuk alamat anggota, atribut required memastikan field tidak boleh kosong -->
            </div> <!-- Tutup div form-group -->
            <div class="form-group">    
                <label for="no_telp">No. Telp:</label> <!-- Label dan input field untuk nomor telepon anggota -->
                <input type="text" class="form_control" name="no_telp" id="no_telp" required> <!-- Input teks untuk nomor telepon anggota, atribut required memastikan field tidak boleh kosong -->
            </div> <!-- Tutup div form-group -->
            <button type="submit" class="btn btn-primary">Simpan Data</button> <!-- Tombol untuk menyimpan data -->
        </form> <!-- Tutup form -->
        <a class="btn btn-secondary mt-2" href="index.php" >Kembali</a> <!-- Tautan untuk kembali ke halaman index.php -->
    </div> <!-- Tutup div container -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Mengimpor jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> <!-- Mengimpor Popper.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Mengimpor file JS Bootstrap -->
</body>
</html>
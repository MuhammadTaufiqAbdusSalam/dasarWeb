<!-- Praktikum 06 - Tampilan CRUD dengan Ajax -->

<!-- Tabel untuk menampilkan data anggota dengan menggunakan DataTables -->
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <!-- Header kolom-kolom pada tabel -->
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>No telp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('koneksi.php'); // Mengimpor file koneksi.php untuk terhubung dengan database
        $no = 1;
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $sql = $db1->prepare($query);
        $sql->execute();
        $res1 = $sql->get_result();
        // Memeriksa apakah ada baris hasil query
        if ($res1->num_rows > 0) {
            // Mengambil dan menampilkan data anggota
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama = $row['nama'];
                $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? "Laki-laki" : "Perempuan";
                $alamat = $row['alamat'];
                $no_telp = $row['no_telp'];
        ?>
        <!-- Baris data pada tabel -->
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $no_telp; ?></td>
            <td>
                <!-- Tombol untuk mengedit data -->
                <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data">
                    <i class="fa fa-edit"></i>Edit
                </button>
                <!-- Tombol untuk menghapus data -->
                <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data">
                    <i class="fa fa-trash"></i>Hapus
                </button>
            </td>
        </tr>
        <?php
            }
        } else {
        ?>
        <!-- Pesan jika tidak ada data yang ditemukan -->
        <tr>
            <td colspan="7">Tidak ada data ditemukan</td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Script untuk mengatur perilaku DataTables -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#example').DataTable(); // Mengaktifkan DataTables pada tabel dengan ID 'example'
    });

    // Fungsi untuk mereset pesan error
    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    // Event listener untuk tombol edit data
    $(document).on('click', '.edit_data', function () {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data: { id: id },
            dataType: 'json',
            success: function (response) {
                reset();
                $('html, body').animate({ scrollTop: 30 }, 'slow');
                // Mengisi nilai input dengan data anggota yang akan diubah
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if (response.jenis_kelamin == "L") {
                    document.getElementById("jenkel1").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            }, error: function (response) {
                console.log(response.responseText);
            }
        });
    });

    // Event listener untuk tombol hapus data
    $(document).on('click', '.hapus_data', function () {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "hapus_data.php",
            data: { id: id },
            success: function () {
                $('.data').load("data.php");
            }, error: function (response) {
                console.log(response.responseText);
            }
        });
    });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa Array Multidimensi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .student-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            border: 1px solid #ccc; /* Menambahkan batas di sekitar wadah */
            padding: 10px; /* Menambahkan padding di dalam bordeer */
        }
        .student-avatar {
            margin-right: 20px;
            width: 100px; /* Ukuran gambar yang lebih kecil */
        }
        .student-details {
            display: flex;
            flex-direction: column;
        }
        .student-details p {
            margin: 0;
        }
        .symbol {
            font-size: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa array multidimensi</h2>

    <?php
    // Array multidimensi untuk menyimpan data mahasiswa
    $mahasiswa = array(
        array(
            "nama" => "Okta",
            "nim" => "2344551",
            "jurusan" => "Manajemen Keuangan",
            "email" => "okta@gmail.com",
            "avatar" => "gambar1.jpeg"
        ),
        array(
            "nama" => "Sela",
            "nim" => "2344552",
            "jurusan" => "Teknik Kimia",
            "email" => "sela@gmail.com",
            "avatar" => "gambar2.jpeg"
        ),
        array(
            "nama" => "Doni",
            "nim" => "2344553",
            "jurusan" => "Teknik Mesin",
            "email" => "doni@gmail.com",
            "avatar" => "gambar3.jpeg"
        ), 
        array(
            "nama" => "Satoru",
            "nim" => "2344554",
            "jurusan" => "Teknik Mesin",
            "email" => "satoru@gmail.com",
            "avatar" => "gambar4.jpeg"
        ),
        array(
            "nama" => "Ismi",
            "nim" => "2344555",
            "jurusan" => "Manajemen Keuangan",
            "email" => "ismi@gmail.com",
            "avatar" => "gambar5.jpeg"
        )
    );

    // Menampilkan data mahasiswa menggunakan foreach
    foreach ($mahasiswa as $mhs) {
        echo '<div class="student-container">';
        echo '<img src="' . $mhs['avatar'] . '" alt="Avatar ' . $mhs['nama'] . '" class="student-avatar">';
        echo '<div class="student-details">';
        echo '<p><span class="symbol">◉</span> Nama: ' . $mhs['nama'] . '</p>';
        echo '<p><span class="symbol">◉</span> NIM: ' . $mhs['nim'] . '</p>';
        echo '<p><span class="symbol">◉</span> Jurusan: ' . $mhs['jurusan'] . '</p>';
        echo '<p><span class="symbol">◉</span> Email: ' . $mhs['email'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</body>
</html>

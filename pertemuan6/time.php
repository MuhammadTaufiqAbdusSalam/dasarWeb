<!DOCTYPE html>
<html lang="en">
    <!--kode program ini halaman HTML yang menampilkan waktu saat ini dengan 
    menggunakan PHP untuk mengambil dan menampilkan waktu dalam zona waktu Jakarta.-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Time</h3>
    <?php
        date_default_timezone_set("asia/jakarta");
        echo date("h:i:sa");
    ?>    
</body>
</html>
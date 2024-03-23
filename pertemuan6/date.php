<!DOCTYPE html>
<html>
    <!-- kode ini berfungsi untuk menampilkan tanggal hari ini 
    dalam berbagai format yang berbeda menggunakan fungsi date() dari PHP.-->
    <head></head>
    <body>
        <h3>date</h3>
        <?php
            echo "today is". date("y/m/d")."<br>";
            echo "today is". date("y.m.d")."<br>";
            echo "today is". date("y-m-d")."<br>";
            echo "today is". date("1")."<br>";
        ?>

    </body>
</html>
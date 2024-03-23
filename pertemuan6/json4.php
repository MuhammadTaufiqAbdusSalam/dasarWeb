<!DOCTYPE html>
<html lang>
    <!--kode program ini untuk menampilkan form input nama dan memproses 
    data yang dikirimkan menggunakan metode POST, kemudian menampilkan 
    nama yang dimasukkan oleh pengguna atau pesan kesalahan jika input kosong.-->
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['fname'];
            if (empty($name)){
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
    ?>
    
</body>
</html>
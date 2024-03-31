<!-- Praktikum 08 - Membuat Session -->
<?php
    // Memulai atau melanjutkan sesi
    session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <?php
        // Menampilkan nilai dari variabel sesi favcolor dan favanimal
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>"; // Menampilkan nilai variabel sesi favcolor
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";   // Menampilkan nilai variabel sesi favanimal
    ?>
</body>
</html>
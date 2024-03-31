<!-- Praktikum 08 - Membuat Session -->
<?php
    // Memulai atau melanjutkan sesi
    session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <?php
        // Menetapkan nilai variabel sesi
        $_SESSION["favcolor"] = "green"; // Menetapkan nilai "green" untuk variabel sesi favcolor
        $_SESSION["favanimal"] = "cat";  // Menetapkan nilai "cat" untuk variabel sesi favanimal
        
        // Menampilkan pesan bahwa variabel sesi telah ditetapkan
        echo "Session variables are set.";
    ?>
</body>
</html>
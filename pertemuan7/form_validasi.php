<!DOCTYPE html>
<!--kode program ini digyunakan untuk memvalidasi input data (nama, email, dan password) yang dimasukkan oleh pengguna sebelum formulir tersebut dikirimkan.-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>


        <input type="submit" value="Submit">
    </form>
    <script>
        $(document).ready(function(){
        $("#myForm").submit(function(event){
        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        if (nama === ""){
            $("#nama-error").text("Nama harus diisi");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        if (email === ""){
            $("#email-error").text("Email harus diisi");
            valid = false;
        } else {
            $("#email-error").text("");
        }

        if (password === ""){
            $("#password-error").text("Password harus diisi");
            valid = false;
        } else if (password.length < 8) {
            $("#password-error").text("Password minimal 8 karakter");
            valid = false;
        } else {
            $("#password-error").text("");
        }

        if (!valid){
            event.preventDefault();
        }
    });
});

    </script>
</body>
</html>
<!-- Pratikum 3 Upload File dengan Php dan Jquery -->
<!DOCTYPE html>
<html>
    <!--
    <head>
        <title>Unggah File Document</title>
    </head>
    <body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="upload.js"></script>
    -->

    <!-- Pratikum 3 soal 3.2
    <head>
        <title>Unggah Gambar</title>
    </head>
    <body>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" id="files" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="upload.js"></script>
        -->

    <!-- Pratikum 4 Menghias Upload File -->
    <head>
        <link rel="stylesheet" type="text/css" href="prak4_upload.css"> 
        <title>Unggah File Dokumen</title>
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <form id="upload-form" action="upload.js" method="post" enctype="multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input"> 
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>
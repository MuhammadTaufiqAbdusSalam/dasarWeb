
<!-- Praktikum 2 Multi Upload File -->
<html>
    <head>
        <title>Multiupload Dokumen</title>
    </head>
    <body>
        <!--
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
            <input type="submit" value="Unggah">
         -->
        <!--soal 2.2 praktikum 2 -->
        <h2>Unggah Dokumen</h2>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple"
            accept=" .jpg, .jpeg, .png, .gif">
        <input type="submit" value="Unggah">
        </form>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download</title>
</head>
<body>
<?php
include("../config/koneksi.php");
$sql = "select * from download where file_download = '$file_download'";
$exe = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($exe);

?>
    <button><h2>DOWNLOAD</h2></button>
    <ol>
    <li>Permenpan RB No.32 Tahun 2020</li>
    <li>Draf Junkis Permenpan RB Tahun 2020</li>
    <li>Tunjangan Jabatan Pranata Komputer</li>
    </ol>
</body>
</html>
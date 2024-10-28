<?php
    $id_user = $_GET['id_user'];
    include('../config/koneksi.php');
    $query    =mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");
    $exe      =mysqli_query ($conn, "SELECT * from halaman where nama_halaman = 'Home'");
    $result    =mysqli_fetch_array($query);
    $list = mysqli_fetch_array($exe);

    $pageinfo = $list['judul_halaman'];
    $description = $list['deskripsi_halaman'];
    echo "<title>BIODATA PRANATA KOMPUTER |" . $pageinfo. "<title>";
    include("../masterpages/header_prakom.php");
?>
<html>
<body>
    <h2>Biodata Pranata Komputer</h2>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">NIP</td>
            <td>: <?php echo $result['nip']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['nama_user']?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: <?php echo $result['jabatan']?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>: <?php echo $result['tempat_lahir']?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>: <?php echo $result['tanggal_lahir']?></td>
        </tr>
        <tr>
            <td>Pangkat</td>
            <td>: <?php echo $result['pangkat']?></td>
        </tr>
        <tr>
            <td>Golongan</td>
            <td>: <?php echo $result['golongan']?></td>
        </tr>
		<tr>
            <td>Satuan Kerja</td>
            <td>: <?php echo $result['satuan_kerja']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td><button type="button"><a href="../logout.php">Logout</a></button></td>
        </tr>
    </table>
</body>
</html>
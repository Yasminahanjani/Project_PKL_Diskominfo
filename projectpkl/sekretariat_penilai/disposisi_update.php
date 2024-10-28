<?php
include("../config/koneksi.php");
$id_user = $_POST['id_user'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$masa_penilaian = ($_POST['start']);
$masa_penilaian = ($_POST['end']);
$sql = "update user set penilai1 = '$penilai1', penilai2 = '$penilai2' where id_user ='$id'";
$exe = mysqli_query($conn, $sql);
header('Location:home_sekretariat.php');
?>
<?php
include("../config/koneksi.php");
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tempat_lahir = $_POST['tempat_lahir'];
$pangkat = $_POST['pangkat'];
$golongan = ($_POST['golongan']);
$tahun_pengajuan = ($_POST['tahun_pengajuan']);
$masa_penilaian = ($_POST['start']);
$masa_penilaian = ($_POST['end']);
$kelengkapan = ($_POST['kelengkapan']);
$unsur_utama = ($_POST['unsur_utama']);
$unsur_profesipenunjang = ($_POST['unsur_profesipenunjang']);
$sql = "update user set nama = '$nama', jabatan = '$jabatan', tempat_lahir =
'$tempat_lahir', pangkat = '$pangkat', golongan ='$golongan', tahun_pengajuan ='$tahun_pengajuan', masa_penilaian ='$start', masa_penilaian ='$end', kelengkapan ='$kelengkapan', unsur_utama ='$unsur_utama', unsur_profesipenunjang ='$unsur_profesipenunjang' where id_user =
'$id_user'";
$exe = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($exe);
header('Location:user.php');
?>
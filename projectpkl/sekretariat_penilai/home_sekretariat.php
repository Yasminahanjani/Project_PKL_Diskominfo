<?php
    $id_user = $_GET['id_user'];
    include('../config/koneksi.php');
    $query    =mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
    $exe      ="select * from halaman where nama_halaman = 'DUPAK'";
    $result    =mysqli_fetch_array($query);
    $list = mysqli_fetch_array($exe);

    $pageinfo = $list['judul_halaman'];
    $description = $list['deskripsi_halaman'];
    echo "<title>DUPAK |" . $pageinfo. "<title>";
    include("../masterpages/header_sekre.php");
?>
<h2>DUPAK PRANATA KOMPUTER</h2>
<h2>TAHUN PENGAJUAN</h2>
<?php
include("../config/koneksi.php");
?>
<script>
function KonfirmasiHapus()
{
if(confirm("Anda yakin data ini akan dihapus?"))
return true;
else
return false;

}
</script>
<div class="container">
<br/>
<br/>
<div style="margin: 5 0 5 0">
</div>

<table width="100%" align="center" border="1" cellpadding="0"
cellspacing="0" style="border-color: #C4DAE8; font-size: small;">
<thead align="center" style="background-color:#C4DAE8;">
<th>NIP</th>
<th>Nama</th>
<th>Tahun Pengajuan</th>
<th>Kelengkapan Berkas</th>
<th>Unsur Utama</th>
<th>Unsur Profesi & Penunjang</th>
<th>Disposisi</th>
</thead>
<?php
$sql = "select * from user ";
$exe = mysqli_query($conn, $sql);
while($list = mysqli_fetch_array($exe)) {
?>
<tbody>
<td><?php echo $list[1]; ?></td>
<td><?php echo $list[2]; ?></td>
<td><?php echo $list[10]; ?></td>
<td><?php echo $list[11]; ?></td>
<td><?php echo $list[12]; ?></td>
<td><?php echo $list[13]; ?></td>
<td align="center">
<a href="disposisi.php?id=<?php echo $list['id_user'];

?>">Disposisi</a></td>
</tbody>
<?php
}
?>
</table>
<hr style="color: #C4DAE8; width: 90%;"/>
<?php
include("../masterpages/footer.php");
?>
</body>
</html>
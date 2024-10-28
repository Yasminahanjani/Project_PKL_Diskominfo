<?php
    include('../config/koneksi.php');
    $query    =mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
    $exe      =mysqli_query($conn, "SELECT * FROM halaman where nama_halaman = 'PAK'");
    $result   =mysqli_fetch_array($query);
    $list     = mysqli_fetch_array($exe);

    $pageinfo = $list['judul_halaman'];
    $description = $list['deskripsi_halaman'];
    echo "<title> PAK |" . $pageinfo. "<title>";
    include("../masterpages/header_prakom.php");
?>
<body>
<h2>HASIL PENILAIAN ANGKA KREDIT PRANATA KOMPUTER</h2>
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
<th>Masa Penilaian</th>
<th>PAK</th>
</thead>
<?php
$sql = "select * from user ";
$exe = mysqli_query($conn, $sql);
while($list = mysqli_fetch_array($exe)) {
?>
<tbody>
<td><?php echo $list[1]; ?></td>
<td><?php echo $list[2]; ?></td>
<td><?php echo $list[15]; ?></br><?php echo $list[15]; ?></td>
<td><?php echo $list[17]; ?></td>
<td align="center">
</tbody>
<?php
}
?>
</table>
<hr style="color: #C4DAE8; width: 80%;"/>
<?php
include("../masterpages/footer.php");
?>
</body>
</html>
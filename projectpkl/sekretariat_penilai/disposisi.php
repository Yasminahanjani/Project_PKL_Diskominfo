<title>Sekretariat | Disposisi</title>
<?php
include('../config/koneksi.php');
$id_user = $_GET['id_user'];
$query    =mysqli_query($conn, "SELECT * FROM user WHERE id_user");
$exe      =mysqli_query ($conn, "SELECT * from halaman where nama_halaman = 'Disposisi'");
$result    =mysqli_fetch_array($query);
$list = mysqli_fetch_array($exe);

$pageinfo = "Disposisi";
$description = "";
include("../masterpages/header_sekre.php");
?>
<br/>
<br/>
<div style="margin: 5 0 5 0">
<center>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="disposisi" name="disposisi" method="post" action="disposisi_update.php">
<table width="90%" align="center" cellpadding="0" cellspacing="0"
style="border-color: #C4DAE8; font-size: small;">
<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user?>" />
<tr>
<td>Penilai 1</td>
<td>:</td>
<td><input type="text" name="penilai1" id="penilai1" size="50" value="<?php echo
$list[1] ?>" /></td>
</tr>
<tr>
<td>Penilai 2</td>
<td>:</td>
<td><input type="text" name="penilai2" id="penilai2" size="50" value="<?php echo $list['penilai2'] ?>"/></td>
</tr>
<tr>
<td>NIP</td>
<td>:</td>
<td><input type="text" name="nip" id="nip" size="50" value="<?php echo
$list['nip'] ?>" /></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama_user" id="nama_user" size="50" value="<?php
echo $list['nama_user'] ?>" /></td>
</tr>
<tr>
<td>Masa Penilaian</td>
<td>:</td>
<td><input type="text" name="start" id="start" size="25" value="<?php
echo $list['start'] ?>"/></td>
<td><input type="text" name="end" id="end" size="25" value="<?php
echo $list['end'] ?>"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>
<input type="submit" name="submit" id="button" value="Simpan" />
</td>
</tr>
</table>
</form>
<?php
include("../masterpages/footer.php");
?>
<title>Website Pribadi | Ubah User </title>
<?php
include("../config/koneksi.php");
$id = $_GET['id'];
$sql = "select * from user where id_user = '$id'";
$exe = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($exe);
?>
<br/>
<br/>
<div style="margin: 5 0 5 0">
<center>
<h3>BIODATA PRANATA KOMPUTER</h3>
<hr style="color: #C4DAE8; width: 90%;"/>
</center>
</div>
<form id="ubah_password" name="ubah_password" method="post" action="dupak_update.php">
<table width="90%" align="center" cellpadding="0" cellspacing="0"
style="border-color: #C4DAE8; font-size: small;">
<input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
<tr>
<td>NIP</td>
<td>:</td>
<td><input type="text" name="nama" id="nama" size="50" value="<?php echo
$data[1] ?>" /></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password" id="jabatan" size="50" value="<?php echo $data['password'] ?>"/></td>
</tr>
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
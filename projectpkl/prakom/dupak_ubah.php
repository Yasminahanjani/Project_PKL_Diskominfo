<title>Website Pribadi | Ubah User </title>
<?php
include("../config/koneksi.php");
$id_user = $_GET['id_user'];
$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
$exe = mysqli_query($conn, $query);
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
<form id="user_ubah" name="user_ubah" method="post" action="dupak_update.php">
<table width="90%" align="center" cellpadding="0" cellspacing="0"
style="border-color: #C4DAE8; font-size: small;">
<input type="hidden" name="id_user" id="id_user" value="<?php echo $id_user ?>" />
<tr>
<td>NIP</td>
<td>:</td>
<td><input type="text" name="nama" id="nama" size="50" value="<?php echo
$data[1] ?>" /></td>
</tr>
<tr>
<td>JABATAN</td>
<td>:</td>
<td><input type="text" name="jabatan" id="jabatan" size="50" value="<?php echo $data['jabatan'] ?>"/></td>
</tr>
<tr>
<td>TEMPAT LAHIR</td>
<td>:</td>
<td><input type="text" name="tempat_lahir" id="tempat_lahir" size="50" value="<?php echo
$data['tempat_lahir'] ?>" /></td>
</tr>
<tr>
<td>PANGKAT</td>
<td>:</td>
<td><input type="text" name="pangkat" id="pangkat" size="50" value="<?php echo
$data['pangkat'] ?>" /></td>
</tr>
<tr>
<td>GOLONGAN</td>
<td>:</td>
<td><input type="text" name="golongan" id="golongan" size="50" value="<?php echo
$data['golongan'] ?>" /></td>
</tr>
<tr>
<td>TAHUN PENGAJUAN</td>
<td>:</td>
<td><input class="form-control" id="tahun_pengajuan" name="tahun_pengajuan" placeholder="Masukkan Tahun Pengajuan" size="50"<?php echo
$data['tahun_pengajuan'] ?>" /></td>
</tr>
<tr>
<td>MASA PENILAIAN</td>
<td>:</td>
<td><input class="form-control" id="start" name="start" placeholder="Tanggal/Bln/Thn"<?php echo
$data['start'] ?>" /></td>
<td><input class="form-control" id="end" name="end" placeholder="Tanggal/Bln/Thn"<?php echo
$data['end'] ?>" /></td>
</tr>
<tr>
<td>KELENGKAPAN</td>
<td>:</td>
<td><input type="file" name="file" id="kelengkapan_berkas" size="50" value="<?php echo
$data['kelengkapan_berkas'] ?>" />
</td>
</tr>
<tr>
<td>UNSUR UTAMA</td>
<td>:</td>
<td><input type="file" name="file" id="unsur_utama" size="50" value="<?php echo
$data['unsur_utama'] ?>" /></td>
</tr>
<tr>
<td>UNSUR PROFESI & PENUNJANG</td>
<td>:</td>
<td><input type="file" name="file" id="unsur_profesipenunjang" size="50" value="<?php echo
$data['unsur_profesipenunjang'] ?>" /></td>
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
<p>Catatan :</p>
<ul>
<li>Kelengkapan Berupa Surat Pengantar, SK Pangkat Terakhir, SK Jabatan Terakhir, PAK Terakhir yang discan jadi 1 dalam bentuk PDF.</li>
<li>Unsur Utama Berupa Bukti Fisik unsur Tata Laksana & Tata Kelola, Infrastruktur TI, dan Sistem Informasi & Multimedia.</li>
<li>Unsur Profesi dan Penunjang berupa Bukti Fisik unsur Profesi & Penunjang.</li>
</ul>
<?php
include("../masterpages/footer.php");
?>
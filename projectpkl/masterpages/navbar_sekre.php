<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
  <a class="navbar-brand" href="#">Sekreteriat Penilai</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link <?php if ($pageinfo == "Home") {echo " active";}?>" href="../sekretariat_penilai/home_sekretariat.php?id_user=$id_usr">Home</a>
      <a class="nav-item nav-link <?php if ($pageinfo == "DUPAK") {echo "active";}?>" href="../sekretariat_penilai/dupak_pra.php">DUPAK</a>
      <a class="nav-item nav-link <?php if ($pageinfo == "PAK") {echo "active";}?>" href="../sekretariat_penilai/pak_pra.php">PAK</a>
      <a class="nav-item nav-link <?php if ($pageinfo == "Download") {echo "active";}?>" href="../sekretariat_penilai/download_pra.php">Download</a>
      <a class="nav-item nav-link <?php if ($pageinfo == "Ubah Password") {echo "active";}?>" href="../sekretariat_penilai/ubahpassword_pra.php">Ubah Password</a>
      <a class="btn btn-info ml-2 btn-login" href="../index.php">Login</a>
    </div>
    </div>
  </div>
</nav>
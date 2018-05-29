<?php
include "../config/koneksi2.php";
$server = "..";
session_start();
$nami = $_SESSION['nami'];
$nomor = $_SESSION['nomor'];
$s = mysql_query("select * from tbakun where username = '$nami' and id = '$nomor'");
$d = mysql_fetch_array($s);

$status = "bukan";
include('include/header.php');
?>

<div class="wrapper">
  <div class="container">
      <div class="row">
        <div class='col-md-4'>
          <img class="media-object" src="../lib/img/admin.ico" alt="Administrator"/>
        </div>
        <div class="col-md-8">
          <h1>HALAMAN ADMINISTRATOR</h1>
          <p>Selamat datang di PROMODES (Papan Profil dan Monografi Desa).<br/>Untuk mengelola silahkan gunakan Menu yang berada di sudut kanan atas.<br/><br/>
            - Profil Desa dibuat sesuai dengan Permendagri No. 22 Tahun 2007<br/>
          - Monografi Desa dibuat sesuai dengan Permendagri No. 13 Tahun 2012</p>
        </div>
<!-- 3 tutup div (wrapper container dan row) ada di footer -->
<?php 
  include('include/footer.php');
?>
    <script src="<?php echo $server; ?>/lib/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo $server; ?>/lib/js/bootstrap.min.js"></script>
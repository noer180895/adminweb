<?php
$protocol = "http://";
$host = $_SERVER['HTTP_HOST'];
$url = "/desa/promodes/";
$server = $protocol.$host.$url;
if (empty($_SESSION['nami'])) {
    header('location:'.$server.'/login');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAPAN INFORMASI DESA </title>
    <!-- Bootstrap -->
    <link href="<?php echo $server; ?>/lib/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $server; ?>/lib/css/style.css" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href="<?php echo $server; ?>/lib/css/jquery.navgoco.css"/>
    <link href="<?php echo $server; ?>/lib/css/table2.css" rel="stylesheet">

  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                 <div class="navbar-brand">PAPAN PROFIL DAN MONOGRAFI DESA (PROMODES)</div>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".menutop">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            
            <div class="collapse navbar-collapse menutop">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo $server; ?>beckend/">Beranda</a></li>
                    <li><a href="<?php echo $server; ?>beckend/inti">Master Data</a></li>
                    <li><a href="<?php echo $server; ?>beckend/engine">Input Data</a></li>
                    <li><a href="<?php echo $server; ?>beckend/pengguna">Akun</a></li>
                    <li><a href="<?php echo $server; ?>beckend/logout">Keluar</a></li>
                    <li class='active'><a href="<?php echo $server; ?>" target="_blank">LIHAT PAPAN</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php 
        if ($status == "master") {
            ?>
            <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>MASTER DATA</h2>
                    <div class="bgvmenu">
                        <?php include "menu.php"; ?>
                    </div>
                </div>
                <div class="col-sm-8">
            <?php
        }else if ($status == "input") {
            ?>
            <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h2>MASTER DATA</h2>
                    <div class="bgvmenu">
                        <?php include "menu2.php"; ?>
                    </div>
                </div>
                <div class="col-sm-8">
            <?php
        }else{

        }
    ?>
                
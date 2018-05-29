<?php
    $protocol = "http://";
    $host = $_SERVER['HTTP_HOST'];
    $url = "/desa/promodes/";
    $server = $protocol.$host.$url;
    if (empty($_SESSION['nami'])) {
        header('location:'.$server.'beckend/login');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Papan Informasi Desa</title>
        <link type="text/css" href="<?php echo $server ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $server ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $server ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo $server ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link rel = "stylesheet" type = "text/css" href="<?php echo $server; ?>/lib/css/jquery.navgoco.css"/>
        <link href="<?php echo $server; ?>/lib/css/table2.css" rel="stylesheet">

        <!-- CSS Button -->
        <link rel="stylesheet" type="text/css" href="<?php echo $server ?>assets/css/normalize.css" />
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo $server ?>assets/css/vicons-font.css" /> -->
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo $server ?>assets/css/base.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo $server ?>assets/css/buttons.css" />
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i>
                    </a>
                    <a class="brand" href="index.html">PAPAN PROFIL DAN MONOGRAFI DESA (PROMODES)</a>
                        <ul class="nav pull-right">
                            <li><a href="<?php echo $server; ?>beckend/">Beranda</a></li>
                            <li><a href="<?php echo $server; ?>beckend/inti">Master Data</a></li>
                            <li><a href="<?php echo $server; ?>beckend/engine">Input Data</a></li>
                            <!-- <li><a href="<?php echo $server; ?>beckend/pengguna">Akun</a></li> -->
                            <li><a href="<?php echo $server; ?>beckend/logout">Keluar</a></li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
 <div class="wrapper">
    <div class="container">
        <div class="row">
            <div style="margin-left: 30px">
                <h2>MASTER DATA</h2>
            </div>
            <div class="bgvmenu">
                <?php include "menu.php"; ?>
            </div>
    <div class="span9">
        <div class="content">
            <div class="module">
<?php 
    $mod = "";
    if (isset($_GET['mod'])) {
        $mod = $_GET['mod'];
    }
?>
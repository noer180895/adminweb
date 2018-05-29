<?php
if (isset($_SESSION)) {
	
}else{
	session_start();
}
$host = "localhost";
$user = "root";
$pass = "";
$db = "desa";

$con = mysql_connect($host,$user,$pass) or die("Koneksi Gagal !");
mysql_select_db($db,$con);


if(!isset($_SESSION['nami']) && !isset($_SESSION['nomor'])){
    header("location:localhost/desa/promodes/beckend/");
}
else{
    echo "";
}
?>
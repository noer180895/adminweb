<?php
// include "../config/koneksi.php";
// $server = "http://promodes.klikdesa.com";
// $str = "ABCDEFGH123456789";
// $password = md5($str.md5('zal').md5($str));
// echo $password;
?>

<?php
include "../config/koneksi2.php";
$protocol = "http://";
$host = $_SERVER['HTTP_HOST'];
$url = "/desa/promodes/";
$server = $protocol.$host.$url;
session_start();
$nomor = $_SESSION['nomor'];
$_s = mysql_query("select * from tbakun where id='$nomor'");
$_d = mysql_fetch_array($_s);
$desa = $_d['desa'];
$kec = $_d['kec'];
$user = $_d['username'];
$password = $_d['password'];
// var_dump($nomor);
// exit();

if(isset($_POST['simpan'])){
    $desa = mysql_real_escape_string(trim($_POST['desa']));
    $kec = mysql_real_escape_string(trim($_POST['kec']));
    $user = mysql_real_escape_string(trim($_POST['user']));
    $pass = mysql_real_escape_string(trim($_POST['pass']));
    $pass2 = mysql_real_escape_string(trim($_POST['pass2']));
    
    if($desa == "" || $kec == "" || $user == ""){
        echo "<script>alert('Field tidak boleh kosong, Kecuali Password dan Konfirmasi Password !');window.location='".$server."beckend/pengguna';</script>";
    }
    else{
        if($pass != ""){
            if($pass2 == ""){
                echo "<script>alert('Konfirmasi Password tidak boleh kosong !');window.location='".$server."beckend/pengguna';</script>";
            }
            else if($pass != $pass2){
                echo "<script>alert('Password dan Konfirmasi Password harus sama !');window.location='".$server."beckend/pengguna';</script>";
            }
            else{
                $str = "ABCDEFGH123456789";
                $password = md5($str.md5($pass).md5($str));
                $q = mysql_query("update tbakun set username='$user',password='$password',desa='$desa',kec = '$kec' where id='$_SESSION[nomor]'");
                if($q){
                    echo "<script>alert('Akun berhasil di ubah !');window.location='".$server."beckend/pengguna';</script>";
                }
            }
        }
        else
        {
            $q = mysql_query("update tbakun set username='$user',password='$password',desa='$desa',kec = '$kec' where id='$_SESSION[nomor]'");
            if($q){
                echo "<script>alert('Akun berhasil di ubah !');window.location='".$server."beckend/pengguna';</script>";
            }
        }
    }
}
    $status = "bukan";
    include('include/header.php');
?>

<div class="wrapper">
  <div class="container">
    <div class="row">
        <div class="module">
            <div class="module-head">
            <h1>UBAH AKUN</h1>
        </div>
        <div class="module-body">
            <div class='alert alert-warning'>Password dan Konfirmasi Password boleh dikosongkan jika tidak ingin diubah.</div>
            <form method = "POST">
                <table style='border:none;'>
                    <tr style='border-bottom:2px solid #27ae60'><td colspan='2'><h4>Informasi Desa</h4></td></tr>
                    <tr>
                        <td>Nama Desa</td>
                        <td><input type='text' name='desa' value='<?php echo $desa; ?>'  required/></td>
                    </tr>
                    <tr>
                        <td>Nama Kecamatan</td>
                        <td><input type='text' name='kec' value='<?php echo $kec; ?>'  required /></td>
                    </tr>
                    <tr style='border-bottom:2px solid #27ae60'><td colspan='2'><h4>Informasi Akun</h4></td></tr>
                    <tr>
                        <td>Username</td>
                        <td><input type='text' name='user' required value='<?php echo $user; ?>'/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type='password' name='pass'/></td>
                    </tr>
                    <tr>
                        <td>Konfirmasi Password</td>
                        <td><input type='password' name='pass2'/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type='submit' name='simpan' value='Simpan'/></td>
                    </tr>
                </table>
            </form>
        </div>
        </div>
    <script src="<?php echo $server; ?>/lib/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo $server; ?>/lib/js/bootstrap.min.js"></script>

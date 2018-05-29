<?php
session_start();
if (isset($_SESSION['nami'])) {
    header('location:../beckend/');
}
include "../config/koneksi2.php";
if(isset($_POST['lebet'])){
    $user = mysql_real_escape_string(trim($_POST['nami']));
    $pass = mysql_real_escape_string(trim($_POST['konci']));
    
    if($user == "" || $pass == ""){
        echo "<script>alert('Field tidak boleh kosong !');window.location='login';</script>";
    }
    else{
        $str = "ABCDEFGH123456789";
        $password = md5($pass);
        $s = mysql_query("select * from auth where email = '$user' and password = '$password'");
        $r = mysql_num_rows($s);
        
        // var_dump($r);
        // exit();
        if($r == 0){
            echo "<script>alert('Maaf, Username atau Password yang anda masukan salah !');window.location='login';</script>";
        }
        else{
            $d =  mysql_fetch_array($s);
            $_SESSION['nami'] = $d['email'];
            $_SESSION['nomor'] = $d['nip'];
            header("location:../beckend/");
        }
    }
}

?>
<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.css"/>
<style>
body{
    background:#ecf0f1;
    margin-top:10%;
}
.panel-title{
    color:#337ab7;
    font-size:1.5em;
    text-align:center;
}
</style>
<title>Login</title>
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Anda harus masuk dulu</h3>
                </div>
                <div class="panel-body">
                    <form method = "post" accept-charset="UTF-8" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="nami" type="text" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Kata Sandi" name="konci" type="password" value="" required/>
                        </div>
                        <input class="btn btn-lg btn-primary btn-block" name='lebet' type="submit" value="Masuk">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
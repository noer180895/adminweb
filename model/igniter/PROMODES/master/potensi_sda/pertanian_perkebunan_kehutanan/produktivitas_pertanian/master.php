<?php
include "../../../../config/koneksi.php";
include_once "../../../../functions/urut.php";
$status ="master";
include "../../../../master/header.php";
echo "<h2>LUAS LAHAN DAN PRODUKTIVITAS PERTANIAN</h2>";

if($mod == "tambah"){
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $tipe = $_POST['tipe'];
        
        $s = mysql_query("select max(posisi) as urut from tbproduktivitas_pertanian where tipe = '$tipe'");
        $d = mysql_fetch_array($s);
        $posisi  = $d['urut']+1;
        
        for($i = 0;$i < sizeof($nama);$i++){
           if($nama[$i] != ""){
               $q = mysql_query("insert into tbproduktivitas_pertanian(nama,tipe,posisi) values('".mysql_real_escape_string($nama[$i])."','$tipe','".($posisi+$i)."')");
           }
        }
        
        if($q){
            echo "<script>window. location='$server/psda/pertanian_perkebunan_kehutanan/produktivitas_pertanian/';</script>";
        }
    }
    echo "<link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";
?>
<script type="text/javascript" src="../../../../lib/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var count = 0;
    $nama = $("#nama");
    $add = $("#add");
    $add.click(function(e){ 
        var countNext = count+1;
        $("#input"+count).append("<div>&nbsp;&nbsp;<input type='text' name='nama[]' id='nama"+count+"'/><div id='input"+countNext+"'></div></div>");
        $("#nama"+count).focus();
        count++;
    });
});
</script>
<form method="post">
    <table>
        <tr>
            <td>Tipe Kategori</td>
            <td> : <select name='tipe' required>
                    <option value=''>- Pilih Tipe</option>
                    <option value='1'>Tanaman Pangan</option>
                    <option value='2'>Tanaman Buah-buahan</option>
                    <option value='3'>Tanaman Apotik Hidup dan Sejenisinya</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nama Kategori</td>
            <td id='nama'><div id='input0'> : <input type='text' name='nama[]' id='nama' required/><a class='btn' href='#' id='add'>+</a></div></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type='submit' name='simpan' value='Tambah'></td>
        </tr>
    </table>
</form>
<?php
}
else if($mod == "ubah"){
    $id = abs((int)$_GET['id']);
    $c = mysql_query("select * from tbproduktivitas_pertanian where id='$id'");
    $d = mysql_fetch_array($c);
    
    $nama = $d['nama'];
    $tipe = $d['tipe'];
    
    if(isset($_POST['simpan'])){
        $nama = mysql_real_escape_string($_POST['nama']);
        $tipe = $_POST['tipe'];
        
        if($tipe != $d['tipe']){
            $s = mysql_query("select max(posisi) as urut from tbproduktivitas_pertanian where tipe = '$tipe'");
            $d = mysql_fetch_array($s);
            $posisi  = $d['urut']+1;
        }
        else
        {
            $posisi = $d['posisi'];
        }
        
        $q = mysql_query("update tbproduktivitas_pertanian set nama = '$nama',
                                                            tipe = '$tipe',
                                                            posisi = '$posisi'
                                                            where id = '$id'");
        if($q){
            echo "<script>window. location='$server/psda/pertanian_perkebunan_kehutanan/produktivitas_pertanian/';</script>";
        }
    }
    echo "<link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";

?>
<form method="post">
    <table>
        <tr>
            <td>Nama Kategori</td>
            <td><input type='text' name='nama' value='<?php echo $nama; ?>' required></td>
        </tr>
        <tr>
            <td>Tipe Kategori</td>
            <td><select name='tipe' required>
                    <option value=''>- Pilih Tipe</option>
                    <option value='1' <?php if($tipe == 1) echo "selected";?>>Tanaman Pangan</option>
                    <option value='2' <?php if($tipe == 2) echo "selected";?>>Tanaman Buah-buahan</option>
                    <option value='3' <?php if($tipe == 3) echo "selected";?>>Tanaman Apotik Hidup dan Sejenisinya</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' name='simpan' value='Ubah'></td>
        </tr>
    </table>
</form>
<?php
}
else if($mod == "urut"){
    $id = abs((int)$_GET['id']);
    $tipe = abs((int)$_GET['tipe']);
    $table = "tbproduktivitas_pertanian";
    $posisi = $_GET['posisi'];
    if($posisi == "up"){
        keAtas($table,$id,$tipe);
        echo "<script>window.location = '$server/psda/pertanian_perkebunan_kehutanan/produktivitas_pertanian/';</script>";
    }
    else
    {
       $act = keBawah($table,$id,$tipe);
       echo "<script>window.location = '$server/psda/pertanian_perkebunan_kehutanan/produktivitas_pertanian/';</script>";
    }
}
else if($mod == "hapus"){
    $id = abs((int)$_GET['id']);
    $q = mysql_query("delete from tbproduktivitas_pertanian where id='$id'");
    if($q){
        echo "<script>window. location='$server/psda/pertanian_perkebunan_kehutanan/produktivitas_pertanian/';</script>";
    }
}
else
{
    echo "<link rel='stylesheet' type='text/css' href='../../../../lib/css/table.css'/>";
    echo "<script type='text/javascript' src='../../../../lib/js/confirmDelete.js'></script>";
    echo "<input type='reset' onclick=\"window.location='?mod=tambah';\" value='+ Tambah'/>";
    echo "<table>
            <tr>
                <th>#</th>
                <th align=left>Tanaman Pangan</th>
                <th>Pilihan</th>
            </tr>";
    $n1 = 1;
    $s1= mysql_query("select * from tbproduktivitas_pertanian where tipe='1' order by posisi asc");
    while($d1 = mysql_fetch_array($s1)){
        echo "<tr>
                <td>$n1</td>
                <td>$d1[nama]</td>
                <td><a class='edit' href='?mod=urut&id=$d1[id]&tipe=1&posisi=up'>&#8593;</a> <a class='edit' href='?mod=urut&id=$d1[id]&tipe=1&posisi=down'>&#8595;</a> <a class='edit' href='?mod=ubah&id=$d1[id]'>Ubah</a> <a class='del' href='#' onclick='confirmDelete(\"?mod=hapus&id=$d1[id]\");'>Hapus</a></td>
            </tr>";
        $n1++;
    }
    echo "<tr>
            <th>#</th>
            <th align=left>Tanaman Buah-buahan</th>
            <th>Pilihan</th>
        </tr>";
    $n2 = 1;
    $s2= mysql_query("select * from tbproduktivitas_pertanian where tipe='2' order by posisi asc");
    while($d2 = mysql_fetch_array($s2)){
        echo "<tr>
                <td>$n2</td>
                <td>$d2[nama]</td>
                <td><a class='edit' href='?mod=urut&id=$d2[id]&tipe=2&posisi=up'>&#8593;</a> <a class='edit' href='?mod=urut&id=$d2[id]&tipe=2&posisi=down'>&#8595;</a> <a class='edit' href='?mod=ubah&id=$d2[id]'>Ubah</a> <a class='del' href='#' onclick ='confirmDelete(\"?mod=hapus&id=$d2[id]\");'>Hapus</a></td>
            </tr>";
        $n2++;
    }
    echo "<tr>
            <th>#</th>
            <th align=left>Tanaman Apotik Hidup dan Sejenisnya</th>
            <th>Pilihan</th>
        </tr>";
    $n3 = 1;
    $s3= mysql_query("select * from tbproduktivitas_pertanian where tipe='3' order by posisi asc");
    while($d3 = mysql_fetch_array($s3)){
        echo "<tr>
                <td>$n3</td>
                <td>$d3[nama]</td>
                <td><a class='edit' href='?mod=urut&id=$d3[id]&tipe=3&posisi=up'>&#8593;</a> <a class='edit' href='?mod=urut&id=$d3[id]&tipe=3&posisi=down'>&#8595;</a> <a class='edit' href='?mod=ubah&id=$d3[id]'>Ubah</a> <a class='del' href='#' onclick='confirmDelete(\"?mod=hapus&id=$d3[id]\");'>Hapus</a></td>
            </tr>";
        $n3++;
    }
    echo "</table>";
    
}
include "../../../../master/footer.php";
?>
<?php
include "../../../config/koneksi.php";
include_once "../../../functions/urut.php";
include_once "../../../master/header.php";
echo "<h2>USAHA JASA KETERAMPILAN</h2>";


if($mod == "tambah"){
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        
        $s = mysql_query("select max(posisi) as urut from tbjasa_keterampilan");
        $d = mysql_fetch_array($s);
        $posisi  = $d['urut']+1;
        
        for($i = 0;$i < sizeof($nama);$i++){
           if($nama[$i] != ""){
               $q = mysql_query("insert into tbjasa_keterampilan(nama,posisi) values('".mysql_real_escape_string($nama[$i])."','".($posisi+$i)."')");
           }
        }
        
        if($q){
            echo "<script>window.location='$server/lembaga_ekonomi/lain-lain/jasa_keterampilan/';</script>";
        }
    }
    echo "<link rel='stylesheet' type='text/css' href='../../../lib/css/table2.css'/>";
?>
<script type="text/javascript" src="../../../lib/js/jquery-1.9.1.min.js"></script>
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
            <td>Nama Usaha</td>
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
    $c = mysql_query("select * from tbjasa_keterampilan where id='$id'");
    $d = mysql_fetch_array($c);
    
    $nama = $d['nama'];
    
    if(isset($_POST['simpan'])){
        $nama = mysql_real_escape_string($_POST['nama']);
        
        $q = mysql_query("update tbjasa_keterampilan set nama = '$nama' where id = '$id'");
        if($q){
            echo "<script>window.location='$server/lembaga_ekonomi/lain-lain/jasa_keterampilan/';</script>";
        }
    }
    echo "<link rel='stylesheet' type='text/css' href='../../../lib/css/table2.css'/>";
?>
<form method="post">
    <table>
        <tr>
            <td>Nama Usaha</td>
            <td><input type='text' name='nama' value='<?php echo $nama; ?>' required></td>
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
    $tipe = 0;
    $table = "tbjasa_keterampilan";
    $posisi = $_GET['posisi'];
    if($posisi == "up"){
        keAtas($table,$id,$tipe);
        echo "<script>window.location = '$server/lembaga_ekonomi/lain-lain/jasa_keterampilan/';</script>";
    }
    else
    {
       $act = keBawah($table,$id,$tipe);
       echo "<script>window.location = '$server/lembaga_ekonomi/lain-lain/jasa_keterampilan/';</script>";
    }
}
else if($mod == "hapus"){
    $id = abs((int)$_GET['id']);
    $q = mysql_query("delete from tbjasa_keterampilan where id='$id'");
    if($q){
        echo "<script>window.location='$server/lembaga_ekonomi/lain-lain/jasa_keterampilan/';</script>";
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
                <th align=left>USAHA JASA KETERAMPILAN</th>
                <th>Pilihan</th>
            </tr>";
    $n1 = 1;
    $s1= mysql_query("select * from tbjasa_keterampilan order by posisi asc");
    while($d1 = mysql_fetch_array($s1)){
        echo "<tr>
                <td>$n1</td>
                <td>$d1[nama]</td>
                <td><a class='edit' href='?mod=urut&id=$d1[id]&tipe=1&posisi=up'>&#8593;</a> <a class='edit' href='?mod=urut&id=$d1[id]&tipe=1&posisi=down'>&#8595;</a> <a class='edit' href='?mod=ubah&id=$d1[id]'>Ubah</a> <a class='del' href='#' onclick='confirmDelete(\"?mod=hapus&id=$d1[id]\");'>Hapus</a></td>
            </tr>";
        $n1++;
    }
    echo "</table>";
}
include_once "../../../master/footer.php";
?>
<?php

include "../../../config/koneksi.php";
if(isset($_POST['simpan'])){
    $tahun = $_POST['tahun'];
    $s = mysql_query("select * from tbinput_sarpras where idkat = '4' and tahun ='$tahun'");
    $r = mysql_num_rows($s);
    if($r != 0){
        echo "<script>alert('Input pada tahun $tahun sudah ada pada database !, anda tidak perlu menginput lagi untuk tahun tersebut.');</script>";
    }
    else
    {
        $s0 = mysql_query("select * from tbinput_sarpras where idkat = '4'");
        $d = mysql_fetch_array($s0);
        $idunik = $d['idunik']+1;
        $s1 = mysql_query("select * from tbsarpras_lembaga order by posisi asc");
        while($d1 = mysql_fetch_array($s1)){
            $sarpras = $_POST['sarpras'.$d1['id']];
            $q = mysql_query("insert into tbinput_sarpras(idkat,idunik,idsub,tipe,nilai,tahun) values('4','$idunik','$d1[id]','0','$sarpras','$tahun')");
        }
        if($q){
            echo "<script>window.location='$server/potensi_sarpras/sarpras_lembaga/';</script>";
        }
    }
}
?>
<script type="text/javascript" src="../../../lib/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $tahun = $("#tahun");
    $tampil = $("#tampil");
    var d = new Date();
    var y = d.getFullYear();
    for(var i = y;i >= 2014;i--){
        $tahun.append("<option value='"+i+"'>"+i+"</option>");
    }
    $tahun.change(function(){
        if($tahun.val() != ''){
            $.ajax({
                url:'cektahun.php',
                type:'GET',
                data:{idkat:4,mode:'input',tahun:$tahun.val(),tahun2:0},
                success:function(data){
                    if(data != ""){
                        alert(data);
                        window.location.reload();
                    }
                }
            });
        }
    });
});
</script>

<?php
echo "<form method='post'>
    Tahun : <select name='tahun' id='tahun' required>
        <option value=''>- Pilih Tahun -</option>
    </select>
    <table border='1'>
        <tr>
            <th colspan='2' align=left>PRASARANA DAN SARANA LEMBAGA KEMASYARAKATAN DESA/KELURAHAN</th>
        </tr>";
$s1 = mysql_query("select * from tbsarpras_lembaga order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    echo "<tr>
            <td>$d1[nama]</td>
            <td><input type='text' name='sarpras$d1[id]'></td>
        </tr>";
}
echo "<tr>
        <td colspan='2' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../lib/css/table2.css'/>";

?>
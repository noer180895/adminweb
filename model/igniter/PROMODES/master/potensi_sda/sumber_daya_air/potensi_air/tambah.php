<?php
include "../../../../config/koneksi.php";
if(isset($_POST['simpan'])){
    $tahun = $_POST['tahun'];
    $s = mysql_query("select * from tbinput_sda where idkat = '3' and tahun ='$tahun'");
    $r = mysql_num_rows($s);
    if($r != 0){
        echo "<script>alert('Input pada tahun $tahun sudah ada pada database !, anda tidak perlu menginput lagi untuk tahun tersebut.');</script>";
    }
    else
    {
        $s0 = mysql_query("select * from tbinput_sda where idkat = '3'");
        $d = mysql_fetch_array($s0);
        $idunik = $d['idunik']+1;
        $s1 = mysql_query("select * from tbpotensi_air order by posisi asc");
        while($d1 = mysql_fetch_array($s1)){
            
            $potensi = $_POST['potensi'.$d1['id']];
            
            if($potensi == ""){
                $val = "";
            }
            else{
                $val = $potensi;
            }
                            
            $q = mysql_query("insert into tbinput_sda(idkat,idunik,idsub,tipe,nilai,tahun) values('3','$idunik','$d1[id]','0','$val','$tahun')");
        }
        if($q){
            echo "<script>window.location='$server/psda/sumber_daya_air/potensi_air/';</script>";
        }
    }
}
?>
<script type="text/javascript" src="../../../../lib/js/jquery-1.9.1.min.js"></script>
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
                data:{idkat:3,mode:'input',tahun:$tahun.val(),tahun2:0},
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
            <th colspan=2>POTENSI AIR DAN SUMBER DAYA AIR</th>
        </tr>";
$s1 = mysql_query("select * from tbpotensi_air order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    echo "<tr>
            <td>$d1[nama]</td>
            <td>$d1[satuan] : <select name='potensi$d1[id]'>
                    <option value=''>- Pilihan -</option>
                    <option value='Kecil'>Kecil</option>
                    <option value='Sedang'>Sedang</option>
                    <option value='Besar'>Besar</option>
                </select></td>
        </tr>";
}
echo "<tr>
        <td colspan='4' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";

?>
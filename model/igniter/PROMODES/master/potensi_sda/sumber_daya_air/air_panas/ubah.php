<?php
include "../../../../config/koneksi.php";
$tahun = $_GET['tahun'];
$bulan = date('M');
$idunik = $_GET['idunik'];
if(isset($_POST['simpan'])){
    $tahun2 = $_POST['tahun'];
    if($tahun != $tahun2){
        $s = mysql_query("select * from tbinput_sda where idkat = '7' and tahun ='$tahun2'");
        $r = mysql_num_rows($s);
        if($r != 0){
            echo "<script>alert('Tidak bisa mengubah data ke tahun $tahun2. Data pada tahun $tahun2 sudah ada pada database !');</script>";
        }
        else
        {
            $tahun = $tahun2;
            $s1 = mysql_query("select * from tbair_panas order by posisi asc");
            while($d1 = mysql_fetch_array($s1)){

                $jumlah = $_POST['jumlah'.$d1['id']];
                $pemanfaatan = $_POST['pemanfaatan'.$d1['id']];
                $pemda = $_POST['pemda'.$d1['id']];
                $swasta = $_POST['swasta'.$d1['id']];
                $adat = $_POST['adat'.$d1['id']];

                if($jumlah == "" && $pemanfaatan == "" && $pemda == "" && $swasta == "" && $adat == ""){
                    $val = "";
                }
                else{
                    $val = $jumlah.",".$pemanfaatan.",".$pemda.",".$swasta.",".$adat;
                }

                $q = mysql_query("update tbinput_sda set nilai = '$val',tahun='$tahun' where idkat = '7' and idunik = '$idunik' and idsub = '$d1[id]'");
            }
            if($q){
                echo "<script>window.location='$server/psda/sumber_daya_air/air_panas/';</script>";
            }
        }
    }
    else
    {
        $tahun = $_POST['tahun'];
        $s1 = mysql_query("select * from tbair_panas order by posisi asc");
        
        while($d1 = mysql_fetch_array($s1)){
        
            $jumlah = $_POST['jumlah'.$d1['id']];
            $pemanfaatan = $_POST['pemanfaatan'.$d1['id']];
            $pemda = $_POST['pemda'.$d1['id']];
            $swasta = $_POST['swasta'.$d1['id']];
            $adat = $_POST['adat'.$d1['id']];

            if($jumlah == "" && $pemanfaatan == "" && $pemda == "" && $swasta == "" && $adat == ""){
                $val = "";
            }
            else{
                $val = $jumlah.",".$pemanfaatan.",".$pemda.",".$swasta.",".$adat;
            }
            
            
            $q = mysql_query("update tbinput_sda set nilai = '$val',tahun='$tahun' where idkat = '7' and idunik = '$idunik' and idsub = '$d1[id]'");
        }
        if($q){
           echo "<script>window.location='$server/psda/sumber_daya_air/air_panas/';</script>";
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
        if(i == <?php echo $tahun; ?>){
            $tahun.append("<option value='"+i+"' selected>"+i+"</option>");
        }
        else{
            $tahun.append("<option value='"+i+"'>"+i+"</option>");
        }
    }
    $tahun.change(function(){
        if($tahun.val() != ''){
            $.ajax({
                url:'cektahun.php',
                type:'GET',
                data:{idkat:7,mode:'ubah',tahun:<?php echo $tahun; ?>,tahun2:$tahun.val()},
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
    Tahun : <select name='tahun' id='tahun'>
    </select>
    <table border='1'>
        <tr>
                <th colspan='6'>AIR PANAS</th>
            </tr>
            <tr>
                <th rowspan='3'>SUMBER</th>
                <th rowspan='3'>JUMLAH LOKASI</th>
                <th rowspan='3'>PEMANFAATAN<br/>Wisata, Pengobatan, Energi, dll</th>
                <th colspan='3'>KEPEMILIKAN</th>
            <tr>
            <tr>
                <th>Pemda</th>
                <th>Swasta</th>
                <th>Adat/Perorangan</th>
            </tr>";
$s1 = mysql_query("select * from tbair_panas order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    $_s1 = mysql_query("select * from tbinput_sda where idkat = '7' and idsub = '$d1[id]' and tahun = '$tahun'");
    $_d1 = mysql_fetch_array($_s1);
    
    $nilai = explode(",",$_d1['nilai']);
    
    $_r1 = mysql_num_rows($_s1);
    if($_r1 != 0){
        echo "<tr>
                <td>$d1[nama]</td>
                <td><input type='text' name ='jumlah$d1[id]' value='$nilai[0]'/></td>
                <td><input type='text' name ='pemanfaatan$d1[id]' value='$nilai[1]'/></td>
                <td><input type='text' name ='pemda$d1[id]' value='$nilai[2]'></td>
                <td><input type='text' name ='swasta$d1[id]' value='$nilai[3]'/></td>
                <td><input type='text' name ='adat$d1[id]' value='$nilai[4]'/></td>
            </tr>";
    }
}
echo "<tr>
        <td colspan='6' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";

?>
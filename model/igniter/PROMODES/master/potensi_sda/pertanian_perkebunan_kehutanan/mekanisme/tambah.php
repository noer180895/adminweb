<?php
include "../../../../config/koneksi.php";
if(isset($_POST['simpan'])){
    $tahun = $_POST['tahun'];
    $s = mysql_query("select * from tbinput_p2k where idkat = '7' and tahun ='$tahun'");
    $r = mysql_num_rows($s);
    if($r != 0){
        echo "<script>alert('Input pada tahun $tahun sudah ada pada database !, anda tidak perlu menginput lagi untuk tahun tersebut.');</script>";
    }
    else
    {
        $s0 = mysql_query("select * from tbinput_p2k where idkat = '7'");
        $d = mysql_fetch_array($s0);
        $idunik = $d['idunik']+1;
        $s1 = mysql_query("select * from tbmekanisme_pemasaran order by posisi asc");
        while($d1 = mysql_fetch_array($s1)){
            
            $pangan = $_POST['pangan'.$d1['id']];
            $buah = $_POST['buah'.$d1['id']];
            $apotik = $_POST['apotik'.$d1['id']];
            $kebun = $_POST['kebun'.$d1['id']];
            $hutan = $_POST['hutan'.$d1['id']];
            
            if($pangan == "" && $buah == "" && $apotik == "" && $kebun == "" && $hutan == ""){
                $val = "";
            }
            else{
                $val = $pangan.",".$buah.",".$apotik.",".$kebun.",".$hutan;
            }
                            
            $q = mysql_query("insert into tbinput_p2k(idkat,idunik,idsub,tipe,nilai,tahun) values('7','$idunik','$d1[id]','0','$val','$tahun')");
        }
        
        if($q){
            echo "<script>window.location='$server/psda/pertanian_perkebunan_kehutanan/mekanisme/';</script>";
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
                data:{idkat:7,mode:'input',tahun:$tahun.val(),tahun2:0},
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
            <th rowspan='3'>MEKANISME PEMASARAN</th>
            <th colspan='3'>HASIL PERTANIAN</th>
            <th rowspan='3'>HASIL PERKEBUNAN</th>
            <th rowspan='3'>HASIL HUTAN</th>
        <tr>
        <tr>
            <th>TANAMAN PANGGAN</th>
            <th>BUAH-BUAHAN</th>
            <th>TANAMAN APOTIK HIDUP</th>
        </tr>";
$s1 = mysql_query("select * from tbmekanisme_pemasaran order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    echo "<tr>
            <td>$d1[nama]</td>
            <td><select name='pangan$d1[id]'>
                    <option value=''>- Pilihan -</option>
                    <option value='Ada'>Ada</option>
                    <option value='Tidak Ada'>Tidak Ada</option>
                </select></td>
            <td><select name='buah$d1[id]'>
                    <option value=''>- Pilihan -</option>
                    <option value='Ada'>Ada</option>
                    <option value='Tidak Ada'>Tidak Ada</option>
                </select></td>
            <td><select name='apotik$d1[id]'>
                    <option value=''>- Pilihan -</option>
                    <option value='Ada'>Ada</option>
                    <option value='Tidak Ada'>Tidak Ada</option>
                </select></td>
            <td><select name='kebun$d1[id]'>
                    <option value=''>- Pilihan -</option>
                    <option value='Ada'>Ada</option>
                    <option value='Tidak Ada'>Tidak Ada</option>
                </select></td>
            <td><select name='hutan$d1[id]'>
                    <option value=''>- Pilihan -</option>
                    <option value='Ada'>Ada</option>
                    <option value='Tidak Ada'>Tidak Ada</option>
                </select></td>
        </tr>";
}
echo "<tr>
        <td colspan='6' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";

?>
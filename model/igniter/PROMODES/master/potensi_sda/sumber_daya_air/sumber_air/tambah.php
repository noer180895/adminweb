<?php
include "../../../../config/koneksi.php";
if(isset($_POST['simpan'])){
    $tahun = $_POST['tahun'];
    $s = mysql_query("select * from tbinput_sda where idkat = '4' and tahun ='$tahun'");
    $r = mysql_num_rows($s);
    if($r != 0){
        echo "<script>alert('Input pada tahun $tahun sudah ada pada database !, anda tidak perlu menginput lagi untuk tahun tersebut.');</script>";
    }
    else
    {
        $s0 = mysql_query("select * from tbinput_sda where idkat = '4'");
        $d = mysql_fetch_array($s0);
        $idunik = $d['idunik']+1;
        $s1 = mysql_query("select * from tbsumber_air order by posisi asc");
        while($d1 = mysql_fetch_array($s1)){
            
            $jumlah = $_POST['jumlah'.$d1['id']];
            $pemanfaatan = $_POST['pemanfaatan'.$d1['id']];
            $kondisi = $_POST['kondisi'.$d1['id']];
            $kualitas = $_POST['kualitas'.$d1['id']];
            
            if($jumlah == "" && $pemanfaatan == "" && $kondisi == "" && $kualitas == ""){
                $val = "";
            }
            else{
                $val = $jumlah.",".$pemanfaatan.",".$kondisi.",".$kualitas;
            }
                            
            $q = mysql_query("insert into tbinput_sda(idkat,idunik,idsub,tipe,nilai,tahun) values('4','$idunik','$d1[id]','0','$val','$tahun')");
        }
        
        if($q){
            echo "<script>window.location='$server/psda/sumber_daya_air/sumber_air/';</script>";
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
            <th colspan='5'>SUMBER AIR DAN KUALITAS AIR MINUM</th>
        </tr>
        <tr>
            <th rowspan='3'>JENIS</th>
            <th rowspan='3'>JUMLAH (UNIT)</th>
            <th rowspan='3'>PEMANFAATAN (KK)</th>
            <th rowspan='3'>KONDISI BAIK/RUSAK</th>
            <th>KUALITAS AIR MINUM</th>
        <tr>
        <tr>
            <th>(Berbau)/(Berwarna)/(Berasa)/(Baik)</th>
        </tr>";
$s1 = mysql_query("select * from tbsumber_air order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    echo "<tr>
            <td>$d1[nama]</td>
            <td><input type='text' name ='jumlah$d1[id]'/></td>
            <td><input type='text' name ='pemanfaatan$d1[id]'/></td>
            <td><select name='kondisi$d1[id]'>
                <option value=''>- Pilihan -</option>
                <option value='Baik'>Baik</option>
                <option value='Rusak'>Rusak</option>
            </select></td>
            <td><input type='text' name ='kualitas$d1[id]'/></td>
        </tr>";
}
echo "<tr>
        <td colspan='5' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";

?>
<?php
include "../../../config/koneksi.php";
if(isset($_POST['simpan'])){
    $tahun = $_POST['tahun'];
    $s = mysql_query("select * from tbinput_lembaga where idkat = '3' and tahun ='$tahun'");
    $r = mysql_num_rows($s);
    if($r != 0){
        echo "<script>alert('Input pada tahun $tahun sudah ada pada database !, anda tidak perlu menginput lagi untuk tahun tersebut.');</script>";
    }
    else
    {
        $s0 = mysql_query("select * from tbinput_lembaga where idkat = '3'");
        $d = mysql_fetch_array($s0);
        $idunik = $d['idunik']+1;
        $s1 = mysql_query("select * from tbjasa_hiburan order by posisi asc");
        while($d1 = mysql_fetch_array($s1)){
            
            $jumlah = $_POST['jumlah'.$d1['id']];
            $kegiatan = $_POST['kegiatan'.$d1['id']];
            $tenaga = $_POST['tenaga'.$d1['id']];
            
            if($jumlah == "" && $kegiatan == "" && $tenaga == ""){
                $val = "";
            }
            else{
                $val = $jumlah.",".$kegiatan.",".$tenaga;
            }
                            
            $q = mysql_query("insert into tbinput_lembaga(idkat,idunik,idsub,tipe,nilai,tahun) values('3','$idunik','$d1[id]','0','$val','$tahun')");
        }
        if($q){
            echo "<script>window.location='$server/lembaga_ekonomi/jasa_hiburan/';</script>";
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
                <th colspan='4'>USAHA JASA HIBURAN</th>
            </tr>
            <tr>
                <th>NAMA USAHA</th>
                <th>JUMLAH/UNIT</th>
                <th>JENIS KEGIATAN</th>
                <th>JML. TENAGA KERJA</th>
            </tr>";
$s1 = mysql_query("select * from tbjasa_hiburan order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    echo "<tr>
            <td>$d1[nama]</td>
            <td><input type='text' name ='jumlah$d1[id]'/> Unit</td>
            <td><input type='text' name ='kegiatan$d1[id]'/> Jenis</td>
            <td><input type='text' name ='tenaga$d1[id]'/> Orang</td>
        </tr>";
}
echo "<tr>
        <td colspan='5' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../lib/css/table2.css'/>";

?>
<?php
include "../../../../config/koneksi.php";
$tahun = $_GET['tahun'];
$bulan = date('M');
$idunik = $_GET['idunik'];
if(isset($_POST['simpan'])){
    $tahun2 = $_POST['tahun'];
    if($tahun != $tahun2){
        $s = mysql_query("select * from tbinput_p2 where idkat = '4' and tahun ='$tahun2'");
        $r = mysql_num_rows($s);
        if($r != 0){
            echo "<script>alert('Tidak bisa mengubah data ke tahun $tahun2. Data pada tahun $tahun2 sudah ada pada database !');</script>";
        }
        else
        {
            $tahun = $tahun2;
            $s1 = mysql_query("select * from tbhasil_ternak order by posisi asc");
            while($d1 = mysql_fetch_array($s1)){
                
                $hasil = $_POST['hasil'.$d1['id']];

                if($hasil == ""){
                    $val = "";
                }
                else{
                    $val = $hasil;
                }
                $q = mysql_query("update tbinput_p2 set nilai = '$val',tahun='$tahun' where idkat = '4' and idunik = '$idunik' and idsub = '$d1[id]'");
            }
            if($q){
                echo "<script>window.location='$server/psda/peternakan_perikanan/hasil_ternak/';</script>";
            }
        }
    }
    else
    {
        $tahun = $_POST['tahun'];
        $s1 = mysql_query("select * from tbhasil_ternak order by posisi asc");
        while($d1 = mysql_fetch_array($s1)){
        
            $hasil = $_POST['hasil'.$d1['id']];

            if($hasil == ""){
                $val = "";
            }
            else{
                $val = $hasil;
            }
            $q = mysql_query("update tbinput_p2 set nilai = '$val',tahun='$tahun' where idkat = '4' and idunik = '$idunik' and idsub = '$d1[id]'");
        }
        if($q){
            echo "<script>window.location='$server/psda/peternakan_perikanan/hasil_ternak/';</script>";
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
                data:{idkat:4,mode:'ubah',tahun:<?php echo $tahun; ?>,tahun2:$tahun.val()},
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
            <th colspan='2'>PEMILIK USAHA PENGOLAHAN HASIL TERNAK</th>
        </tr>";
$s1 = mysql_query("select * from tbhasil_ternak order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    $_s1 = mysql_query("select * from tbinput_p2 where idkat = '4' and idsub = '$d1[id]' and tahun = '$tahun'");
    $_d1 = mysql_fetch_array($_s1);
    
    $_r1 = mysql_num_rows($_s1);
    if($_r1 != 0){
        echo "<tr>
                <td>$d1[nama]</td>
                <td align=right><input type='text' name ='hasil$d1[id]'  value='$_d1[nilai]'/> orang</td>
            </tr>";
    }
}
echo "<tr>
        <td colspan='4' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";

?>
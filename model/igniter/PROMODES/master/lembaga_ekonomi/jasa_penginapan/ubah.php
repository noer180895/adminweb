<?php
include "../../../config/koneksi.php";
$tahun = $_GET['tahun'];
$bulan = date('M');
$idunik = $_GET['idunik'];
if(isset($_POST['simpan'])){
    $tahun2 = $_POST['tahun'];
    if($tahun != $tahun2){
        $s = mysql_query("select * from tbinput_lembaga where idkat = '8' and tahun ='$tahun2'");
        $r = mysql_num_rows($s);
        if($r != 0){
            echo "<script>alert('Tidak bisa mengubah data ke tahun $tahun2. Data pada tahun $tahun2 sudah ada pada database !');</script>";
        }
        else
        {
            $tahun = $tahun2;
            $s1 = mysql_query("select * from tbjasa_penginapan order by posisi asc");
        
            while($d1 = mysql_fetch_array($s1)){

                $jumlah = $_POST['jumlah'.$d1['id']];
                $jenis = $_POST['jenis'.$d1['id']];
                $tenaga = $_POST['tenaga'.$d1['id']];

                if($jumlah == "" && $jenis == "" && $tenaga == ""){
                    $val = "";
                }
                else{
                    $val = $jumlah.",".$jenis.",".$tenaga;
                }


                $q = mysql_query("update tbinput_lembaga set nilai = '$val',tahun='$tahun' where idkat = '8' and idunik = '$idunik' and idsub = '$d1[id]'");
            }
            if($q){
                echo "<script>window.location='$server/lembaga_ekonomi/jasa_penginapan/';</script>";
            }
        }
    }
    else
    {
        $tahun = $_POST['tahun'];
        $s1 = mysql_query("select * from tbjasa_penginapan order by posisi asc");
        
        while($d1 = mysql_fetch_array($s1)){
        
            $jumlah = $_POST['jumlah'.$d1['id']];
            $jenis = $_POST['jenis'.$d1['id']];
            $tenaga = $_POST['tenaga'.$d1['id']];

            if($jumlah == "" && $jenis == "" && $tenaga == ""){
                $val = "";
            }
            else{
                $val = $jumlah.",".$jenis.",".$tenaga;
            }
            
            
            $q = mysql_query("update tbinput_lembaga set nilai = '$val',tahun='$tahun' where idkat = '8' and idunik = '$idunik' and idsub = '$d1[id]'");
        }
        if($q){
           echo "<script>window.location='$server/lembaga_ekonomi/jasa_penginapan/';</script>";
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
                data:{idkat:8,mode:'ubah',tahun:<?php echo $tahun; ?>,tahun2:$tahun.val()},
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
                <th colspan='4'>USAHA JASA PENGINAPAN</th>
            </tr>
            <tr>
                <th>NAMA USAHA</th>
                <th>JUMLAH</th>
                <th>JENIS PRODUK</th>
                <th>JML. TENAGA KERJA</th>
            </tr>";
$s1 = mysql_query("select * from tbjasa_penginapan order by posisi asc");
while($d1 = mysql_fetch_array($s1)){
    $_s1 = mysql_query("select * from tbinput_lembaga where idkat = '8' and idsub = '$d1[id]' and tahun = '$tahun'");
    $_d1 = mysql_fetch_array($_s1);
    
    $nilai = explode(",",$_d1['nilai']);
    
    $_r1 = mysql_num_rows($_s1);
    if($_r1 != 0){
        echo "<tr>
                <td>$d1[nama]</td>
                <td><input type='text' name ='jumlah$d1[id]' value='$nilai[0]'/> Unit</td>
                <td><input type='text' name ='jenis$d1[id]' value='$nilai[1]'/> Jenis</td>
                <td><input type='text' name ='tenaga$d1[id]' value='$nilai[2]'/> Orang</td>
            </tr>";
    }
}
echo "<tr>
        <td colspan='5' align='right'><input type='submit' name='simpan' value='Simpan'/></td>
    </tr>";
echo "</table></form><link rel='stylesheet' type='text/css' href='../../../lib/css/table2.css'/>";

?>
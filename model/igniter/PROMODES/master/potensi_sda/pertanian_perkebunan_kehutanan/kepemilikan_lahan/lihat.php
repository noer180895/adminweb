<?php
include "../../../../config/koneksi.php";
$tahun = $_GET['tahun'];
$bulan = '3';
$s = mysql_query("select * from tbinput_p2k where idkat='1' and tahun ='$tahun'");
$r = mysql_num_rows($s);
if($r == 0){
    echo "Tidak ada data pada tahun ini.";
}
else{
    $d = mysql_fetch_array($s);
    ?>
    <?php
    echo "
        <div align='right' style='float:right'>
            <button class='button button--naira button--round-s button--border-thin'>
                <i class='button__icon icon icon-copy'></i>
                <span>
                    <input style='background-color:transparent;border:none' type='reset' onclick='window.location=\"?mod=salin&bulan=$bulan&tahun=$tahun\"' id='salin' value='Salin'/>
                </span>
            </button>

            <button class='button button--naira button--round-s button--border-thin'>
                <i class='button__icon icon icon-edit'></i>
                <span>
                    <input style='background-color:transparent;border:none' type='reset' onclick='window.location=\"?mod=ubah&idunik=$d[idunik]&tahun=$tahun\"' value='Ubah'/>
                </span>
            </button>

            <button class='button button--naira button--round-s button--border-thin'>
                <i class='button__icon icon icon-trash'></i>
                <span>
                    <input style='background-color:transparent;border:none' type='button' onclick='confirmDelete(\"?mod=hapus&tahun=$tahun\");' value='Hapus'/>
                </span>
            </button>
        </div>";
    echo "<table border='1'>
            <tr>
                <th colspan='4'>KEPEMILIKAN LAHAN</th>
            </tr>";
    $s1 = mysql_query("select * from tbkepemilikan_lahan where tipe='1' order by posisi asc");
    while($d1 = mysql_fetch_array($s1)){
        $_s1 = mysql_query("select * from tbinput_p2k where idkat='1' and idsub = '$d1[id]' and tahun = '$tahun'");
        $_r1 = mysql_num_rows($_s1);
        $_d1 = mysql_fetch_array($_s1);
        if($_r1 != 0 && $_d1['nilai'] != ""){
            echo "<tr>
                    <td colspan='3'>$d1[nama]</td>
                    <td>$_d1[nilai]</td>
                </tr>"; 
        }
    }
    echo    "<tr>
            <th rowspan='4'>LUAS LAHAN YANG DIMILIKI</th>
            <th colspan='3'>JUMLAH KELUARGA YANG MEMILIKI TANAH/LAHAN</th>
            <tr>
            <tr>
                <th colspan='2'>PERTANIAN</th>
                <th rowspan='2'>PERKEBUNAN</th>
            <tr>
                <th>TANAMAN PANGAN</th>
                <th>TANAMAN BUAH</th>
            </tr>
            ";
    $s2 = mysql_query("select * from tbkepemilikan_lahan where tipe='2' order by posisi asc");
    while($d2 = mysql_fetch_array($s2)){
        $_s2 = mysql_query("select * from tbinput_p2k where idkat='1' and idsub = '$d2[id]' and tahun = '$tahun'");
        $_d2 = mysql_fetch_array($_s2);
        $_r2 = mysql_num_rows($_s2);
        $nilai = explode(',',$_d2['nilai']);
        if($_r2 != 0 && $_d2['nilai'] != ""){
            echo "<tr>
                    <td>$d2[nama]</td>
                    <td align=right>$nilai[0] Keluarga</td>
                    <td align=right>$nilai[1] Keluarga</td>
                    <td align=right>$nilai[2] Keluarga</td>
                </tr>";
        }
    }
    $s3 = mysql_query("select * from tbkepemilikan_lahan where tipe='3' order by posisi asc");
    while($d3 = mysql_fetch_array($s3)){
        $_s3 = mysql_query("select * from tbinput_p2k where idkat='1' and idsub = '$d3[id]' and tahun = '$tahun'");
        $_d3 = mysql_fetch_array($_s3);
        $_r3 = mysql_num_rows($_s3);
        if($_r3 != 0 && $_d3['nilai'] != ""){
            echo "<tr>
                    <td colspan='2'>$d3[nama]</td>
                    <td colspan='2' align=right>$_d3[nilai] Ha</td>
                </tr>";
        }
    }
    echo "</table><link rel='stylesheet' type='text/css' href='../../../../lib/css/table2.css'/>";
}
?>
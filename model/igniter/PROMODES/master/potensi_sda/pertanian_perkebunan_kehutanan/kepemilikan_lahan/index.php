<?php 
    include "../../../../config/koneksi.php";
    include "../../../../master/header2.php";
?>
    <div class="module-head">
        <h2>KEPEMILIKAN LAHAN</h2>
    </div>
    <div class="module-body">
<?php
    if($mod == "hapus"){
        $tahun = abs((int)$_GET['tahun']);
        $q = mysql_query("delete from tbinput_p2k where idkat = '1' and tahun = '$tahun'");
        if($q){
            echo "<script>window.location = '$server/psda/pertanian_perkebunan_kehutanan/kepemilikan_lahan/';</script>";
        }
    }
    else if($mod == "tambah"){
        include "tambah.php";
    }
    else if($mod == "ubah"){
        include "ubah.php";
    }
    else if($mod == "salin"){
        include "salin.php";
    }
    else
    {
        echo "
            <div style='text-align:center;width: 100%;height: 100%;float: none;'>
                <button class='button button--naira button--round-s button--border-thin' style='float: none;margin: 0;'>
                    <i class='button__icon icon icon-plus'></i>
                    <span>
                        <input style='background-color:transparent;border:none' type='reset' onclick='window.location=\"?mod=tambah\"' value='Tambah'/>
                    </span>
                </button>
            </div>
            ";
?>         
    </div>
<script type="text/javascript" src="../../../../lib/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../../../../lib/js/confirmDelete.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $tahun = $("#tahun");
    $tampil = $("#tampil");
    
    //show tahun
    var d = new Date();
    var y = d.getFullYear();
    for(var i = y;i >= 2014;i--){
        if(i == y){
            $tahun.append("<option value='"+i+"' selected>"+i+"</option>");
        }
        else{
            $tahun.append("<option value='"+i+"'>"+i+"</option>");
        }
    }
    
    $tahun.change(function(){
        $.ajax({
            url:'<?php echo $server ?>/psda/pertanian_perkebunan_kehutanan/kepemilikan_lahan/tahun/'+$tahun.val(),
            success:function(data){
                $tampil.html(data);
            }
        });
    });
    
    $.ajax({
        url:'<?php echo $server ?>/psda/pertanian_perkebunan_kehutanan/kepemilikan_lahan/tahun/'+$tahun.val(),
        success:function(data){
            $tampil.html(data);
        }
    });
    
});
</script>
<div style="clear: both">
    Lihat Data : 
    <select id='tahun'></select>
    <div id="tampil"></div>
</div>
<?php
}
include "../../../../master/footer.php";
?>
<?php
    $protocol = "http://";
    $host = $_SERVER['HTTP_HOST'];
    $url = "/desa/promodes/";
    $server = $protocol.$host.$url;
?>
<div class="footer">
            <div class="container">
                <b class="copyright">Aplikasi Buku Administrasi Desa 2016</b> All rights reserved.
            </div>
        </div>
        <script src="<?php echo base_url() ?>assets/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/common.js" type="text/javascript"></script>
        <script src="<?php echo $server; ?>/lib/js/jquery-1.9.1.min.js"></script>
        <script src="<?php echo $server; ?>/lib/js/jquery.cookie.min.js"></script>
        <script src="<?php echo $server; ?>/lib/js/jquery.navgoco.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo $server; ?>/lib/js/bootstrap.min.js"></script>
    </body>
</div>
        </div>
        <div class="footer">
            
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $server; ?>/lib/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo $server; ?>/lib/js/jquery.cookie.min.js"></script>
    <script src="<?php echo $server; ?>/lib/js/jquery.navgoco.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $server; ?>/lib/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var j = jQuery.noConflict();
    j(document).ready(function(){
        if(j("input[type=submit]").length){
            j("input[type=submit]").parent().append(" <input type='button' id='back' onclick='history.back()' value='Batal'/>");
        }
        
        j("#add").attr("title","Klik untuk menambah/tekan CTRL + SHIFT");
        
        j('.vmenu').navgoco({
            accordion:true
        });
        j('.vmenu a').click(function(){
            j('.vmenu li').removeClass("active");
            j('.vmenu').find('.open').addClass("active");
        });
        j('.vmenu').find('.open').addClass("active");
    });  
    var count = 0;
    $(document).keydown(function(e) {
        var countNext = count+1;
        if (e.ctrlKey && e.keyCode == 16) {
            if ($("#satuan").length){
                $("#input"+count).append("<div>&nbsp;&nbsp;<input type='text' name='nama[]' id='nama"+count+"'/><input type='text' name='satuan[]' placeholder='Satuan' id='satuan"+count+"'/><div id='input"+countNext+"'></div></div>");
                $("#nama"+count).focus();
            }
            else if($("#pengurutan").length){
                $("#input"+count).append("<div>&nbsp;&nbsp;<input type='text' name='nama[]' id='nama"+count+"'/> Pengurutan Sub : <select name='pengurutan[]' id='pengurutan"+count+"'><option value='1'>Numerik (1,2,3,..)</option><option value='a'>Alfabet (a-z)</option><option value='A'>Alfabet (A-Z)</option><option value='-'>Strip (-)</option></select><div id='input"+countNext+"'></div></div>");
                $("#nama"+count).focus();
            }
            else{
                $("#input"+count).append("<div>&nbsp;&nbsp;<input type='text' name='nama[]' id='nama"+count+"'/><div id='input"+countNext+"'></div></div>");
                $("#nama"+count).focus();
            }
            count++;
        }
    });
    </script>
  </body>
</html>
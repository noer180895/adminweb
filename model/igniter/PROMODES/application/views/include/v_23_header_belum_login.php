<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Keuangan Desa</title>
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/jquery.validate.min.js"></script>
        
</head>

<script type="text/javascript">
    function pilih(data) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
              document.getElementById("changed").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "<?php echo base_url()?>c_23_index/potensi_sumber_daya_alam/"+data ,true);
        xmlhttp.send();   
    }

    $(document).ready(function() {
       $(document).on("click", "#klik_me", function() {
         click();  
       });
       $(document).on("click", "#print_me", function() {
           window.print();
       });
       $(document).on("change", ".selectPotensi", function() {
            var tahun = document.getElementById("selectTahun").value;
            var potensi = document.getElementById("selectPotensi").value;
            select_potensi(tahun, potensi);
       });
    });

    function select_potensi(tahun, potensi) {
        if (tahun == 0 || potensi == 0) {
            alert('Pilih item terlebih dahulu');
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                  document.getElementById("utama").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "<?php echo base_url()?>c_23_index/potensi_sumber_daya_alam_select/"+tahun+"/potensi"+potensi ,true);
            xmlhttp.send();
        }
    }

    function click() {
        alert('Di klik men');
    }
</script>




    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url() ?>">Profil dan Monografi Desa (PROMODES)</a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">
                            
                            <li>
                                <a href="<?php echo base_url() ?>auth/c_23_login">
                                    Masuk
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active">
                                    <a href="<?php echo base_url() ?>">
                                        <i class="menu-icon icon-dashboard"></i>Beranda
                                    </a>
                                </li>
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <ul class="widget widget-menu unstyled">
                                    <li>
                                        <a class="collapsed" data-toggle="collapse" href="#togglePages2">
                                            <i class="icon-chevron-down pull-right"></i>
                                            <i class="icon-chevron-up pull-right"></i>
                                            Profil Desa 
                                        </a>
                                        <ul id="togglePages2" class="collapse unstyled">
                                            <li>
                                                <a onclick="pilih('Potensi Sumber Daya Alam')" value="Potensi Sumber Daya Alam" style="cursor: pointer;">
                                                    <i class="icon-inbox"></i>
                                                    Potensi Sumber Daya Alam
                                                </a>
                                            </li>
                                            <li>
                                                 <a onclick="pilih('Geografi Desa')" style="cursor: pointer;">
                                                    <i class="icon-inbox"></i>
                                                    Geografi Desa
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url() ?>"><i class="icon-inbox"></i>
                                                Potensi Prasarana dan Sarana Bag 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url() ?>"><i class="icon-inbox"></i>
                                                Potensi Prasarana dan Sarana Bag 2
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url() ?>"><i class="icon-inbox"></i>
                                                Lembaga Ekonomi
                                                </a>
                                            </li>
                                        </ul>   
                                    </li>
                                </ul>
                            </ul>                            
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
<head>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Keuangan Desa</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/component.css" />
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/jquery.validate.min.js"></script>
        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url() ?>">Sistem Informasi Manajemen Keuangan Desa <br><h5>Permendagri No. 113 Tahun 2014 Tentang Pengelolaan Keuangan Desa</h5></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        
                        <ul class="nav pull-right">
                            
                            <li>
                                <a href="<?php echo base_url() ?>profil/c_23_profil">
                                    <?php 
                                        $row = $this->m_log->getNipUser();
                                        echo $row[0]->nama;
                                    ?>
                                </a>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url().$row[0]->foto ?>"  class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url() ?>profil/c_23_profil">Profil Anda</a></li>
                                    <li><a href="#">Pengaturan Akun</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url() ?>auth/c_23_login/logout">Keluar</a></li>
                                </ul>
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
                                    <a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes">
                                        <i class="menu-icon icon-dashboard"></i>Buku APBDes
                                    </a>
                                </li>
                                <li>
                                </li>
                                </ul>

                                <ul class="widget widget-menu unstyled">
                                    <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a class="collapsed" data-toggle="collapse" href="#togglePages1">
                                            <i class="">
                                                </i>
                                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Master Data</a>
                                                    <ul id="togglePages1" class="collapse unstyled">
                                                        <ul class="widget widget-menu unstyled">
                                                            <!-- <li>
                                                                <a class="collapsed" data-toggle="collapse" href="#togglePages5">
                                                                <i class="">
                                                                    </i>
                                                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                                    </i>Akuntansi </a>
                                                                        <ul id="togglePages5" class="collapse unstyled">
                                                                            <li><a href="<?php echo base_url() ?>rekening/c_23_rekening"><i class="icon-inbox"></i>Kode Rekening</a></li>
                                                                           
                                                                        </ul>   
                                                            </li> -->
                                                        </ul>
                                                        
                                                        <ul class="widget widget-menu unstyled">
                                                            <li>
                                                                <a class="collapsed" data-toggle="collapse" href="#togglePages4">
                                                                <i class="">
                                                                    </i>
                                                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                                    </i>Data </a>
                                                                        <ul id="togglePages4" class="collapse unstyled">
                                                                            <li><a href="<?php echo base_url() ?>pegawai/c_23_pegawai"><i class="menu-icon icon-bold"></i> Pegawai </a></li>
                                                                            <?php
                                                                                if ($row[0]->level == 1) {
                                                                                    ?>
                                                                                    <li><a href="<?php echo base_url() ?>user/c_23_user"><i class="menu-icon icon-user"></i> User </a></li>        
                                                                                    <?php
                                                                                }else{
                                                                                    
                                                                                }
                                                                            ?>
                                                                            <li><a href="<?php echo base_url() ?>log/c_23_log"><i class="menu-icon icon-paste"></i>Log </a></li>

                                                                        </ul>   
                                                            </li>
                                                        </ul>

                                                        <ul class="widget widget-menu unstyled">
                                                            <li>
                                                                <a class="collapsed" data-toggle="collapse" href="#togglePages6">
                                                                <i class="">
                                                                    </i>
                                                                        <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                                    </i>Administrasi Kerja </a>
                                                                        <ul id="togglePages6" class="collapse unstyled">
                                                                             <li><a href="<?php echo base_url() ?>Anggaran/c_26_Anggaran"><i class="menu-icon icon-book"></i>Anggaran </a></li>

                                                                        </ul>   
                                                            </li>
                                                        </ul>
                                                    </ul>   
                                        </li>
                                    </ul>
                                </ul>

                                
                                </ul>


                               <!--  <ul class="widget widget-menu unstyled">
                                    <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a class="collapsed" data-toggle="collapse" href="#togglePages2">
                                            <i class="">
                                                </i>
                                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>APBDes </a>
                                                    <ul id="togglePages2" class="collapse unstyled">
                                                        <li><a href="<?php echo base_url() ?>APBDes/c_26_APBDes/dataapbdespendapatan"><i class="icon-inbox"></i>APBDes Pendapatan</a></li>
                                                        <li><a href="<?php echo base_url() ?>APBDes/c_26_APBDes/apbdesbelanja"><i class="icon-inbox"></i>APBDes Belanja </a></li>
                                                        <li><a href="<?php echo base_url() ?>"><i class="icon-inbox"></i>APBDes Pembiayaan </a></li>
                                                    </ul>   
                                        </li>
                                    </ul>
                                </ul> -->
                            <ul class="widget widget-menu unstyled">
                                <li>
                                    <a href="<?php echo base_url() ?>APBDes/c_26_APBDes/keluarAPBDes">
                                        Keluar APBDes 
                                    </a>   
                                </li>
                            </ul>
                            
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
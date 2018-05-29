<head>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Manajemen Administrasi Desa</title>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/afaya con.ico" />
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/button.css"
            rel='stylesheet'>
        <link type="text/css" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" rel='stylesheet'>
        <link type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel='stylesheet'>
        <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'>      
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/componentdua.css" />      
        <script src="<?php echo base_url() ?>assets/scripts/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/scripts/modernizr.custom.js"></script>
        
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url() ?>"><img style="width: 60px;height: 30px" src="<?php echo base_url()?>assets/images/afayadua.jpg" > Sistem Informasi Manajemen Administrasi Desa (SIMADES)</a>
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
                                <ul class="widget widget-menu unstyled">
                                    <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a class="collapsed" data-toggle="collapse" href="#togglePages0">
                                            <i class="menu-icon icon-home">
                                                </i>
                                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Beranda</a>
                                                    <ul id="togglePages0" class="collapse unstyled">
                                                        <li><a href="<?php echo base_url() ?>"><i class="icon-plus"> </i> Buat Surat</a></li>
                                                        <li><a href="<?php echo base_url() ?>surat/c_26_data_surat/buatsurat"><i class="icon-file"> </i> Buat Surat Form Kosong</a></li>
                                                        <li><a href="<?php echo base_url() ?>surat/c_26_data_surat/scansurat"><i class="icon-print"> </i> Buat Surat Masuk</a></li>
                                                    </ul>   
                                        </li>
                                    </ul>
                                </ul>
                                </ul>

                                <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a href="<?php echo base_url()?>CariData/c_26_caridata/">
                                            <i class="menu-icon icon-search">
                                                </i>Cari Seluruh Data</a>
                                        </li>
                                </ul>

                                <ul class="widget widget-menu unstyled">
                                    <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a class="collapsed" data-toggle="collapse" href="#togglePages1">
                                            <i class="menu-icon icon-file">
                                                </i>
                                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Data</a>
                                                    <ul id="togglePages1" class="collapse unstyled">
                                                        <li><a href="<?php echo base_url() ?>Data_Penduduk/c_26_data_penduduk"><i class="icon-file"></i>Data Penduduk</a></li>
                                                        <li><a href="<?php echo base_url() ?>Data_Perusahaan/c_26_data_perusahaan"><i class="icon-file"></i>Data Perusahaan</a></li>
                                                    </ul>   
                                        </li>
                                    </ul>
                                </ul>

                                
                                </ul>


                                <ul class="widget widget-menu unstyled">
                                    <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a class="collapsed" data-toggle="collapse" href="#togglePages2">
                                            <i class="menu-icon icon-cog">
                                                </i>
                                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Pengaturan </a>
                                                    <ul id="togglePages2" class="collapse unstyled">
                                                        <li><a href="<?php echo base_url() ?>surat/c_26_data_surat"><i class="icon-pencil"> </i> Nomor Surat</a></li>
                                                        
                                                    </ul>   
                                        </li>
                                    </ul>
                                </ul>
                            
                            

                                <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a class="collapsed" data-toggle="collapse" href="#togglePages7">
                                            <i class="menu-icon icon-list">
                                                </i>
                                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                                </i>Daftar Rekap</a>
                                                    <ul id="togglePages7" class="collapse unstyled">
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapagama"><i class="icon-signal"> </i> Agama</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapgd"><i class="icon-signal"> </i> Golongan Darah</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapjk"><i class="icon-signal"> </i> Jenis Kelamin</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekaphk"><i class="icon-signal"> </i> Hubungan Keluarga</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapp"><i class="icon-signal"> </i> Pekerjaan</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekappt"><i class="icon-signal"> </i> Pendidikan</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapsp"><i class="icon-signal"> </i> Status Perkawinan</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapsuratkeluar"><i class="icon-signal"> </i> Daftar Surat Keluar</a></li>
                                                        <li><a href="<?php echo base_url() ?>rekap/c_26_rekap/rekapsuratmasuk"><i class="icon-signal"> </i> Daftar Surat Masuk</a></li>
                                                        
                                                    </ul>   
                                        </li>
                                    </ul>
                            

                                <ul class="widget widget-menu unstyled">
                                        <li>
                                            <a href="<?php echo base_url()?>Laporan/c_26_Laporan/">
                                            <i class="menu-icon icon-inbox">
                                                </i>Laporan Laporan</a>
                                        </li>
                                    </ul>
                            
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
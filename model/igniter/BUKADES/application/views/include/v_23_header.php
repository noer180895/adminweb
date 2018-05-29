<head>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku Administrasi Desa</title>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/afaya con.ico" />
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
        <link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <link type="text/css" href="<?php echo base_url() ?>assets/css/button.css" rel='stylesheet'>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/scripts/jquery.validate.min.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url() ?>"><img style="width: 60px;height: 30px;padding-right: 5px" src="<?php echo base_url()?>assets/images/afayadua.jpg" >Buku Administrasi Desa (BUKADES)</a>
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
                    <!--/.span3-->

                    <!--/.span3-->
                    <div class="span3">
                        <div class="sidebar">
                         <ul class="widget widget-menu unstyled">
                                        <li style="font-size: 16px">
                                            <a href="<?php echo base_url()?>/">
                                            <i class="menu-icon icon-list">
                                                </i>Daftar Buku</a>
                                        </li>
                                    </ul>
</div></div>
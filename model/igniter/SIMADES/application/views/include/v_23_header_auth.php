<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistem Informasi Manajemen Administrasi Desa</title>
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/afaya con.ico" />
	<link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url() ?>assets/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo base_url() ?>"><img style="width: 60px;height: 30px;padding-right: 5px" src="<?php echo base_url()?>assets/images/afayadua.jpg" >Sistem Informasi Manajemen Administrasi Desa (SIMADES)</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">					

							<?php
								if (isset($_GET['l']) && $_GET['l'] == 1) {
									?>
									<li>
										<a href="<?php base_url() ?>c_23_login">
											Login
										</a>
									</li>
									<li>
										<a href="<?php base_url() ?>c_23_daftar?l=2">
											Daftar
										</a>
									</li>
									<?php
								}else if (isset($_GET['l']) && $_GET['l'] == 2) {
									?>
									<li>
										<a href="<?php base_url() ?>c_23_login">
											Login
										</a>
									</li>
									<li>
										<a href="<?php base_url() ?>c_23_lupas?l=1">
											Lupa password Anda ?
										</a>
									</li>
									<?php
								}else{
									?>
									<li>
										<a href="<?php base_url() ?>c_23_lupas?l=1">
											Lupa password anda ?
										</a>
									</li>
									<li>
										<a href="<?php base_url() ?>c_23_daftar?l=2">
											Daftar
										</a>
									</li>
									<?php
								}
							?>
							
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->
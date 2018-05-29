<?php 
	$base_url_simkudes = "SIMKUDES";
	$base_url_simades = "SIMADES";
	$base_url_prodes = "PROMODES";
	$base_url_bukades = "BUKADES";

	$koneksi = mysql_connect('localhost', 'admh8515_igni15u', 'U3y&_@sl,jmn
');
	$db = mysql_select_db('admh8515_igni155');

	$query = "SELECT * FROM perangkat_desa";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Desa</title>
	<!--Core CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
  <!-- Header Section Start -->
	<header id="header_part">
		<div class="header_part" id="head">
			<div class="overlay">
				<div class="start_part">	
						<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">	
						<!-- About text start -->
							<div class="section-title">
								<h2 style="color: #FFF;">Selamat datang di Admin Desa</h2>
								<p>Buku Model A-E.</p>
							</div>
						<!-- About text end -->	
						</div>
						<!-- About service part start--> 
						<div class="row" style="color: #FFF !important">
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									
								<div class="welcome_part wow fadeInRight">
									<div class="welcome_icon">
										<a href="<?php echo $base_url_bukades ?>">
											<i class="fa fa-4x">
												<img src="images/buku_putih.png" style="width:100%">
											</i>
										</a>
									</div>
									<h2>BUKADES</h2>
									<p>Buku Administrasi Desa ( BUKADES ). Webpage berisi tentang daftar buku panduan administrasi desa. </p>
								</div>
							</div>
						</div>	
						<!-- About service part end--> 
					</div>
				</div>
			</div>
				</div>	
				<!-- Menu Start -->
				<div class="menu_area" id="stick_menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">
										<div class="collapse navbar-collapse mainnavmenu" id="bs-example-navbar-collapse-1">
										<div id="menu-center">
											<ul class="nav navbar-nav navbar-right mainnav">
										
											</ul>
										</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End-->
			</div>
		</div>	
	</header>
  <!-- Header Section End -->		
  	
  <!-- Subscriber Section Start --> 
	<section id="email_subscribe_section" >
		<div class="email_subscribe_section" style="height: 50px;" >
			<div class="container">
					<div style="padding-top: 2%">
						<b class="copyright"> Copyright &copy; Softindotech 2016</b> All rights reserved.
					</div>
				
			</div>
		</div>	
	</section>
   <!--Core js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.smooth-scroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
	<!--common script init for all pages-->
    <script src="js/script.js"></script>
  </body>
</html>
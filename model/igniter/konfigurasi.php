<?php 
	$base_url_simkudes = "SIMKUDES";
	$base_url_simades = "SIMADES";
	$base_url_prodes = "PROMODES";
	$base_url_bukades = "BUKADES";

	$koneksi = mysql_connect('localhost', 'admh8515_igni15u', 'U3y&_@sl,jmn');
	$db = mysql_select_db('admh8515_igni155');
	$query = "SELECT * FROM perangkat_desa";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);

	$query2 = "SELECT * FROM data_penanda_tangan";
	$sql2 = mysql_query($query2);
	$data2 = mysql_fetch_array($sql2);

	if(isset($_POST['simpan'])){
		$foto               = $_FILES['file_foto']['name'];
		$foldergambar 		= "assets/images/";
		$alamatgambar 		= $foldergambar.$foto;
		$alamatgambarSimkudes =	 "SIMKUDES/assets/images/".$foto;
    	$alamatgambarSimades = 	"SIMADES/assets/images/".$foto;
    	$alamatgambarPromodes =	 "PROMODES/assets/images/".$foto;
    	$alamatgambarBukades = "BUKADES/assets/images/".$foto;
        
        if ($alamatgambar == "assets/images/") {
        	$alamatgambar = $_POST['hidden_foto'];
        }
        

        $upload1 = move_uploaded_file($_FILES['file_foto']['tmp_name'], $alamatgambar);	
        $file = $alamatgambar;
      	$copy 			= $alamatgambarSimkudes;
      	$copySimades 	= $alamatgambarSimades;
      	$copyPromodes 	= $alamatgambarPromodes;
      	$copyBukades	= $alamatgambarBukades;
      	copy($file, $copy);
      	copy($file, $copySimades);
      	copy($file, $copyPromodes);
      	copy($file, $copyBukades);
		$logodesa	= $alamatgambar;
		$namadesa=$_POST['namadesa'];
		$namakecamatan=$_POST['namakecamatan'];
		$namakabupaten = $_POST['namakabupaten'];
		$alamat = $_POST['alamat'];
		$namabank = $_POST['bank'];
		$namacabang = $_POST['namacabang'];
		$nomorrekening = $_POST['nomorrekeningdesa'];
		
		$namakepaladesa = $_POST['namakepaladesa'];
		$namasekretarisdesa = $_POST['namasekretaris'];
		$namabendaharadesa = $_POST['namabendahara'];
		$namacamat = $_POST['namacamat'];
		$namaplt = $_POST['namaplt'];
		$namapj = $_POST['namapj'];
		$namakaur = $_POST['namakaur'];

		$nipkades = $_POST['nipkades'];
		$nipsekretaris = $_POST['nipsekretaris'];
		$nipbendahara = $_POST['nipbendahara'];
		$nipcamat = $_POST['nipcamat'];
		$nipplt = $_POST['nipplt'];
		$nippj = $_POST['nippj'];
		$nipkaur = $_POST['nipkaur'];

		$pangkatkades = $_POST['pangkatkades'];
		$pangkatsekretaris = $_POST['pangkatsekretaris'];
		$pangkatbendahara = $_POST['pangkatbendahara'];
		$pangkatcamat = $_POST['pangkatcamat'];
		$pangkatplt = $_POST['pangkatplt'];
		$pangkatpj = $_POST['pangkatpj'];
		$pangkatkaur = $_POST['pangkatkaur'];

		$query1 = "UPDATE perangkat_desa set nama_kabupaten='$namakabupaten',nama_desa='$namadesa',nama_kecamatan='$namakecamatan',alamat_desa='$alamat',nama_bank_desa='$namabank',cabang='$namacabang',nomor_rekening_desa='$nomorrekening',nama_kepala_desa='$namakepaladesa',nama_sekretaris_desa='$namasekretarisdesa',nama_bendahara_desa='$namabendaharadesa',logo_desa='$logodesa' where id='1'";
		
		$query2 = "UPDATE data_penanda_tangan set nip_camat='$nipcamat',nama_camat='$namacamat',pangkat_camat='$pangkatcamat',nip_kades='$nipkades',nama_kades='$namakepaladesa',pangkat_kades='$pangkatkades',nip_sekdes='$nipsekretaris',nama_sekdes='$namasekretarisdesa',pangkat_sekdes='$pangkatsekretaris',nip_bendes='$nipbendahara',nama_bendes='$namabendaharadesa',pangkat_bendes='$pangkatbendahara',nip_plt='$nipplt',nama_plt='$namaplt',pangkat_plt='$pangkatplt',nip_pj='$nippj',nama_pj='$namapj',pangkat_pj='$pangkatpj',nip_kaur='$nipkaur',nama_kaur='$namakaur',pangkat_kaur='$pangkatkaur' where id='1' ";
		if(mysql_query($query1)){
			?>
			<script type="text/javascript">
				alert('Penyimpanan Perangkat Desa Berhasil');
			window.location="konfigurasi.php"
			</script>
		<?php
		}else{
			?>
			<script type="text/javascript">
				alert('Penyimpanan Perangkat Desa Gagal !');
			window.location="konfigurasi.php"
			</script>
			<?php
		}
		if(mysql_query($query2)){
			?>
			<script type="text/javascript">
				alert('Penyimpanan Perangkat Desa Berhasil');
			window.location="konfigurasi.php"
			</script>
		<?php
		}else{
			?>
			<script type="text/javascript">
				alert('Penyimpanan Perangkat Desa Gagal !');
			window.location="konfigurasi.php"
			</script>
			<?php
		}
		
		
		?>
		<script type="text/javascript">
			window.location="konfigurasi.php"
		</script>
		<?php
	}else{
	}
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfigurasi</title>
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
										<!-- Logo Start -->
										<div class="site_logo">
											<a href="#" title="">
												<?php
													if (isset($data['logo_desa'])) {
														?>
															<img src="<?php echo $data['logo_desa']?> " alt="logo desa" title="desa" width="12%";/>		
														<?php
													}else{
														?>
															<img src="images/logo.png" alt="" title=""/>
														<?php
													}
												?>
											</a>
										</div>
										<!-- Logo End-->
										<!-- Site Title start-->
										<center>
										<style type="text/css">
											.isidua{
												background-color: rgba(255, 255, 255, .5);
											}
											.isidua h6{
												font-size: 14px;
											}
										</style>
										<form action="#" method="POST" enctype="multipart/form-data">
											
	                                	<input type="hidden" name="hidden_foto" value="<?php echo $data['logo_desa'] ?>">
										<div class="isidua">

													<center>
														<h6><input type="file" name="file_foto" style="padding-top: 10px" class="btn btn-default"></input></h6>
													</center>
											<table width="100%">
											<tr>
												<td>
													<p>
												</p>
												<fieldset>
													<legend>Data Desa</legend>
												</fieldset>
												
												</td>
											</tr>
											<tr>
												<td>
													<table>
														<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namadesa" style="color:#000000" value="<?php echo $data['nama_desa']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Kecamatan</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namakecamatan" style="color:#000000" value="<?php echo $data['nama_kecamatan']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Kabupaten</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namakabupaten" style="color:#000000" value="<?php echo $data['nama_kabupaten']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Alamat Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><textarea name="alamat" class="span8"><?php echo $data['alamat_desa']?></textarea></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Bank Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="bank" style="color:#000000" value="<?php echo $data['nama_bank_desa']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Cabang Bank</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namacabang" style="color:#000000" value="<?php echo $data['cabang']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nomor Rekening Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nomorrekeningdesa" style="color:#000000" value="<?php echo $data['nomor_rekening_desa']?>"></h6>
																</center>
															</p>
														</td>
													</tr> 
													</table>
												</td>
												<td>
													<table>
														<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP Kades</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nipkades" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_kades']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP sekretaris</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nipsekretaris" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_sekdes']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP Bendahara</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nipbendahara" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_bendes']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP Camat</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nipcamat" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_camat']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP PLT</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nipplt" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_plt']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP PJ</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nippj" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_pj']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">NIP Kaur</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="nipkaur" maxlength="20" style="color:#000000" value="<?php echo $data2['nip_kaur']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													</table>
												</td>
												<td>
													<table>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Kepala Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namakepaladesa" style="color:#000000" value="<?php echo $data['nama_kepala_desa']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Sekretaris Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namasekretaris" style="color:#000000" value="<?php echo $data['nama_sekretaris_desa']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Bendahara Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namabendahara" style="color:#000000" value="<?php echo $data['nama_bendahara_desa']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Camat</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namacamat" style="color:#000000" value="<?php echo $data2['nama_camat']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama PLT</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namaplt" style="color:#000000" value="<?php echo $data2['nama_plt']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama PJ</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namapj" style="color:#000000" value="<?php echo $data2['nama_pj']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Nama Kaur</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><input type="text" name="namakaur" style="color:#000000" value="<?php echo $data2['nama_kaur']?>"></h6>
																</center>
															</p>
														</td>
													</tr>
													</table>
												</td>
												<td>
													<table>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat Kepala Desa</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatkades">
		                                                 	<option value="<?php echo $data2['pangkat_kades']?>" selected><?php echo $data2['pangkat_kades']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat Sekretaris</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatsekretaris">
		                                                 	<option value="<?php echo $data2['pangkat_sekdes']?>" selected><?php echo $data2['pangkat_sekdes']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat Bendahara</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatbendahara">
		                                                 	<option value="<?php echo $data2['pangkat_bendes']?>" selected><?php echo $data2['pangkat_bendes']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat Camat</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatcamat">
		                                                 	<option value="<?php echo $data2['pangkat_camat']?>" selected><?php echo $data2['pangkat_camat']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat PLT</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatplt">
		                                                 	<option value="<?php echo $data2['pangkat_plt']?>" selected><?php echo $data2['pangkat_plt']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													
													
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat PJ</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatpj">
		                                                 	<option value="<?php echo $data2['pangkat_pj']?>" selected><?php echo $data2['pangkat_pj']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													
													
													<tr>
														<td>
															<p>
																<center>
																	<h6 style="color:#ffffff">Pangkat Kaur</h6>
																</center>
															</p>	
														</td>
														<td>
															<p>
																<center>
																	<h6><select name="pangkatkaur">
		                                                 	<option value="<?php echo $data2['pangkat_kaur']?>" selected><?php echo $data2['pangkat_kaur']?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select></h6>
																</center>
															</p>
														</td>
													</tr>
													</table>
												</td>
											</tr>
										</table>
										<center>
											<input type="submit" name="simpan" value="Simpan Data" class="btn btn-default" style="margin-bottom: 10px"></input>
										</center></div></form></center></div>
										
										<!-- Site Title end-->
										<!-- Countdown start -->
										<div class="countdown wow bounceInUp">
											
										</div>
										<!-- Countdown end-->
									</div>
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
												<li><a href="index.php" >Portal</a></li>
												<li><a href="konfigurasi.php">Pengaturan</a></li>
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
  <!-- About Section Start -->		
  <!-- About Section End -->		
  <!-- Subscriber Section Start --> 
	<section id="email_subscribe_section" >
		<div class="email_subscribe_section" style="height: 50px;" >
			<div class="container">
					<div style="padding-top: 2%">
						<b class="copyright"> Copyright &copy; Terkoding</b> All rights reserved.
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
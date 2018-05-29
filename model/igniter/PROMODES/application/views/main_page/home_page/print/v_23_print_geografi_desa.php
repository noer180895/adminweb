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
	$(document).ready(function() {
    	window.print();
    });
</script>

<head>
	<style type="text/css">
		@media print {
		    .tabel-homepage th{
				background-color: #f1f1f1 !important;
				color: #777 !important;
				-webkit-print-color-adjust: exact; 
			}
			.tabel-homepage td{
				color: #999 !important;
			}
		}
		.top{
			width: 100%;
			padding-bottom: 5%;
		}
		.top-left{
			float: left;
			margin: 7px;
			width: 90%;
		}
		.top-left-left{
			float: left;
		}
		.top-left-right{
			float: left;
			margin-left: 3%;
		}
		.top-right{
			float: right;
			margin: 7px;
		}
		#utama{
			clear: both;
		}
		.tabel-homepage{
			margin: 5%;
		    width: 90%;
		    border: #f4f4f4;
		}
		.tabel-homepage th{
			background-color: #f1f1f1;
			border: 2px solid #fafafa;
		}
		.tabel-homepage td{
			padding: 5px;
		}
	</style>
</head>

<table class="tabel-homepage" border="1">
	<tr>
		<th colspan="4">GEOGRAFI DESA</th>
	</tr>
	<tr>
		<td colspan="3">Luas Desa</td>
		<td><?php echo $gedes->luas_desa ?> Ha</td>
	</tr>
	<tr>
		<td colspan="3">Ketinggian dari permukaan laut</td>
		<td><?php echo $gedes->ketinggian_dari_permukaan_laut ?> M</td>
	</tr>
	<tr>
		<td colspan="3">Banyaknya curah hujan</td>
		<td><?php echo $gedes->banyaknya_curah_hujan ?> mm/th</td>
	</tr>
	<tr>
		<td colspan="3">Topografi</td>
		<td><?php echo $gedes->topografi ?></td>
	</tr>
	<tr>
		<td colspan="3">Suhu udara ( rata-rata )</td>
		<td><?php echo $gedes->suhu_udara_rata_rata ?> C</td>
	</tr>
	
	<!-- detail -->
	
	<!-- detail head -->
	<tr>
		<th colspan="4">BATAS WILAYAH DESA</th>
	</tr>

	<!-- detail detail -->
	<tr>
		<td colspan="3">batas Utara</td>
		<td><?php echo $gedes->batas_utara ?></td>
	</tr>
	<tr>
		<td colspan="3">batas Selatan</td>
		<td><?php echo $gedes->batas_selatan ?></td>
	</tr>
	<tr>
		<td colspan="3">batas Timur</td>
		<td><?php echo $gedes->batas_timur ?></td>
	</tr>
	<tr>
		<td colspan="3">batas Barat</td>
		<td><?php echo $gedes->batas_barat ?></td>
	</tr>

	<!-- detail head -->
	<tr>
		<th colspan="4">Orbitasi</th>
	</tr>

	<!-- detail detail -->
	<tr>
		<td colspan="3">Jarak dari kantor kecamatan</td>
		<td><?php echo $gedes->jarak_dari_kantor_kecamatan ?> Km </td>
	</tr>
	<tr>
		<td colspan="3">Jarak dari Ibukota Kabupaten/Kota</td>
		<td><?php echo $gedes->jarak_dari_ibukota_kabupaten_kota ?> Km </td>
	</tr>
	<tr>
		<td colspan="3">Jarak dari Ibukota Provinsi</td>
		<td><?php echo $gedes->jarak_dari_ibukota_provinsi ?> Km </td>
	</tr>
	<tr>
		<td colspan="3">Jarak dari Ibukota Negara</td>
		<td><?php echo $gedes->jarak_dari_ibukota_negara ?> Km </td>
	</tr>

</table>
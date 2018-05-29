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
		<th colspan="4">Kepemilikan Lahan</th>
	</tr>
	<tr>
		<td colspan="3">Tanaman Pangan</td>
		<td>Ada</td>
	</tr>
	<tr>
		<td colspan="3">Tanaman Buah</td>
		<td>Ada</td>
	</tr>
	<tr>
		<td colspan="3">Perkebunan</td>
		<td>Ada</td>
	</tr>
	<tr>
		<td colspan="3">Hutan</td>
		<td>Ada</td>
	</tr>
	
	<!-- detail -->
	
	<!-- detail head -->
	<tr>
		<th rowspan="3">Luas lahan yang dimiliki</th>
		<th colspan="3" style="text-align: center;">Jumlah Kelurahan <br> yang memiliki Tanah/ Lahan</th>
	</tr>
	<tr>
		<th colspan="2">Pertanian</th>
		<th rowspan="2">Perkebunan</th>
	</tr>
	<tr>
		<th>Tanaman Pangan</th>
		<th>Tanaman Buah</th>
	</tr>

	<!-- detail detail -->
	<tr>
		<td>Memiliki kurang dari 5 Ha</td>
		<td>27 Keluarga</td>
		<td>23 Keluarga</td>
		<td>15 Keluarga</td>	
	</tr>
	<tr>
		<td>Memiliki kurang dari 10 Ha</td>
		<td>98 Keluarga</td>
		<td>15 Keluarga</td>
		<td>98 Keluarga</td>	
	</tr>
	<tr>
		<td>Memiliki lebih dari 10 Ha</td>
		<td>3 Keluarga</td>
		<td>1 Keluarga</td>
		<td>7 Keluarga</td>	
	</tr>

	<tr>
		<td colspan="2">Luas lahan perkebunan milik negara</td>
		<td colspan="2">15 Ha</td>	
	</tr>

	<tr>
		<td colspan="2">Luas total lahan perkebunan</td>
		<td colspan="2">23 Ha</td>	
	</tr>

	<tr>
		<td colspan="2">Luas lahan hutan milik negara</td>
		<td colspan="2">27 Ha</td>	
	</tr>

</table>
<head>
	<style type="text/css">
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
<div class="module-head">
	<?php echo $judul ?>
</div>
<div class="top">
	<div class="top-left">
		<div class="top-left-left">
			<!-- <select id="selectPotensi" class="selectPotensi">
				<option value="0">=== Pilih Potensi ===</option>
				<option value="Pertanian Perkebunan dan Kehutanan">Pertanian, Perkebunan dan Kehutanan</option>
				<option value="Perternakan dan Perikanan">Perternakan dan Perikanan</option>
				<option value="Sumber Daya Lainnya">Sumber Daya Lainnya</option>
			</select> -->
		</div>
		<div class="top-left-right" class="selectPortensi">
		</div>
	</div>
	<div class="top-right">
		<a href="<?php echo base_url() ?>c_23_index/fungsiPrint/geografi_desa" target ="_blank" class="btn btn-primary">Print</a>
	</div>
</div>

<div id="utama">
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
</div>
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
			<select id="selectPotensi" class="selectPotensi">
				<option value="0">=== Pilih Potensi ===</option>
				<option value="Pertanian Perkebunan dan Kehutanan">Pertanian, Perkebunan dan Kehutanan</option>
				<option value="Perternakan dan Perikanan">Perternakan dan Perikanan</option>
				<option value="Sumber Daya Lainnya">Sumber Daya Lainnya</option>
			</select>
		</div>
		<div class="top-left-right" class="selectPortensi">
			<select id="selectTahun">
				<?php
					$tahun = date("Y");
					$akhir = $tahun + 1;
					$awal  = $tahun - 2;
					for ($r=$awal ; $r < $akhir ; $r++) { 
						?>
							<option value="<?php echo $r ?>"><?php echo $r ?></option>
						<?php
					}
				?>
			</select>
		</div>
	</div>
	<div class="top-right">
		<a href="<?php echo base_url() ?>c_23_index/fungsiPrint/SDA" target ="_blank" class="btn btn-primary">Print</a>
	</div>
</div>

<div id="utama">
	
</div>
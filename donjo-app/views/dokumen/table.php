<script>
	$(function() {
		var keyword = <?php echo $keyword?> ;
		$( "#cari" ).autocomplete({
			source: keyword
		});
	});
</script>

<div id="pageC">
<table class="inner">
<tr style="vertical-align:top">

	<?php if($this->modul_ini <> 15): ?>
		<td class="side-menu">
			<legend>Kategori Dokumen</legend>
			<div class="lmenu">
				<ul>
					<a href="<?php echo site_url("dokumen/index/1")?>"><li <?php if($kat==1)echo "class='selected'";?>>Umum</li></a>
					<a href="<?php echo site_url("dokumen/index/2")?>"><li <?php if($kat==2)echo "class='selected'";?>>Inventaris dan Kekayaan Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/3")?>"><li <?php if($kat==3)echo "class='selected'";?>>Peraturan desa</li></a>					
					<a href="<?php echo site_url("dokumen/index/4")?>"><li <?php if($kat==4)echo "class='selected'";?>>Aparat Pemerintah Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/5")?>"><li <?php if($kat==5)echo "class='selected'";?>>Agenda</li></a>
					<a href="<?php echo site_url("dokumen/index/6")?>"><li <?php if($kat==6)echo "class='selected'";?>>Ekspedisi</li></a>
					<a href="<?php echo site_url("dokumen/index/7")?>"><li <?php if($kat==7)echo "class='selected'";?>>Lembaran Desa dan Berita Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/8")?>"><li <?php if($kat==8)echo "class='selected'";?>>Buku tamu BPD</li></a>
					<a href="<?php echo site_url("dokumen/index/9")?>"><li <?php if($kat==9)echo "class='selected'";?>>Buku daftar hadir Rapat BPD</li></a>
					<a href="<?php echo site_url("dokumen/index/10")?>"><li <?php if($kat==10)echo "class='selected'";?>>Data Anggota BPD</li></a>
					<a href="<?php echo site_url("dokumen/index/11")?>"><li <?php if($kat==11)echo "class='selected'";?>>Data Aspirasi Masyarakat</li></a>
					<a href="<?php echo site_url("dokumen/index/12")?>"><li <?php if($kat==12)echo "class='selected'";?>>Data Kegiatan BPD</li></a>
					<!--batas-->
					<a href="<?php echo site_url("dokumen/index/13")?>"><li <?php if($kat==13)echo "class='selected'";?>>Data Notulen rapat BPD</li></a>
					<a href="<?php echo site_url("dokumen/index/14")?>"><li <?php if($kat==14)echo "class='selected'";?>>Data Peraturan Keputusan BPD</li></a>
					<a href="<?php echo site_url("dokumen/index/15")?>"><li <?php if($kat==15)echo "class='selected'";?>>Data tanah didesa</li></a>
					<a href="<?php echo site_url("dokumen/index/16")?>"><li <?php if($kat==16)echo "class='selected'";?>>Inventaris Hasil Pembangunan</li></a>
					<a href="<?php echo site_url("dokumen/index/17")?>"><li <?php if($kat==17)echo "class='selected'";?>>Kader Pemberdayaan Masyarakat</li></a>
					<a href="<?php echo site_url("dokumen/index/18")?>"><li <?php if($kat==18)echo "class='selected'";?>>Keputusan Kepala Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/19")?>"><li <?php if($kat==19)echo "class='selected'";?>>Keputusan Musyawarah Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/20")?>"><li <?php if($kat==20)echo "class='selected'";?>>Keputusan Musyawarah Perencanaan Pembangunan Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/21")?>"><li <?php if($kat==21)echo "class='selected'";?>>Laporan Keuangan BPD</li></a>
					<a href="<?php echo site_url("dokumen/index/22")?>"><li <?php if($kat==22)echo "class='selected'";?>>Peraturan Didesa</li></a>
					<!-- penambahan approval -->
					<a href="<?php echo site_url("dokumen/index/23")?>"><li <?php if($kat==23)echo "class='selected'";?>>Data Inventaris Bpd</li></a>
					<a href="<?php echo site_url("dokumen/index/24")?>"><li <?php if($kat==24)echo "class='selected'";?>>Data Induk Penduduk</li></a>
					<a href="<?php echo site_url("dokumen/index/25")?>"><li <?php if($kat==25)echo "class='selected'";?>>Data Mutasi Penduduk</li></a>
					<a href="<?php echo site_url("dokumen/index/26")?>"><li <?php if($kat==26)echo "class='selected'";?>>Rekapitulasi Penduduk</li></a>
					<a href="<?php echo site_url("dokumen/index/27")?>"><li <?php if($kat==27)echo "class='selected'";?>>Data Penduduk Sementara</li></a>
					<a href="<?php echo site_url("dokumen/index/28")?>"><li <?php if($kat==28)echo "class='selected'";?>>Ktp dan Data Keluarga</li></a>
					<a href="<?php echo site_url("dokumen/index/29")?>"><li <?php if($kat==29)echo "class='selected'";?>>Anggaran Pendapatan dan Belanja</li></a>
					<a href="<?php echo site_url("dokumen/index/30")?>"><li <?php if($kat==30)echo "class='selected'";?>>Rencana Anggaran Biaya</li></a>
					<a href="<?php echo site_url("dokumen/index/31")?>"><li <?php if($kat==31)echo "class='selected'";?>>Kas Pembantu Kegiatan</li></a>
					<a href="<?php echo site_url("dokumen/index/32")?>"><li <?php if($kat==32)echo "class='selected'";?>>Kas Umum</li></a>
					<a href="<?php echo site_url("dokumen/index/33")?>"><li <?php if($kat==33)echo "class='selected'";?>>Data Bank Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/34")?>"><li <?php if($kat==34)echo "class='selected'";?>>Rencana Kerja Pembangunan</li></a>
					<a href="<?php echo site_url("dokumen/index/35")?>"><li <?php if($kat==35)echo "class='selected'";?>>Kegiatan Pembangunan</li></a>
					<a href="<?php echo site_url("dokumen/index/36")?>"><li <?php if($kat==36)echo "class='selected'";?>>Agenda Surat Keluar</li></a>
					<a href="<?php echo site_url("dokumen/index/37")?>"><li <?php if($kat==37)echo "class='selected'";?>>Agenda Surat Masuk</li></a>
				<!-- 	<a href="<?php echo site_url("dokumen/index/8")?>"><li <?php if($kat==8)echo "class='selected'";?>>Data Induk Kependudukan</li></a> -->
					
				</ul>
			</div>
		</td>
	<?php endif; ?>

	<td style="background:#fff;padding:0px;">
		<div id="contentpane">
			<form id="mainform" name="mainform" action="" method="post">
				<input name="kategori" type="hidden" value="<?php echo $kat?>">
		    <div class="ui-layout-north panel">
					<div class="content">
						<h3>Dokumen: <?php if($kat == 6){ echo 'Ekspedisi'; }else{ echo 'Umum'; }?></h3>
					</div>
		      <div class="left">
		        <div class="uibutton-group">
		        	<?php if($user_role == 2) { ?> <!-- id role user is operator -->
		          	<a href='<?php echo site_url("{$this->controller}/form/$kat")?>' class="uibutton tipsy south" title="Tambah Data" ><span class="fa fa-plus-square">&nbsp;</span>Tambah Dokumen Baru</a>
		         
			          <button type="button" title="Hapus Data" onclick="deleteAllBox('mainform','<?php echo site_url("{$this->controller}/delete_all/$kat/$p/$o")?>')" class="uibutton tipsy south"><span class="fa fa-trash">&nbsp;</span>Hapus Data</button>
			        <?php } ?>
		        </div>
		      </div>
		    </div>
		    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
		      <div class="table-panel top">
		        <div class="left">
		          
		        </div>
		        <div class="right">
		          <input name="cari" id="cari" type="text" class="inputbox help tipped" size="20" value="<?php echo $cari?>" title="Cari.." onkeypress="if (event.keyCode == 13) {$('#'+'mainform').attr('action','<?php echo site_url('dokumen/search')?>');$('#'+'mainform').submit();}" />
		          <button type="button" onclick="$('#'+'mainform').attr('action','<?php echo site_url('dokumen/search')?>');$('#'+'mainform').submit();" class="uibutton tipsy south"  title="Cari Data"><span class="fa fa-search">&nbsp;</span>Cari</button>
		        </div>
		      </div>		      
		      <table class="list">
						<thead>
		          <tr>
		            <th>No</th>
		            <?php if($user_role == 2){?>
		            	<th><input type="checkbox" class="checkall"/></th>
		            <?php }else if ($user_role == 4) { ?>
		            	<th>Approval Dokumen</th>
		            <?php } ?>
		            <?php if($user_role == 2) { ?> <!-- id role user is operator -->
		            	<th width="120">Aksi</th>
		            <?php } ?>
						 		<?php  if($o==2): ?>
									<th align="left"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/1")?>">Judul / Tentangggg <span class="fa fa-sort-asc fa-sm">
								<?php  elseif($o==1): ?>
									<th align="left"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/2")?>">Judul / Tentanggg<span class="fa fa-sort-desc fa-sm">
								<?php  else: ?>
									<th align="left"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/3")?>">Judul / Tentangg <span class="fa fa-sort fa-sm">
								<?php  endif; ?>&nbsp;</span></a></th>

							  <?php if ($kat == 2) : ?>
							  	<th></th>
							  	<th></th>
							  	<th>No.Urut</th>
							  	<th>Jenis Barang / Bangunan</th>
							  	<th>Asal Barang / Bangunan</th>
							  	<th>Keadaan Barang / Bangunan Awal tahun</th>
							  	<th>Penghapusan Barang dan bangunan</th>
							  	<th>Tanggal Penghapusan</th>
							  	<th>Keterangann</th>
							  <?php elseif ($kat == 3) : ?>
							  	<th>No.Urut</th>
							  	<th>Jenis Peraturan Desa</th>
							  	<th>Nomor Dan Tanggal Ditetapkan</th>
							  	<th>Tentang</th>
							  	<th>Diundangkan</th>
							  	<th>Keterangan</th>
							  <?php elseif ($kat == 4) : ?>
							  	<th>No.Urut</th>
							  	<th>Nama Lengkap</th>
							  	<th>Nomor Induk Aparat Pemerintah Desa(NIAP)</th>
							  	<th>Nomor Induk Pegawai(NIP)</th>
							  	<th>Jenis Kelamin</th>
							  	<th>Tempat dan Tanggal Lahir</th>
							  	<th>Agama</th>
							  	<th>Pangkat Golongan</th>
							  	<th>Jabatan</th>
							  	<th>Pendidikan Terakhir</th>
							  	<th>Nomor dan Tanggal Keputusan Pengangkatan</th>
							  	<th>Nomor dan Tanggal Keputusan Pemberhentian</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 5) : ?>
							  	<th>No.Urut</th>
							  	<th>Tanggal Penerimaan Surat</th>
							  	<th>Nomor Surat Masuk</th>
							  	<th>Tanggal Surat Masuk</th>
							  	<th>Pengiriman Surat Masuk</th>
							  	<th>Nomor Surat Keluar</th>
							  	<th>Isi Surat Masuk</th>
							  	<th>Nomor Surat Keluar</th>
							  	<th>Tanggal Surat Keluar</th>
							  	<th>Ditujukan Kepada</th>
							  	<th>Isi Surat Keluar</th>
							  	<th>Keterangan</th>
							  <?php elseif ($kat == 6) : ?>
							  	<th>No.Urut</th>
				            	<th>Tanggal Pengiriman</th>
				            	<th>Tanggal dan Nomor Surat</th>
				            	<th>Isi Singkat Surat Yang Dikirim</th>
				            	<th>Ditujukan Kepada</th>
				            	<th>Keterangan</th>
				            	<?php echo $dokumen['keterangan'];?>
				            	<?php elseif ($kat == 7) : ?>
							  	<th>No.Urut</th>
							  	<th>Jenis Peraturan Desa</th>
							  	<th>Nomor dan Tanggal ditetapkan </th>
							  	<th>Tentang</th>
							  	<th>Tanggal Diundangkan</th>
							  	<th>Nomor Diundangkan</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 8) : ?>
							  	<th>No.Urut</th>
							  	<th>Tanggal</th>
							  	<th>Nama Lengkap </th>
							  	<th>Jabatan</th>
							  	<th>Alamat</th>
							  	<th>Keperluan</th>
							  	<th>ttd</th>
							  	<?php elseif ($kat == 9) : ?>
							  	<th>No.Urut</th>
							  	<th>Hari/ Tanggal</th>
							  	<th>Nama Lembaga </th>
							  	<th>Aspirasi yang disampaikan</th>
							  	<th>Tindak Lanjut</th>
							  	<?php elseif ($kat == 10) : ?>
							  	<th>No.Urut</th>
							  	<th>Nama Lengkap</th>
							  	<th>NIP</th>
							  	<th>Jenis Kelamin </th>
							  	<th>Tempat & Tanggal Lahir</th>
							  	<th>Agama</th>
							  	<th>Jabatan</th>
							  	<th>Pendidikan Terakhir</th>
							  	<th>Tanggal Keputusan Pengangkatan</th>
							  	<th>Tanggal Keputusan Pemberhentian </th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 11) : ?>
							  	<th>No.Urut</th>
							  	<th>Hari/tanggal</th>
							  	<th>Nama Lembaga</th>
							  	<th>Aspirasi yang disampaikan </th>
							  	<th>Tindak Lanjut</th>
							  	<?php elseif ($kat == 12) : ?>
							  	<th>No.Urut</th>
							  	<th>Tanggal</th>
							  	<th>Jenis Kegiatan</th>
							  	<th>Pelaksanaan</th>
							  	<th>Hasil Kegiatan</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 13) : ?>
							  	<th>No.Urut</th>
							  	<th>Hari/tanggal</th>
							  	<th>Nama Lembaga</th>
							  	<th>Aspirasi yang disampaikan</th>
							  	<th>Tindak Lanjut</th>
							  	<?php elseif ($kat == 14) : ?>
							  	<th>No.Urut</th>
							  	<th>No Peraturan BPD</th>
							  	<th>Tanggal Peraturan BPD</th>
							  	<th>Hasil Keputusan BPD</th>
							  	<th>Tentang</th>
							  	<th>Uraian Singkat</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 15) : ?>
							  	<th>No.Urut</th>
							  	<th>Nama Perorangan/Badan Hukum</th>
							  	<th>Jumlah M2</th>
							  	<th>Status Hak Tanah</th>
							  	<th>Sudah Bertifikat</th>
							  	<th>Pengguna Tanah (M2)</th>
							  	<th>Non Pertanian</th>
							  	<th>Pertanian</th>
							  	<th>Lain-lain</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 16) : ?>
							  	<th>No.Urut</th>
							  	<th>Jenis/Nama hasil pembangunan</th>
							  	<th>Volume</th>
							  	<th>Biaya</th>
							  	<th>Lokasi</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 17) : ?>
							  	<th>No.Urut</th>
							  	<th>Nama</th>
							  	<th>Umur</th>
							  	<th>Jenis Kelamin</th>
							  	<th>Pendidikan</th>
							  	<th>Bidang</th>
							  	<th>Alamat</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 18) : ?>
							  	<th>No.Urut</th>
							  	<th>No. Keputusan Kepala Desa</th>
							  	<th>Tanggal Keputusan Kepala Desa</th>
							  	<th>Tentang</th>
							  	<th>Uraian Singkat</th>
							  	<th>No. Dilaporkan</th>
							  	<th>Tanggal Dilaporkan</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 19) : ?>
							  	<th>No.Urut</th>
							  	<th>Tentang</th>
							  	<th>Pokok keputusan musyawarah</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 20) : ?>
							  	<th>No.Urut</th>
							  	<th>Tanggal</th>
							  	<th>Pokok Usulan Kegiatan</th>
							  	<th>Keterangan</th>
							  	<?php elseif ($kat == 21) : ?>
							  	<th>No.Urut</th>
							  	<th>Tanggal</th>
							  	<th>Uraian</th>
							  	<th>Penerimaan Rp</th>
							  	<th>Pengeluaran Rp</th>
							  	<?php elseif ($kat == 22) : ?>
							  	<th>No.Urut</th>
							  	<th>Jenis Peraturan Desa</th>
							  	<th>No. Peraturan Desa</th>
							  	<th>Tanggal Ditetapkan Peraturan Desa</th>
							  	<th>Tentang</th>
							  	<th>Tgl Dilaporkan</th>
							  	<th>No. Diundangkan Dalam Lembaran Desa</th>
							  	<th>No. Diundangkan Dalam Berita Desa</th>
							  	<th>keterangan</th>	
								<?php elseif ($kat == 23) : ?>
								  	<th>No.Urut</th>
								  	<th>Bangunan</th>
								  	<th>APBDES</th>
								  	<th>Bantuan  Pemerintah</th>
								  	<th>Bantuan  Provinsi</th>
								  	<th>Bantuan  Kab/Kota</th>
								  	<th>Bantuan Sumbangan</th>
								  	<th>Keadaan Barang awal</th>
								  	<th>Tipe Penghapusan</th>
								  	<th>Tanggal Penghapusan</th>
								  	<th>Keadaan Barang akhir</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 24) : ?>
							  		<th>No.Urut</th>
								  	<th>Nama Lengkap</th>
								  	<th>Jenis Kelamin</th>
								  	<th>Status Perkawinan</th>
								  	<th>Tempat Lahir</th>
								  	<th>Tanggal Lahir</th>
								  	<th>Agama</th>
								  	<th>Pendidikan Terakhir</th>
								  	<th>Pekerjaan</th>
								  	<th>Dapat Membaca Huruf</th>
								  	<th>Kewarganeraraan</th>
								  	<th>Alamat Lengkap</th>
								  	<th>Kedudukan Dalam Keluarga</th>
								  	<th>Nomor Induk Kependudukan</th>
								  	<th>Nomor Kartu Keluarga</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 25) : ?>
							  		<th>No.Urut</th>
								  	<th>Nama Lengkap</th>
								  	<th>Tempat Lahir</th>
								  	<th>Tanggal Lahir</th>
								  	<th>Jenis Kelamin</th>
								  	<th>Kewarganeraraan</th>
								  	<th>Jenis Mutasi</th>
								  	<th>Alasan</th>
								  	<th>Tanggal</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 26) : ?>
							  		<th>No.Urut</th>
								  	<th>Nama Dusun</th>
								  	<th>Laki - Laki (WNA)</th>
								  	<th>Perempuan (WNA)</th>
								  	<th>Laki - Laki (WNI)</th>
								  	<th>Perempuan (WNI)</th>
								  	<th>Jumlah KK</th>
								  	<th>Jumlah Anggota Keluarga</th>
								  	<th>Jumlah Jiwa</th>
								  	<th>Laki - Laki (WNA) Lahir</th>
								  	<th>Perempuan (WNA) Lahir</th>
								  	<th>Laki - Laki (WNI) Datang</th>
							  	<?php elseif ($kat == 27) : ?>
							  		<th>No.Urut</th>
								  	<th>Nama Lengkap</th>
								  	<th>Jenis Kelamin</th>
								  	<th>Tempat Tanggal Lahir</th>
								  	<th>Pekerjaan</th>
								  	<th>Kewarganeraraan</th>
								  	<th>Datang Dari</th>
								  	<th>Maksud Dan Tujuan</th>
								  	<th>Nama Dan Alamat yg di datangi</th>
								  	<th>Tanggal Datang</th>
								  	<th>Tanggal Pergi</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 28) : ?>
							  		<th>No.Urut</th>
							  		<th>Nomor Keluarga</th>
								  	<th>Nama Lengkap</th>
								  	<th>Nik</th>
								  	<th>Jenis Kelamin</th>
								  	<th>Tempat Tanggal Lahir</th>							  		
								  	<th>Gol Darah</th>
								  	<th>Agama</th>
								  	<th>Pendidikan</th>
								  	<th>Pekerjaan</th>
								  	<th>Status Perkawinan</th>
								  	<th>Status Hubungan Keluarga</th>
								  	<th>Kewarganeraraan</th>
								  	<th>Ayah</th>
								  	<th>Ibu</th>
								  	<th>Tanggal Mulai Tinggal</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 29) : ?>
							  		<th>Kode Rekening</th>
								  	<th>Uraian</th>
								  	<th>Anggaran</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 30) : ?>
							  		<th>No.Urut</th>
							  		<th>Bidang</th>
								  	<th>Kegiatan</th>
								  	<th>Waktu Pelaksanaan</th>
								  	<th>Uraian</th>
								  	<th>Volume</th>							  		
								  	<th>Harga satuan</th>
								  	<th>Jumlah</th>
							  	<?php elseif ($kat == 31) : ?>
							  		<th>No. Urut</th>
								  	<th>Bidang</th>
								  	<th>Kegiatan</th>
								  	<th>Tanggal</th>							  		
								  	<th>Penerimaan Bendahara</th>
								  	<th>Penerimaan Swadaya Masyarakat</th>
								  	<th>Nomor Bukti</th>
								  	<th>Belanja Barang dan Jasa</th>
								  	<th>Belanja Modal</th>
								  	<th>Jumlah Pengembalian Bendahara</th>
								  	<th>Saldo Kas</th>
							  	<?php elseif ($kat == 32) : ?>
							  		<th>No. Urut</th>
								  	<th>Tanggal</th>							  		
								  	<th>Kode Rekening</th>
								  	<th>Uraian</th>
								  	<th>Penerimaan</th>
								  	<th>Pengeluaran</th>
								  	<th>Nomor Bukti</th>
								  	<th>Jumlah Pengeluaran Komulatif</th>
								  	<th>Saldo Kas</th>
							  	<?php elseif ($kat == 33) : ?>
							  		<th>No. Urut</th>
								  	<th>Bulan</th>
								  	<th>Bank Cabang</th>
								  	<th>Rekening No</th>
								  	<th>Tanggal Transaksi</th>						  		
								  	<th>Uraian Transaksi</th>
								  	<th>Pemasukan Setoran</th>
								  	<th>Pemasukan Bunga Bank</th>
								  	<th>Pengeluaran Penarikan</th>
								  	<th>Pengeluaran Pajak</th>
								  	<th>Pengeluaran Biaya Administrasi</th>
								  	<th>Saldo</th>
							  	<?php elseif ($kat == 34) : ?>
							  		<th>No. Urut</th>
								  	<th>Kegiatan</th>
								  	<th>Lokasi</th>
								  	<th>Sumber Daya Pemerintah</th>
								  	<th>Sumber Daya Provinsi</th>						  		
								  	<th>Sumber Daya Kab/Kota</th>
								  	<th>Sumber Daya Swadaya</th>
								  	<th>Jumlah</th>
								  	<th>Pelaksanaan</th>
								  	<th>Manfaat</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 35) : ?>
							  		<th>No. Urut</th>
							  		<th>Kegiatan</th>
								  	<th>Volume</th>
								  	<th>Sumber Daya Pemerintah</th>
								  	<th>Sumber Daya Provinsi</th>
								  	<th>Sumber Daya Kab/Kota</th>						  		
								  	<th>Sumber Daya Swadaya</th>
								  	<th>Jumlah</th>
								  	<th>Waktu</th>
								  	<th>Sifat Proyek</th>
								  	<th>Pelaksanaan</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 36) : ?>
							  		<th>No. Urut</th>						  		
								  	<th>Tanggal Penerimaan Surat</th>
								  	<th>Nomor</th>
								  	<th>Tanggal</th>
								  	<th>Tujuan</th>
								  	<th>Isi Surat</th>
								  	<th>Keterangan</th>
							  	<?php elseif ($kat == 37) : ?>
							  		<th>No. Urut</th>						  		
								  	<th>Tanggal Penerimaan Surat</th>
								  	<th>Nomor</th>
								  	<th>Tanggal</th>
								  	<th>Pengirim</th>
								  	<th>Isi Surat</th>
								  	<th>Keterangan</th>
							  <?php endif; ?>

								<?php  if($o==1): ?>
									<th align="center"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/3")?>">Aktif? <span class="fa fa-sort-asc fa-sm">
								<?php  else: ?>
									<th align="center"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/3")?>">Aprrove? <span class="fa fa-sort fa-sm">
								<?php  endif; ?>&nbsp;</span></a></th>

								<?php  if($o==6): ?>
									<th align="center" width='200'><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/5")?>">Diunggah pada <span class="fa fa-sort-asc fa-sm">
								<?php  elseif($o==5): ?>
									<th align="center" width='200'><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/6")?>">Diunggah pada <span class="fa fa-sort-desc fa-sm">
								<?php  else: ?>
									<th align="center" width='200'><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/5")?>">Diunggah pada <span class="fa fa-sort fa-sm">
								<?php  endif; ?>&nbsp;</span></a></th>
							</tr>
						</thead>
						<tbody>
					    <?php foreach($main as $data){?>
								<tr>
									<td align="center" width="2"><?php echo $data['no']?></td>
									<?php if($user_role == 2) { ?> <!-- id role user is operator -->
										<td align="center" width="5">
											<input type="checkbox" name="id_cb[]" value="<?php echo $data['id']?>" />
										</td>
										<td>
											<div class="uibutton-group" style="display: flex;">

												<a href="<?php echo site_url("{$this->controller}/form/$kat/$p/$o/$data[id]")?>" class="uibutton tipsy south fa-tipis" title="Ubah Data"><span class="fa fa-edit"></span> Ubah</a>
												<a href="<?php echo base_url().LOKASI_DOKUMEN.underscore($data['satuan'])?>" class="uibutton tipsy south fa-tipis" title="Unduh Berkas" download><span class="fa fa-download"></span> Unduh</a><a href="<?php echo base_url()."dokumen/export_excel/$kat/$data[id]"?>" class="uibutton tipsy south fa-tipis" title="Unduh Berkas"><span class="fa fa-file"></span> XLS</a><a href="<?php echo base_url()."dokumen/export_pdf/$kat/$data[id]"?>" class="uibutton tipsy south fa-tipis" title="Unduh Berkas" download><span class="fa fa-file"></span>PDF</a>	
												
												<a href="<?php echo site_url("{$this->controller}/delete/$kat/$p/$o/$data[id]")?>" class="uibutton tipsy south" title="Hapus Data" target="confirm" message="Apakah Anda Yakin?" header="Hapus Data"><span class="fa fa-trash"><span></a>
									
												<?php if($data['enabled'] == '2'):?>
													<a href="<?php echo site_url($this->controller.'/dokumen_lock/'.$kat.'/'.$data['id'])?>" class="uibutton tipsy south" title="Aktivasi dokumen"><span class="fa fa-lock"></span></a>
												<?php elseif($data['enabled'] == '1'): ?>
													<a href="<?php echo site_url($this->controller.'/dokumen_unlock/'.$kat.'/'.$data['id'])?>" class="uibutton tipsy south" title="Non-aktifkan dokumen"><span class="fa fa-unlock"><span></a>
												<?php endif?>
											</div>
									  	</td>
									<?php } ?>
									<!-- id role user is kepala desa dna status belum di approve -->
									<?php if($user_role == 4 && $data['is_approve'] == 0) { ?> 
									<td align="center" width="4"><button type="text" style="background: green;" onclick="approveEkspedisi(<?php echo $data['id'];?>)"><span class="fa fa-check">&nbsp;</span></button>&nbsp;<button type="text" style="background: red; onclick="rejectEkspedisi(<?php echo $data['id'];?>)"><span class="fa fa-remove">&nbsp;</span></button></td>
									<?php } ?>

									<!-- id role user is kepala desa dan status sudah approve -->
									<?php if($user_role == 4 && $data['is_approve'] == 1) { ?> 
									<td align="center" width="4"><button type="text" style="background: green;"><span class="fa fa-check">&nbsp;</span></button>
									</td>
									<?php } ?>

									<!-- id role user is kepala desa dan status reject -->
									<?php if($user_role == 4 && $data['is_approve'] == 2) { ?> 
									<td align="center" width="4"><button type="text" style="background: red;"><span class="fa fa-remove">&nbsp;</span></button>
									</td>
									<?php } ?>

								  <td><?php echo $data['nama']?></td>
								  <?php if ($kat == 2) : ?>
								  	<td><?php echo $data['attr']['no_kep_kades']." / ".$data['attr']['tgl_kep_kades']?></td>
								  	<td><?php echo $data['attr']['uraian']?></td>
								<?php if($kat == 2): ?> <!-- kondisi jika kategori nya dokumen inventaris !-->
								  	<td align="center"><?php echo $data['nourut']; ?></td>
								  	<td align="center"><?php echo $data['jenis_barang_at_bangunan']; ?></td>
								  	<td align="center"><?php echo $data['asal_barang_bangunan']; ?></td>
								  	<td align="center"><?php echo $data['keadaanbarang']; ?></td>
								  	<td align="center"><?php echo $data['penghapusanbarang']; ?></td>
								  	<td align="center"><?php echo $data['tanggal_penghapusan']; ?></td>
								  	<td align="center"><?php echo $data['keterangan'];?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php elseif ($kat == 3) : ?><!-- kondisi jika kategori nya dokumen peraturan desa !-->	
 								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['nomber_tanggalperaturandesa']; ?></td>
								  	<td align="center"><?php echo $data['tentang']; ?></td>
								  	<td align="center"><?php echo $data['uraiansingkat']; ?></td>
								  	<td align="center"><?php echo $data['nomor_tanggalkesepakatan']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 4): ?> <!-- kondisi jika kategori nya dokumen aparat !-->
								  <td align="center"><?php echo $data['nourut']; ?></td>
								  	<td align="center"><?php echo $data['nama_lengkap']; ?></td>
								  	<td align="center"><?php echo $data['nomor_induk_apr_pem_desa']; ?></td>
								  	<td align="center"><?php echo $data['nomor_induk_pegawai']; ?></td>
								  	<td align="center"><?php echo $data['jenis_kelamin']; ?></td>
								  	<td align="center"><?php echo $data['tempat_n_tanggal_lahir']; ?></td>
								  	<td align="center"><?php echo $data['agama'];?></td>
								  	<td align="center"><?php echo $data['Pangkat_golongan']; ?></td>
								  	<td align="center"><?php echo $data['jabatan']; ?></td>								  	
								  	<td align="center"><?php echo $data['Pendidikan_terakhir']; ?></td>
								  	<td align="center"><?php echo $data['no_n_tanggal_keputusan_pengangkatan']; ?></td>
								  	<td align="center"><?php echo $data['no_n_tanggal_keputusan_pemberhentian']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								   <?php if($kat == 5): ?> <!-- kondisi jika kategori nya dokumen aparat !-->
								  <td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['tanggal_penerima_surat']; ?></td>
								  	<td align="center"><?php echo $data['no_masuk']; ?></td>
								  	<td align="center"><?php echo $data['tgl_masuk']; ?></td>
								  	<td align="center"><?php echo $data['pengiriman']; ?></td>
								  	<td align="center"><?php echo $data['isi_surat_masuk']; ?></td>
								  	<td align="center"><?php echo $data['surat_keluar'];?></td>
								  	<td align="center"><?php echo $data['no_surat_keluar']; ?></td>
								  	<td align="center"><?php echo $data['tgl_surat_keluar']; ?></td>						
								  	<td align="center"><?php echo $data['di_tujukan_kepada']; ?></td>
								  	<td align="center"><?php echo $data['isi_surat_keluar']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 6): ?> <!-- kondisi jika kategori nya dokumen ekspedisi !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo tgl_indo2($data['tanggal_pengiriman'])?></td>
								  	<td align="center"><?php echo $data['tanggal_no_surat'];?></td>
								  	<td align="center"><?php echo $data['isi_surat']; ?></td>
								  	<td align="center"><?php echo $data['ditujukan_kepada']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 7): ?> <!-- kondisi jika kategori nya dokumen lembaran berita desa !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['jenis_peraturan_desa'];?></td>
								  	<td align="center"><?php echo $data['no_ditetapkan_n_tgl_ditetapkan'];?></td>
								  	<td align="center"><?php echo $data['tentang']; ?></td>
								  	<td align="center"><?php echo $data['tgl_berita_desa'];?></td>
								  	<td align="center"><?php echo $data['no_berita_desa']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 8): ?> <!-- kondisi jika kategori nya dokumen bukutamubpd !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['tanggal'];?></td>
								  	<td align="center"><?php echo $data['namalengkap'];?></td>
								  	<td align="center"><?php echo $data['jabatan']; ?></td>
								  	<td align="center"><?php echo $data['alamat'];?></td>
								  	<td align="center"><?php echo $data['keperluan']; ?></td>
								  	<td align="center"><?php echo $data['ttd']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 9): ?> <!-- kondisi jika kategori nya dokumen bukutamubpd !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['hari'];?></td>
								  	<td align="center"><?php echo $data['namalembaga'];?></td>
								  	<td align="center"><?php echo $data['aspirasiyangdisampaikan']; ?></td>
								  	<td align="center"><?php echo $data['tindaklanjut'];?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 10): ?> <!-- kondisi jika kategori nya dokumen bukutamubpd !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['namalengkap'];?></td>
								  	<td align="center"><?php echo $data['nip'];?></td>
								  	<td align="center"><?php echo $data['jeniskelamin']; ?></td>
								  	<td align="center"><?php echo $data['tempattanggallahir'];?></td>
								  	<td align="center"><?php echo $data['agama']; ?></td>
								  	<td align="center"><?php echo $data['jabatan'];?></td>
								  	<td align="center"><?php echo $data['pendidikanterakhir'];?></td>
								  	<td align="center"><?php echo $data['tanggalkeputusanpengangkatan']; ?></td>
								  	<td align="center"><?php echo $data['tanggalkeputusanpemberhentian'];?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								   <?php if($kat == 11): ?> <!-- kondisi jika kategori nya dokumen bukutamubpd !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['hari'];?></td>
								  	<td align="center"><?php echo $data['namalembaga'];?></td>
								  	<td align="center"><?php echo $data['aspirasiyangdisampaikan']; ?></td>
								  	<td align="center"><?php echo $data['tindaklanjut'];?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 12): ?> <!-- kondisi jika kategori nya dokumen bukutamubpd !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['tanggal'];?></td>
								  	<td align="center"><?php echo $data['jeniskegiatan'];?></td>
								  	<td align="center"><?php echo $data['pelaksanaan']; ?></td>
								  	<td align="center"><?php echo $data['hasilkegiatan'];?></td>
								  	<td align="center"><?php echo $data['keterangan'];?></td>							  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 13): ?> <!-- kondisi jika kategori nya dokumen data notulen rapat bpd !-->
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['hari'];?></td>
								  	<td align="center"><?php echo $data['namalembaga'];?></td>
								  	<td align="center"><?php echo $data['aspirasiyangdisampaikan']; ?></td>
								  	<td align="center"><?php echo $data['tindaklanjut'];?></td>						  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 14): ?> <!-- kondisi jika kategori nya dokumen data notulen rapat bpd !-->
								  	<td align="center"><?php echo $data['No_Urut']; ?></td>
								  	<td align="center"><?php echo $data['noperaturan_bpd'];?></td>
								  	<td align="center"><?php echo $data['tanggalperatutan_bpd'];?></td>
								  	<td align="center"><?php echo $data['hasilkeputusan_bpd']; ?></td>
								  	<td align="center"><?php echo $data['tentang'];?></td>	
								  	<td align="center"><?php echo $data['uraiansingkat'];?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>						  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 15): ?> <!-- kondisi jika kategori nya dokumen data tanah didesa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['namaperorangan_badanhukum'];?></td>
								  	<td align="center"><?php echo $data['jumlahm2'];?></td>
								  	<td align="center"><?php echo $data['statushaktanah']; ?></td>
								  	<td align="center"><?php echo $data['sudah_bertifikat_opt'];?></td>	
								  	<td align="center"><?php echo $data['penggunatanahm2'];?></td>
								  	<td align="center"><?php echo $data['non_pertanian_opt']; ?></td>	
								  	<td align="center"><?php echo $data['pertanian_opt'];?></td>
								  	<td align="center"><?php echo $data['lainlain']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>						  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 16): ?> <!-- kondisi jika kategori nya dokumen inventaris hasil pembangunan !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nama_hasil_pembangunan'];?></td>
								  	<td align="center"><?php echo $data['volume'];?></td>
								  	<td align="center"><?php echo $data['biaya']; ?></td>
								  	<td align="center"><?php echo $data['lokasi'];?></td>	
								  	<td align="center"><?php echo $data['keterangan'];?></td>				  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 17): ?> <!-- kondisi jika kategori nya dokumen kader pemberdayaan masyarakat !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nama_lengkap'];?></td>
								  	<td align="center"><?php echo $data['umur'];?></td>
								  	<td align="center"><?php echo $data['jenis_kelamin']; ?></td>
								  	<td align="center"><?php echo $data['pendidikan'];?></td>	
								  	<td align="center"><?php echo $data['bidang'];?></td>	
								  	<td align="center"><?php echo $data['alamat'];?></td>	
								  	<td align="center"><?php echo $data['keterangan'];?></td>				  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 18): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nokeputusankepaladesa'];?></td>
								  	<td align="center"><?php echo $data['tanggalkeputusankepaladesa'];?></td>
								  	<td align="center"><?php echo $data['tentang']; ?></td>
								  	<td align="center"><?php echo $data['uraiansingkat'];?></td>	
								  	<td align="center"><?php echo $data['nodilaporkan'];?></td>	
								  	<td align="center"><?php echo $data['tanggaldilaporkan'];?></td>	
								  	<td align="center"><?php echo $data['keterangan'];?></td>				  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 19): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['tentang'];?></td>
								  	<td align="center"><?php echo $data['pokokkeputusanmusyawarah'];?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>			  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 20): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['No_Urut']; ?></td>
								  	<td align="center"><?php echo $data['hari_tanggal'];?></td>
								  	<td align="center"><?php echo $data['pokokusulankegiatan'];?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>			  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 21): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['tanggal']; ?></td>
								  	<td align="center"><?php echo $data['uraian'];?></td>
								  	<td align="center"><?php echo $data['penerimaan'];?></td>
								  	<td align="center"><?php echo $data['pengeluaran']; ?></td>			  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 22): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['jenisperaturandesa']; ?></td>
								  	<td align="center"><?php echo $data['noperaturandesa'];?></td>
								  	<td align="center"><?php echo $data['tanggalditetapkanperaturandesa'];?></td>
								  	<td align="center"><?php echo $data['tentang']; ?></td>			
								  	<td align="center"><?php echo $data['tgl_lapor'];?></td>
								  	<td align="center"><?php echo $data['nodiundangkandalamlembarandesa'];?></td>
								  	<td align="center"><?php echo $data['nodiundangkandalamberitadesa']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 23): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['bangunan']; ?></td>
								  	<td align="center"><?php echo $data['apbdes'];?></td>
								  	<td align="center"><?php echo $data['bantuan_pemerintah'];?></td>
								  	<td align="center"><?php echo $data['bantuan_provinsi']; ?></td>	
								  	<td align="center"><?php echo $data['bantuan_kota'];?></td>
								  	<td align="center"><?php echo $data['bantuan_sumbangen'];?></td>
								  	<td align="center"><?php echo $data['keadaan_brg_awal']; ?></td>
								  	<td align="center"><?php echo $data['tipe_penghapusan'];?></td>
								  	<td align="center"><?php echo $data['tanggal_penghapusan'];?></td>
								  	<td align="center"><?php echo $data['keadaan_brg_akhir']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 24): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nama_lengkap']; ?></td>
								  	<td align="center"><?php echo $data['jenis_kelamin'];?></td>
								  	<td align="center"><?php echo $data['status'];?></td>
								  	<td align="center"><?php echo $data['tempat_lahir']; ?></td>			
								  	<td align="center"><?php echo $data['tanggal_lahir'];?></td>
								  	<td align="center"><?php echo $data['agama'];?></td>
								  	<td align="center"><?php echo $data['pendidikan_terakhir']; ?></td>
								  	<td align="center"><?php echo $data['pekerjaan']; ?></td>
								  	<td align="center"><?php echo $data['flag_baca'];?></td>
								  	<td align="center"><?php echo $data['warganegara'];?></td>
								  	<td align="center"><?php echo $data['alamat_lengkap']; ?></td>			
								  	<td align="center"><?php echo $data['kedudukan'];?></td>
								  	<td align="center"><?php echo $data['nik'];?></td>
								  	<td align="center"><?php echo $data['nkk']; ?></td>		
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 25): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nama_lengkap']; ?></td>
								  	<td align="center"><?php echo $data['tempat_lahir']; ?></td>
								  	<td align="center"><?php echo $data['tanggal_lahir'];?></td>
								  	<td align="center"><?php echo $data['jenis_kelamin'];?></td>
								  	<td align="center"><?php echo $data['flag_baca']; ?></td>			
								  	<td align="center"><?php echo $data['status'];?></td>
								  	<td align="center"><?php echo $data['alasan'];?></td>
								  	<td align="center"><?php echo $data['tanggal']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 26): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nama_dusun'];?></td>
								  	<td align="center"><?php echo $data['l_wna'];?></td>
								  	<td align="center"><?php echo $data['p_wna']; ?></td>	
								  	<td align="center"><?php echo $data['l_wni']; ?></td>
								  	<td align="center"><?php echo $data['p_wni'];?></td>
								  	<td align="center"><?php echo $data['jumlah_kk'];?></td>
								  	<td align="center"><?php echo $data['jml_anggota_kel']; ?></td>		
								  	<td align="center"><?php echo $data['jml_jiwa'];?></td>
								  	<td align="center"><?php echo $data['l_wna_lahir'];?></td>
								  	<td align="center"><?php echo $data['p_wna_lahir']; ?></td>	
								  	<td align="center"><?php echo $data['l_wni_datang']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 27): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nama_lengkap']; ?></td>
								  	<td align="center"><?php echo $data['jenis_kelamin'];?></td>
								  	<td align="center"><?php echo $data['tempat_tanggal_lahir'];?></td>
								  	<td align="center"><?php echo $data['pekerjaan']; ?></td>
								  	<td align="center"><?php echo $data['warganegara'];?></td>
								  	<td align="center"><?php echo $data['datang_dari'];?></td>
								  	<td align="center"><?php echo $data['tujuan_kedatangan']; ?></td>	
								  	<td align="center"><?php echo $data['alamat_tujuan_datang'];?></td>
								  	<td align="center"><?php echo $data['tanggal_datang'];?></td>
								  	<td align="center"><?php echo $data['tanggal_pergi']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 28): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['nomor_keluarga']; ?></td>
								  	<td align="center"><?php echo $data['nama_lengkap'];?></td>
								  	<td align="center"><?php echo $data['nik'];?></td>
								  	<td align="center"><?php echo $data['jenis_kelamin']; ?></td>		
								  	<td align="center"><?php echo $data['tempat_tanggal_lahir'];?></td>
								  	<td align="center"><?php echo $data['gol_darah'];?></td>
								  	<td align="center"><?php echo $data['agama']; ?></td>	
								  	<td align="center"><?php echo $data['pendidikan']; ?></td>
								  	<td align="center"><?php echo $data['pekerjaan'];?></td>
								  	<td align="center"><?php echo $data['status'];?></td>
								  	<td align="center"><?php echo $data['status_hub_kel']; ?></td>		
								  	<td align="center"><?php echo $data['warganegara'];?></td>
								  	<td align="center"><?php echo $data['ayah'];?></td>
								  	<td align="center"><?php echo $data['ibu']; ?></td>	
								  	<td align="center"><?php echo $data['tanggal_mulai_tinggal']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 29): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['kode_rekening']; ?></td>
								  	<td align="center"><?php echo $data['uraian']; ?></td>
								  	<td align="center"><?php echo $data['anggaran'];?></td>
								  	<td align="center"><?php echo $data['keterangan'];?></td>	  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 30): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['bidang'];?></td>
								  	<td align="center"><?php echo $data['kegiatan'];?></td>
								  	<td align="center"><?php echo $data['waktu_pelaksanaan']; ?></td>			
								  	<td align="center"><?php echo $data['uraian'];?></td>
								  	<td align="center"><?php echo $data['volume'];?></td>
								  	<td align="center"><?php echo $data['harga_satuan']; ?></td>	
								  	<td align="center"><?php echo $data['jumlah']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 31): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['bidang']; ?></td>
								  	<td align="center"><?php echo $data['kegiatan'];?></td>
								  	<td align="center"><?php echo $data['tanggal'];?></td>
								  	<td align="center"><?php echo $data['penerimaan_bendahara']; ?></td>
								  	<td align="center"><?php echo $data['penerimaan_masyarakat'];?></td>
								  	<td align="center"><?php echo $data['nomor_bukti'];?></td>
								  	<td align="center"><?php echo $data['belanja_barang_jasa']; ?></td>	
								  	<td align="center"><?php echo $data['belanja_modal'];?></td>
								  	<td align="center"><?php echo $data['jml_kembali_bendahara'];?></td>
								  	<td align="center"><?php echo $data['saldo_kas']; ?></td>	  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 32): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['tanggal']; ?></td>
								  	<td align="center"><?php echo $data['kegiatan'];?></td>
								  	<td align="center"><?php echo $data['uraian'];?></td>
								  	<td align="center"><?php echo $data['penerimaan']; ?></td>			
								  	<td align="center"><?php echo $data['pengeluaran'];?></td>
								  	<td align="center"><?php echo $data['nomor_bukti'];?></td>
								  	<td align="center"><?php echo $data['jml_pengeluaran_kumulatif']; ?></td>	
								  	<td align="center"><?php echo $data['saldo_kas']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 33): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['bulan']; ?></td>
								  	<td align="center"><?php echo $data['bank_cabang'];?></td>
								  	<td align="center"><?php echo $data['rekening_no'];?></td>
								  	<td align="center"><?php echo $data['tanggal']; ?></td>			
								  	<td align="center"><?php echo $data['uraian'];?></td>
								  	<td align="center"><?php echo $data['pemasukan_setoran'];?></td>
								  	<td align="center"><?php echo $data['pemasukan_bunga_bank']; ?></td>
								  	<td align="center"><?php echo $data['pengeluaran_penarikan'];?></td>
								  	<td align="center"><?php echo $data['pengeluaran_pajak'];?></td>
								  	<td align="center"><?php echo $data['pengeluaran_biaya_administrasi']; ?></td>
								  	<td align="center"><?php echo $data['saldo']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 34): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['kegiatan']; ?></td>
								  	<td align="center"><?php echo $data['lokasi'];?></td>
								  	<td align="center"><?php echo $data['sumber_daya_pemerintah']; ?></td>
								  	<td align="center"><?php echo $data['sumber_daya_provinsi'];?></td>
								  	<td align="center"><?php echo $data['sumber_daya_kota'];?></td>
								  	<td align="center"><?php echo $data['sumber_daya_swadaya']; ?></td>	
								  	<td align="center"><?php echo $data['jumlah'];?></td>
								  	<td align="center"><?php echo $data['pelaksanaan'];?></td>
								  	<td align="center"><?php echo $data['manfaat']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 35): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['kegiatan']; ?></td>
								  	<td align="center"><?php echo $data['volume'];?></td>
								  	<td align="center"><?php echo $data['sumber_daya_pemerintah'];?></td>
								  	<td align="center"><?php echo $data['sumber_daya_provinsi']; ?></td>
								  	<td align="center"><?php echo $data['sumber_daya_kota'];?></td>
								  	<td align="center"><?php echo $data['sumber_daya_swadaya'];?></td>
								  	<td align="center"><?php echo $data['jumlah']; ?></td>	
								  	<td align="center"><?php echo $data['waktu'];?></td>
								  	<td align="center"><?php echo $data['type'];?></td>
								  	<td align="center"><?php echo $data['pelaksanaan']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 36): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['tanggal_penerimaan']; ?></td>
								  	<td align="center"><?php echo $data['nomor'];?></td>
								  	<td align="center"><?php echo $data['tanggal_surat'];?></td>
								  	<td align="center"><?php echo $data['tujuan']; ?></td>			
								  	<td align="center"><?php echo $data['isi_surat'];?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if($kat == 37): ?> <!-- kondisi jika kategori nya dokumen keputusan kepala desa !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo $data['tanggal_penerimaan'];?></td>
								  	<td align="center"><?php echo $data['nomor']; ?></td>			
								  	<td align="center"><?php echo $data['tanggal_surat'];?></td>
								  	<td align="center"><?php echo $data['pengirim'];?></td>
								  	<td align="center"><?php echo $data['isi_surat']; ?></td>	
								  	<td align="center"><?php echo $data['keterangan']; ?></td>		  	
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if ($kat == 1) : ?>
									<td align="center"><?php echo $data['aktif']?></td>
									<td align="center"><?php echo tgl_indo2($data['tgl_upload'])?></td>
								  <?php else: ?>
								  	<td align="center"><?php echo tgl_indo2($data['created_date'])?></td>
								  <?php endif; ?>
								  
								
				
								</tr>
					    <?php }?>
						</tbody>
			    </table>
		    </div>
			</form>
		  <div class="ui-layout-south panel bottom">
		    <div class="left">
					<div class="table-info">
		        <form id="paging" action="<?php echo site_url($this->controller.'/index/'.$kat)?>" method="post">
						  <label>Tampilkan</label>
		          <select name="per_page" onchange="$('#paging').submit()" >
		            <option value="20" <?php  selected($per_page,20); ?> >20</option>
		            <option value="50" <?php  selected($per_page,50); ?> >50</option>
		            <option value="100" <?php  selected($per_page,100); ?> >100</option>
		          </select>
		          <label>Dari</label>
		          <label><strong><?php echo $paging->num_rows?></strong></label>
		          <label>Total Data</label>
		        </form>
		      </div>
		    </div>
		    <div class="right">
		      <div class="uibutton-group">
		        <?php  if($paging->start_link): ?>
							<a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->start_link/$o")?>" class="uibutton"  ><span class="fa fa-fast-backward"></span> Awal</a>
						<?php  endif; ?>
						<?php  if($paging->prev): ?>
							<a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->prev/$o")?>" class="uibutton"  ><span class="fa fa-step-backward"></span> Prev</a>
						<?php  endif; ?>
		      </div>
		      <div class="uibutton-group">

						<?php  for($i=$paging->start_link;$i<=$paging->end_link;$i++): ?>
							<a href="<?php echo site_url("{$this->controller}/index/$kat/$i/$o")?>" <?php  jecho($p,$i,"class='uibutton special'")?> class="uibutton"><?php echo $i?></a>
						<?php  endfor; ?>
		      </div>
		      <div class="uibutton-group">
					<?php  if($paging->next): ?>
						<a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->next/$o")?>" class="uibutton">Next <span class="fa fa-step-forward"></span></a>
					<?php  endif; ?>
					<?php  if($paging->end_link): ?>
		        <a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->end_link/$o")?>" class="uibutton">Akhir <span class="fa fa-fast-forward"></span></a>
					<?php  endif; ?>
		    </div>
		  </div>
		</div>
	</td>
</tr>
</table>
</div>


<script type="text/javascript">
	function approveEkspedisi(id) // function untuk approve ekspedisi
	{
	    url = "<?php echo site_url('dokumen/approve/')?>";
	    //Ajax Load data from ajax
	    $.ajax({
        url : url,
        type: "POST",
        data: {'id' : id},
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                location.reload();

            }
            else
            {
                alert('failed update');
            }


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
          

        }
    });
	}


	function rejectEkspedisi(id) // function untuk approve ekspedisi
	{
	    url = "<?php echo site_url('dokumen/reject/')?>";
	    //Ajax Load data from ajax
	    $.ajax({
        url : url,
        type: "POST",
        data: {'id' : id},
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                location.reload();

            }
            else
            {
                alert('failed update');
            }


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
          

        }
    });
	}

</script>
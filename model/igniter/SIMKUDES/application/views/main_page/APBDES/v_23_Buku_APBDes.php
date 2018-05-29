<div class="span9">
	<div class="content">
		<div class="module">
			<div class="module-head">
				PENGELOLAAN KEUANGAN DESA
			</div> <!-- #module-head -->
			<div class="module-body">
				<?php 
					if (empty($_SESSION['namaDesa'])) {
						?>
							<script type="text/javascript">
								alert('Silahkan pilih tahun APBDes');
								window.location='<?php echo base_url() ?>beranda/c_26_beranda';
							</script>
						<?php
					}
				?>
					<section class="demo-3">
						<div class="grid">
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/APBDesTahunan">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>A</h3>
									<span>Buku APBDes per tahun</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuBankDesa">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>B</h3>
									<span>Buku Bank Desa</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
					</section>
					<section class="demo-3">
						<div class="grid">
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/RAB">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>R</h3>
									<span>Rencana Anggaran Belanja</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasUmum">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>K</h3>
									<span>Buku Kas Umum</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
					</section>
					<section class="demo-3">
						<div class="grid">
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuTangungJawab">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>T</h3>
									<span>Buku Pernyataan Tanggung Jawab</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuSPP">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>S</h3>
									<span>Buku SPP</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
					</section>
					<section class="demo-3">
						<div class="grid">
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasBantuKegiatan">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>P</h3>
									<span>Buku Kas Pembantu Kegiatan</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
							<a href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasPajak">
								<div class="box">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
										<line class="top" x1="0" y1="0" x2="900" y2="0"/>
										<line class="left" x1="0" y1="460" x2="0" y2="-920"/>
										<line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
										<line class="right" x1="300" y1="0" x2="300" y2="1380"/>
									</svg>
									<h3>J</h3>
									<span>Buku Kas Pembantu Pajak</span>
									<span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
								</div>
							</a>
					</section>
				<!-- <a href="<?php echo base_url() ?>">
					BUKU LAPORAN APBDES TAHUN <?php echo $_SESSION['tahunApbdes']	?>
				</a> -->
			</div> <!-- #module-body -->
		</div> <!-- #module -->
	</div> <!-- #content -->
</div> <!-- #span9 -->
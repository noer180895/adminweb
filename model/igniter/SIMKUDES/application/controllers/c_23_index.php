<?php
	/**
	* 
	*/
	class C_23_index extends Ci_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_log');
			$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
			$this->load->model('RAPBDes/m_26_RAPBDes');
			$this->load->model('rekening/m_23_rekening');
		}

		public function index()
		{

			if (empty($_SESSION['tahun'])) {
				header('location:'.base_url().'beranda/c_26_beranda');
			}
			$tahun = $_SESSION['tahun'];
			$data = array(
				'view' => 'main_page/v_23_index.php',
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilrapbdes' => $this->m_26_RAPBDes->ambildataberdasarkan($tahun),
				'ambilRekening' => $this->m_26_RAPBDes->ambilDataRekeningBerdasarkanTahun($tahun),
				);
			
			$this->load->view('v_23_index',$data);
		}

		public function submitRAPBDes()
		{
			$pendapatan = $this->m_23_rekening->sumPendapatan();
			$belanja 	= $this->m_23_rekening->sumBelanja();
			$pembiayaan	= $this->m_23_rekening->sumPembiayaan();

			$sumPendapatan 	= $pendapatan[0]->anggaran;
			$sumBelanja	 	= $belanja[0]->anggaran;
			$sumPembiayaan 	= $pembiayaan[0]->anggaran;
			
			$hitung = $sumPendapatan - $sumBelanja;
			$hasil 	= $hitung + $sumPembiayaan;
			$hasilAkhir = $sumPendapatan - ( $sumBelanja + $sumPembiayaan );

			if ($hasilAkhir != 0) {
				?>	
					Rencana Anggaran tidak dapat dipenuhi karena belum memenuhi Persyaratan <br>
					Ada pula persyaratan untuk mengirip rencana anggaran adalah :<br>
					<ol>
						<li>Hasil anggaran harus bernilai 0 (nol)</li>
					</ol>
					<br>
					Hasil anggaran merupakan perhitungan dari : <br>
					Pendapatan dikurangi Belanja ditambah dengan Pembiayaan harus berhasil 0 (nol) <br>
					*Anggaran anda : <br>
					Pendapatan = <?php echo $sumPendapatan ?> <br>
					Belanja = <?php echo $sumBelanja ?> <br>
					Pembiayaan = <?php echo $sumPembiayaan ?> <br>

					<?php echo $sumPendapatan."-".$sumBelanja."+".$sumPembiayaan."=".$hasilAkhir ?>
					<br>
					<a href="<?php echo base_url()?>" class="btn btn-default"> Kembali </a>

 				<?php
			}else{
					$this->load->view('Main_Page/APBDES/include/v_23_pertimbanganAPBDes');
			}
		}

		public function hasilSubmitRAPBDes()
		{
			// updaate field grant pada tabel RAPBDes menjadi 1
				// memanggil fungsi model updateGrant pada model m_26_RAPBDes 

					$tahun 			= $_SESSION['tahun'];
					$dataUpdate 	= array(
						'grant' => 1 , 
						);
					$this->m_26_RAPBDes->updateGrant($dataUpdate, $tahun);
			
				// #memanggil fungsi updateGrant
			// #update field grant RAPBDes

			// membuat session baru untuk tahun APBDes
			$sessionData = array(
				'tahunApbdes' => $tahun , 
				);
			$this->session->set_userdata($sessionData);
			// link menuju generator
				?>
					<script type="text/javascript">
						alert('Menggenerate APBDes');
						window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBdes";
					</script>
				<?php
			
		}

		public function tampilAnggaran()
		{
			$nomor_rekening = $_GET['id'];
			$angkaAnggaran = $this->uri->segment(3);
			$angkaPertama = substr($nomor_rekening, 0, 1);
			$angkaKedua = substr($nomor_rekening, 0, 3);
			$angkaKeduaSeDigit = substr($nomor_rekening, 2, 1);
			$dataUbah = array(
				'anggaran' => $angkaAnggaran , 
				);
			$dataWhere = array(
				'nomor_rekening' => $nomor_rekening , 
				);
			// update nilai anggaran pada tabel rekening_tahunan
			$this->m_23_rekening->updateAnggaran($dataUbah, $dataWhere);
			
			$jumlahAnggaranAngkaPertama = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekening($angkaPertama);
			$jumlahAnggaranAngkaKedua   = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekening($angkaKedua);
			
			// var_dump($jumlahAnggaranAngkaKedua[0]->anggaran);
			// exit();

			if ($angkaKeduaSeDigit == 0) {
				?>
					
	                    <p id="jumlah">
		                    <?php
		                        echo $jumlahAnggaranAngkaPertama[0]->anggaran;
		                    ?>
		                </p>
	                
	            <?php
			}else{
				?>
					<p id="jumlah">
	                    <?php
	                        echo $jumlahAnggaranAngkaKedua[0]->anggaran;
	                    ?>
					</p>
	                
	            <?php
			}
		}

		public function tampilAnggaranPoin2()
		{
			// var_dump('Bithca');
			// exit();
			$nomor_rekening = $_GET['id'];
			$angkaAnggaran = $this->uri->segment(3);

			$angkaPertama = substr($nomor_rekening, 0, 1);
			$angkaKedua = substr($nomor_rekening, 0, 3);
			$angkaKeduaSeDigit = substr($nomor_rekening, 2, 1);

			// update anggaran di tabel item rekenning
			$dataUbahItemRekening = array(
				'anggaran' => $angkaAnggaran , 
				);
			$dataWhere = array(
				'nomor_rekening' => $nomor_rekening , 
				'tahun' => $_SESSION['tahun'],
				);
			$dataWhereItem = array(
				'id_item' => $this->uri->segment(4) , 
				);
			$this->m_23_rekening->ubahItemRekening($dataUbahItemRekening, $dataWhereItem);
			

			// update nilai anggaran pada tabel rekening_tahunan
			$jumlahAnggarannya = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningPoin3($nomor_rekening);
			$dataUbah = array(
				'anggaran' => $jumlahAnggarannya[0]->anggaran , 
				);
			$this->m_23_rekening->updateAnggaran($dataUbah, $dataWhere);

			
		}

		public function cekRekening()
		{
			$norek = $_REQUEST['noRek'];
			$tahun = $_SESSION['tahun'];
			$idRekening ="";
				// var_dump($r);
				// exit();
			$k = 1;
			// for ($r=1; $r >= 1 ; $r--) { 
			// 	echo $r;
				for ($c=1; $c < 10 ; $c++) { 
					$idRekening = $norek.".".$c;

					$k = $this->m_26_RAPBDes->cekDataRekening($idRekening, $tahun);
					// var_dump($idRekening);
					// exit();
					if ($k == 0) {
						// var_dump('masukmen');
						// exit();
						?>
						<?php
		                    $dataWhere = array('nomor_rekening' => $norek , );
		                    $lihat = $this->m_23_rekening->cariRekeningTahunan($dataWhere);

		                  ?>
						<div class="control-group" id="wilayahCekRekening">
			                  <label class="control-label" for="basicinput">Nomor Rekening</label>
			                  <div class="controls">
			                      <input type="hidden" name="txtKorek" id="ceuceu" value="<?php echo $idRekening ?>" class="span4" readonly>
			                      			<input type="text" name="txtKode1" id="k1" value="<?php echo $lihat[0]->k1 ?>" class="span4" readonly>
			                      <?php
			                      	if ($lihat[0]->k1 == 0) {
			                      		exit();		
			                      	}elseif ($lihat[0]->k2 == 0) {
			                      		?>
			                      			<input type="text" name="txtKode2" id="k2" value="<?php echo $c ?>" class="span4" readonly>
			                      		<?php
			                      		exit();		
			                      	}elseif ($lihat[0]->k3 == 0) {
			                      		?>
			                      			<input type="text" name="txtKode2" id="k2" value="<?php echo $lihat[0]->k2 ?>" class="span4" readonly>
			                     			<input type="text" name="txtKode3" id="k3" value="<?php echo $c ?>" class="span4" readonly>
			                      		<?php
			                      		exit();		
			                      	}elseif ($lihat[0]->k4 == 0) {
			                      		?>
			                      			<input type="text" name="txtKode2" id="k2" value="<?php echo $lihat[0]->k2 ?>" class="span4" readonly>
			                     			<input type="text" name="txtKode3" id="k3" value="<?php echo $lihat[0]->k3 ?>" class="span4" readonly>
			                      			<input type="text" name="txtKode4" id="k4" value="<?php echo $c ?>" class="span4" readonly>
			                      		<?php
			                      		exit();		
			                      	}else{
			                      		?>
			                      			<input type="text" name="txtKorekVisibel" id="txtKorekVisibel" value="<?php echo $norek ?>" class="span4" readonly>
			                      		<?php
			                      	}
			                      ?>

			                  </div>
			              </div>
						<?php
						exit();
					}else{

					}
				}
			// }
		}

		public function tambahItemRekening()
		{

			$korek = $this->uri->segment(7);
			$uraian = $_GET['uraian'];
				$kode1 = $this->uri->segment(3);
				$kode2 = $this->uri->segment(4);
				$kode3 = $this->uri->segment(5);
				$kode4 = $this->uri->segment(6);
			$tahun = $_SESSION['tahun'];
			$dataSimpan = array(
				'nomor_rekening' => $korek ,
				'k1' => $kode1 ,
				'k2' => $kode2 ,
				'k3' => $kode3 ,
				'k4' => $kode4 ,
				'tahun' => $tahun, 
				'uraian' => $uraian ,
				);
			// var_dump($dataSimpan);
			// exit();
			$aksi 	= 'Menambah item rekening dengan uraian '.$uraian;
			$this->m_log->log($aksi);
			// var_dump($dataSimpan);
			// exit();
			$simpan = $this->m_23_rekening->tambahRekeningTahunan($dataSimpan);
		}

		public function tambahItemRekeningTabel()
		{

			$korek = $this->uri->segment(3);
			$uraian = $_GET['uraian'];

			$dataSimpan = array(
				'nomor_rekening' => $korek ,
				'uraian' => $uraian ,
				'tahun'=> $_SESSION['tahun'], 
				);
			$aksi 	= 'Menambah dan menyimpan item rekening dengan uraian '.$uraian;
			$this->m_log->log($aksi);
			$simpan = $this->m_23_rekening->tambahItemRekening($dataSimpan);
		}

		public function hapusItemRekeningTabel()
		{
			$nomor_rekening = $_GET['id'];
			$aksi 	= 'Menghapus item rekening dengan Nomor Rekening '.$nomor_rekening;
			$this->m_log->log($aksi);
			$this->m_23_rekening->hapusItemRekening($nomor_rekening);
			?>
				<script type="text/javascript">
					alert('Data berhasil di hapus');
					window.location="<?php echo base_url() ?>";
				</script>
			<?php
		}

		public function cariRekening()
		{
			$nomor_rekening = $_GET['noRek'];
			$dataWhere = array(
				'id_item' => $nomor_rekening , 
				);
			$cari = $this->m_23_rekening->cariItemRekening($dataWhere);
			?>

				<div class="control-group" id="wilayahCekRekening">
		            <label class="control-label" for="basicinput">Nomor Rekening</label>
		            <div class="controls">
		                <input type="text" name="txtNorek" id="kreskiani" value="<?php echo $cari[0]->nomor_rekening ?>" class="span4" readonly>
		              </div>
	  	            </div>

		          <div class="control-group" id="wilayahCariUraianRekening">
		            <label class="control-label" for="basicinput">Uraian</label>
		            <div class="controls">
		                <input type="text" name="txtUraian" id="txtUraian" readonly value="<?php echo $cari[0]->uraian ?>" class="span4" >
		            </div>
		        </div>
		        <div class="control-group" >
		              <label class="control-label" for="basicinput">Uraian Baru</label>
		              <div class="controls">
		                  <input type="text" name="txtUraian" id="txtUraianBaru" value="" class="span4" >
		              </div>
		          </div>
		    <?php
		}

		public function ubahItemRekening()
		{
			
			$nomor_rekening = $this->uri->segment(3);
			$uraian = $_GET['uraian'];

			$dataWhere = array(
				'id_item' => $nomor_rekening , 
				);
			$dataUbah = array(
				'uraian' => $uraian , 
				);
			$aksi 	= 'Mengubah item rekening dengan nomor rekening '.$nomor_rekening.' dengan uraian '.$uraian;
			$this->m_log->log($aksi);
			$ubah = $this->m_23_rekening->ubahItemRekening($dataUbah, $dataWhere);
			var_dump($aksi);
			exit();
		}
	}
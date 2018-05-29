<?php
	/**
	* 
	*/
	class C_23_rekening extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('rekening/m_23_rekening');
			$this->load->model('m_log');
			$c = 0;
		}

		/*
			====================
				FUNGSI VIEW 
			====================
		*/
		public function index()
		{
			$tampil = $this->m_23_rekening->lihat();
			$data = array(
				'view' => 'main_page/rekening/v_23_tampil_rekening', 
				'ambil' => $tampil, 
				);
			$this->load->view('v_23_index', $data);
		}
		public function viewTambah()
		{
			$data = array(
				'view' => 'main_page/rekening/v_23_rekening', 
				);
			$this->load->view('v_23_index', $data);
		}
		public function viewLihat()
		{
			$dataWhere = array(
				'nomor_rekening' => $_GET['id'] , 
				);
			$cek = $this->m_23_rekening->cariRekening($dataWhere);
			$data = array(
				'view' => 'main_page/rekening/V_23_lihat_rekening', 
				'tampil'=> $cek[0] ,
				);
			$this->load->view('v_23_index', $data);
		}
		public function viewUbah()
		{
			$dataWhere = array(
				'nomor_rekening' => $_GET['id'] , 
				);
			$cek = $this->m_23_rekening->cariRekening($dataWhere);
			$data = array(
				'view' => 'main_page/rekening/V_23_ubah_rekening', 
				'tampil'=> $cek[0] ,
				);
			$this->load->view('v_23_index', $data);
		}

		/*
			====================
			#	FUNGSI VIEW    #
			====================
		*/


		public function hapus()
		{
			$noRek = $_GET['id'];
			$hasilHapus = $this->m_23_rekening->hapus($noRek);
			if ($hasilHapus == 1) {
				$aksi 	= 'Menghapus data rekening dengan nomor Rekening '.$noRek;
				$this->m_log->log($aksi);
				echo 
					"
						<script>
							alert('Penghapusan data berhasil');
							window.location='".base_url()."rekening/c_23_rekening';
						</script>
					";
			}else{
				echo 
					"
						<script>
							alert('Data gagal di hapus');
							window.location='".base_url()."rekening/c_23_rekening';
						</script>
					";
			}

		}

		public function ubah()
		{
			$id = $_POST['txtNomorRekening'];
			$rek1 = $_POST['txtKode1'];
			$rek2 = $_POST['txtKode2'];
			$rek3 = $_POST['txtKode3'];
			$rek4 = $_POST['txtKode4'];
			$rek5 = $_POST['txtKode5'];
			$rek6 = $_POST['txtKode6'];
			$rek7 = $_POST['txtKode7'];
			$rek8 = $_POST['txtKode8'];
			$rek9 = $_POST['txtKode9'];
			$rek10 = $_POST['txtKode10'];
			$uraian = $_POST['txtUraian'];
			$noRek = $rek1;

			if ($rek1 >=10 || $rek2 >=10 || $rek3 >=10 || $rek4 >=10 || $rek5 >=10 || $rek6 >=10 || $rek7 >=10 || $rek8 >=10 || $rek9 >=10 || $rek10 >=10 ) {
				?>
				<script type="text/javascript">
					alert('Nomor Rekening tidak boleh lebih dari 9');
					window.location="<?php base_url() ?>rekening/C_23_rekening/viewUbah?id=<?php echo $id ?>";
				</script>
				<?php
			}else{
				$dataSimpan = array(
					'nomor_rekening' => $noRek ,
					'`k1`' => $rek1,
					'uraian' => $uraian, 
					);
				if ($rek2 > 0) {
					$noRek 	= $rek1.".".$rek2;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'uraian' => $uraian,
						);
				}
				if ($rek3 > 0) {
					$noRek 	= $rek1.".".$rek2.".".$rek3;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'uraian' => $uraian,
						);
				}
				if ($rek4 > 0) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'uraian' => $uraian,
						);
				}
				if ($rek5 > 0) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'`k5`' => $rek5,
						'uraian' => $uraian,
						);
				}
				if ($rek6 > 0 ) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'`k5`' => $rek5,
						'`k6`' => $rek6,
						'uraian' => $uraian,
						);
				}
				if ($rek7 > 0 ) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'`k5`' => $rek5,
						'`k6`' => $rek6,
						'`k7`' => $rek7,
						'uraian' => $uraian,
						);
				}
				if ($rek8 > 0 ) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7.".".$rek8;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'`k5`' => $rek5,
						'`k6`' => $rek6,
						'`k7`' => $rek7,
						'`k8`' => $rek8,
						'uraian' => $uraian,
						);
				}
				if ($rek9 > 0 ) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7.".".$rek8.".".$rek9;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'`k5`' => $rek5,
						'`k6`' => $rek6,
						'`k7`' => $rek7,
						'`k8`' => $rek8,
						'`k9`' => $rek9, 
						'uraian' => $uraian,
						);
				}
				if ($rek10 > 0 ) {
					$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7.".".$rek8.".".$rek9.".".$rek10;
					$dataSimpan = array(
						'nomor_rekening' => $noRek,
						'`k1`' => $rek1,
						'`k2`' => $rek2,
						'`k3`' => $rek3,
						'`k4`' => $rek4,
						'`k5`' => $rek5,
						'`k6`' => $rek6,
						'`k7`' => $rek7,
						'`k8`' => $rek8,
						'`k9`' => $rek9, 
						'`k10`' => $rek10,
						'uraian' => $uraian,
						);
				}
				$dataWhere = array(
					'nomor_rekening' => $noRek , 
					);
				$cek = $this->m_23_rekening->cekRekeningUbah($dataWhere, $id);
				if ($cek == 1) {
					?>
						<script type="text/javascript">
							alert('Nomor Rekening <?php echo $noRek ?> sudah ada, silahkan gunakan Nomor Rekening lain');
							window.location="<?php echo base_url() ?>rekening/C_23_rekening/viewUbah?id=<?php echo $id ?>"
						</script>	
					<?php
				}else{
					$dataWhereUbah = array(
						'nomor_rekening' => $id , 
						);
					$this->m_23_rekening->ubah($dataSimpan, $dataWhereUbah);
					$aksi 	= 'Mengubah data rekening dengan nomor Rekening '.$noRek;
					$this->m_log->log($aksi);
					?>
						<script type="text/javascript">
							alert('Data berhasil di ubah');
							window.location="<?php echo base_url() ?>rekening/C_23_rekening"
						</script>
					<?php
				}// tutup else $cek == 1
			}// tutup else yang panjang
		}// tutup fungsi ubah
		public function simpan()
		{
			$rek1 	= $_POST['noRek1'];
			$uraian	= $_POST['txtUraian'];
			$noRek  = $rek1;

			if (isset($_POST['noRek2'])) {
				$rek2 	= $_POST['noRek2'];
			}
			if (isset($_POST['noRek3'])) {
				$rek3 	= $_POST['noRek3'];
			}
			if (isset($_POST['noRek4'])) {
				$rek4 	= $_POST['noRek4'];
			}
			if (isset($_POST['noRek5'])) {
				$rek5 	= $_POST['noRek5'];
			}
			if (isset($_POST['noRek6'])) {
				$rek6 	= $_POST['noRek6'];
			}
			if (isset($_POST['noRek7'])) {
				$rek7 	= $_POST['noRek7'];
			}
			if (isset($_POST['noRek8'])) {
				$rek8 	= $_POST['noRek8'];
			}
			if (isset($_POST['noRek9'])) {
				$rek9	= $_POST['noRek9'];
			}
			if (isset($_POST['noRek10'])) {
				$rek10 	= $_POST['noRek10'];
			}

			$dataSimpan = array(
				'nomor_rekening' => $noRek,
				'`k1`' => $rek1,
				'uraian' => $uraian,
				);
			if (isset($_POST['noRek2']) && $_POST['noRek2'] > 0) {
				$noRek 	= $rek1.".".$rek2;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek3']) && $_POST['noRek3'] > 0) {
				$noRek 	= $rek1.".".$rek2.".".$rek3;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek4']) && $_POST['noRek4'] > 0) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek5']) && $_POST['noRek5'] > 0) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'`k5`' => $rek5,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek6']) && $_POST['noRek6'] > 0 ) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'`k5`' => $rek5,
					'`k6`' => $rek6,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek7']) && $_POST['noRek7'] > 0 ) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'`k5`' => $rek5,
					'`k6`' => $rek6,
					'`k7`' => $rek7,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek8']) && $_POST['noRek8'] > 0 ) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7.".".$rek8;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'`k5`' => $rek5,
					'`k6`' => $rek6,
					'`k7`' => $rek7,
					'`k8`' => $rek8,
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek9']) && $_POST['noRek9'] > 0 ) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7.".".$rek8.".".$rek9;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'`k5`' => $rek5,
					'`k6`' => $rek6,
					'`k7`' => $rek7,
					'`k8`' => $rek8,
					'`k9`' => $rek9, 
					'uraian' => $uraian,
					);
			}
			if (isset($_POST['noRek10']) && $_POST['noRek10'] > 0 ) {
				$noRek 	= $rek1.".".$rek2.".".$rek3.".".$rek4.".".$rek5.".".$rek6.".".$rek7.".".$rek8.".".$rek9.".".$rek10;
				$dataSimpan = array(
					'nomor_rekening' => $noRek,
					'`k1`' => $rek1,
					'`k2`' => $rek2,
					'`k3`' => $rek3,
					'`k4`' => $rek4,
					'`k5`' => $rek5,
					'`k6`' => $rek6,
					'`k7`' => $rek7,
					'`k8`' => $rek8,
					'`k9`' => $rek9, 
					'`k10`' => $rek10,
					'uraian' => $uraian,
					);
			}
			$dataWhere = array(
				'nomor_rekening' => $noRek , 
				);
			$cek = $this->m_23_rekening->cekRekening($dataWhere);
			if ($cek == 1) {
				?>
					<script type="text/javascript">
						alert('Nomor Rekening <?php echo $noRek ?> sudah ada, silahkan gunakan Nomor Rekening lain');
						window.location="<?php echo base_url() ?>rekening/C_23_rekening/viewTambah"
					</script>	
				<?php
			}else{
				$this->m_23_rekening->tambah($dataSimpan);
				$aksi 	= 'Menambah data rekening dengan nomor Rekening '.$noRek;
				$this->m_log->log($aksi);
				?>
					<script type="text/javascript">
						alert('Data berhasil di tambahkan');
						window.location="<?php echo base_url() ?>rekening/C_23_rekening"
					</script>
				<?php
			}// tutup else $cek == 1
		}// tutup fungsi simpan
		public function tambahNorek()
		{
				if (empty($c)) {
					$c = 1;
					$aji = $_REQUEST['ceu'];
		       		$c = $c+$aji;
			       		for ($k=2; $k < $c ; $k++) { 
			       		 	?>
			       		 	<div class="control-group">
			                    <label class="control-label" for="basicinput">Nomor rekening <?php echo $k ?></label>
			                    <div class="controls">
			                        <select name="noRek<?php echo $k ?>">
			                        	<?php
			                        		for ($r=0; $r < 10 ; $r++) { 
			                        			?>
			                        			<option value="<?php echo $r ?>" ><?php echo $r ?></option>
			                        			<?php
			                        		}
			                        	?>
			                        </select>
			                    </div>
			                </div>
		       		 	<?php
		       		 }// tutup for $k
		       	}//tutup if empty c
		}// tutup tambahNorek
	}
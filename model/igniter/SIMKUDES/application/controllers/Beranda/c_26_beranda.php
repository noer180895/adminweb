<?php

/**
* 
*/
class C_26_beranda extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('RAPBDes/m_26_RAPBDes');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/beranda/v_26_beranda.php',
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambiltahun' => $this->m_26_RAPBDes->ambildataGrant(),
			);
		$this->session->unset_userdata('tahun');
		$this->load->view('v_26_beranda', $data);
	}

	public function masukTahun()
	{
		// kondisi juka post tahun anggaran kosong (tidak memilih tahun)
		if (isset($_POST['tahunanggaran'])) {
			if ($_POST['tahunanggaran'] == "null") {
				?>
					<script type="text/javascript">
						alert('Pilih tahun anggaran terlebih dahulu');
						window.location="<?php echo base_url() ?>";
					</script>
				<?php
			}else{
				$tahun = $_POST['tahunanggaran'];
				$hasil = $this->m_26_RAPBDes->cekBerdasarkanTahun($tahun);
				$tahun = $hasil[0]->tahun;
				$desa  = $this->m_26_Perangkat_Desa->ambildata();
				$namaDesa 		= $desa[0]->nama_desa;
				$namaKecamatan 	= $desa[0]->nama_kecamatan;
				$namaKabupaten 	= $desa[0]->nama_kabupaten;
				$logoDesa		= $desa[0]->logo_desa;
				$idDesa 		= $desa[0]->id;
				$namaKepalaDesa = $desa[0]->nama_kepala_desa;
				$dataSession = array(
					'idDesa'=> $idDesa,
					'namaKepalaDesa' => $namaKepalaDesa ,
					'namaDesa' => $namaDesa , 
					'namaKecamatan' => $namaKecamatan , 
					'namaKabupaten' => $namaKabupaten , 
					'logoDesa' => $logoDesa , 
					'tahunApbdes' => $tahun , 
					);
				$this->session->set_userdata($dataSession);
				?>
				<script type="text/javascript">
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes";
				</script>
				<?php
			}// tutup else $_POST['tahunanggaran'] == "null"
		}// tutup if isset($_POST['tahunanggaran'] == "null")
	}

	public function masukTahunGETPerubahan()
	{
		if (isset($_GET['tahun'])) {
			$tahun = $_GET['tahun'];
			$cek = array(
				'tahun' => $tahun , 
				'grant' => 1,
				);
			$cek = $this->m_26_RAPBDes->cekGrant($cek);
			if ($cek == 1) {
				$hasil = $this->m_26_RAPBDes->cekBerdasarkanTahun($tahun);
				$tahun = $hasil[0]->tahun;
				$this->session->set_userdata('tahun', $tahun);
				?>
				<script type="text/javascript">
					window.location="<?php echo base_url() ?>";
				</script>
				<?php
				exit();
			}else{
				?>
				<script type="text/javascript">
					alert('Pembuatan perubahan tidak memenuhi syarat ( Belum mendapat izin )');
					window.location="<?php echo base_url() ?>APBDes/c_26_APBDes/apbdesPerubahan";
				</script>
				<?php
			}
		}else{
			exit();
		}// tutup else $_GET['tahun']
	}

	public function masukTahunGET()
	{
		if (isset($_GET['tahun'])) {
			$tahun = $_GET['tahun'];
				$hasil = $this->m_26_RAPBDes->cekBerdasarkanTahun($tahun);
				$tahun = $hasil[0]->tahun;
				$this->session->set_userdata('tahun', $tahun);
				?>
				<script type="text/javascript">
					window.location="<?php echo base_url() ?>";
				</script>
				<?php
				exit();
		}else{
			exit();
		}// tutup else $_GET['tahun']
	}

}

?>
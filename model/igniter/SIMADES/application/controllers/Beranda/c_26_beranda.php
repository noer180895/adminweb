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
			'ambiltahun' => $this->m_26_RAPBDes->ambildata(),
			);
		$this->load->view('v_26_beranda', $data);
	}

	public function masukTahun()
	{
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
			$id = $hasil[0]->id;
			?>
			<script type="text/javascript">
				window.location="<?php echo base_url() ?>?id=<?php echo $id ?>";
			</script>
			<?php
		}// tutup else $_POST['tahunanggaran'] == "null"
	}

}

?>
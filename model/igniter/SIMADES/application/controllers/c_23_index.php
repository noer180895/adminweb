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
			$this->load->model('Data_Penduduk/m_26_data_penduduk');
		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/v_23_index.php',
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
				);
			
			$this->load->view('v_23_index',$data);
		}

	public function data()
	{

		if(isset($_POST['cari'])){
		$nama = $_POST['nama'];
		$data = array(
			'nama' => $nama,
			'view' => 'main_page/v_23_index.php', 
			'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->caridatapendudukberdasarkan($nama),
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index',$data);
		}else{
		$data = array(
			'view' => 'main_page/v_23_index.php', 
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildatapenduduk(),
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index',$data);
		}
	}
	public function datacari()
	{
		if(isset($_GET['nama'])){
		if ($_GET['nama']!="") {
				$nama = $_GET['nama'];
				$data = array(
					'view' => 'main_page/v_23_index.php', 
					'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->caridatapendudukberdasarkan($nama),
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
					);
				$this->load->view('main_page/v_23_index',$data);
			}else{

		$data = array(
			'view' => 'main_page/v_23_index', 
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildatapenduduk(),
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('main_page/v_23_index',$data);
			}	
		}else{
		$data = array(
			'view' => 'main_page/v_23_index', 
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildatapenduduk(),
				'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('main_page/v_23_index',$data);
		}
	}

	

}
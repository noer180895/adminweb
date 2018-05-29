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
			$this->load->model('promodes/m_23_promodes');
			
		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/v_23_index.php',
				'desa' => $this->m_26_Perangkat_Desa->ambildata(),
				);
			
			$this->load->view('v_23_index',$data);
		}

		public function potensi_sumber_daya_alam($judul)
		{
			$judul = rawurldecode($judul);
			if ($judul == "Potensi Sumber Daya Alam" ) {
				$data = array(
					'judul' => $judul,
					'desa' => $this->m_26_Perangkat_Desa->ambildata(),
					);
				
				$this->load->view('main_page/home_page/v_23_potensi_sumber_daya_alam.php',$data);
			}elseif ($judul == "Geografi Desa" ) {
				$table = 'promodes_geografi_desa';
				$dades = $this->m_23_promodes->template_select($table);
				$data = array(
					'judul' => $judul,
					'desa' => $this->m_26_Perangkat_Desa->ambildata(),
					'gedes' => $dades[0],
					);
				
				$this->load->view('main_page/home_page/v_23_geografi_desa.php',$data);
			}
		}

		public function potensi_sumber_daya_alam_select($tahun, $potensi)
		{
			$data = array(
				'desa' => $this->m_26_Perangkat_Desa->ambildata(),
				);
			
			$this->load->view('main_page/home_page/include/v_23_potensi_sumber_daya_alam.php',$data);
		}
		
		public function fungsiPrint($data)
		{
			if ($data == "SDA") {
				$data = array(
					'desa' => $this->m_26_Perangkat_Desa->ambildata(),
					);
				
				$this->load->view('main_page/home_page/print/v_23_print_potensi_SDA.php',$data);		
			}elseif ($data == "geografi_desa") {
				$table = 'promodes_geografi_desa';
				$dades = $this->m_23_promodes->template_select($table);
				$data = array(
					'desa' => $this->m_26_Perangkat_Desa->ambildata(),
					'gedes' => $dades[0],
					);
				
				$this->load->view('main_page/home_page/print/v_23_print_geografi_desa.php',$data);		
			}
		}
	}
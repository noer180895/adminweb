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
			
		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/v_23_index.php',
				);
			
			$this->load->view('v_26_index',$data);
		}
	}
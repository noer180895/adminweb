<?php
	/**
	* 
	*/
	class C_23_log extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('auth/m_23_log');
			$this->load->model('m_log');
		}


		public function index()
		{
			$lihat = $this->m_23_log->lihat();
			// var_dump($lihat);
			// exit();
			$data = array(
				'view' => 'main_page/log/v_23_datalog' , 
				'ambil' => $lihat,
				);
			$this->load->view('v_23_index', $data);
		}

		public function pdf()
		{
			
			$nama_dokumen='Tabel Data LOG'; //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();
			$data = array(
				'view' => 'main_page/log/v_23_PDF_log.php' , 

				'ambil' => $this->m_23_log->lihat(), 
				);
			$this->load->view('main_page/log/v_23_PDF_log.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}
	}
<?php 

/**
* 
*/
class C_26_Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
	}
	

	public function laporanRAB()
	{
		
		$nama_dokumen='Tabel Data APBDes'; //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();
		$data = array(
			'view' => 'main_page/Laporan/v_26_laporan_RAB.php' , 

			
			);
		$this->load->view('main_page/Laporan/v_26_laporan_RAB.php',$data);

	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function laporanrinciananggaran()
	{
		
		$nama_dokumen='Tabel Data APBDes'; //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();
		$data = array(
			'view' => 'main_page/Laporan/v_26_laporan_rincian_anggaran.php' , 

			
			);
		$this->load->view('main_page/Laporan/v_26_laporan_rincian_anggaran.php',$data);

	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}
}
?>
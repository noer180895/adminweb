<?php
	/**
	* 
	*/
	class C_26_caridata extends Ci_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_log');
			$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
			$this->load->model('Data_Penduduk/m_26_data_penduduk');
			$this->load->model('CariData/m_26_caridata');
		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/CariData/v_26_caridata.php',
				'ambildataasalusul' => $this->m_26_caridata->ambildataasalusul(),
				'ambildatabelummenikah' => $this->m_26_caridata->ambildatabelummenikah(),
				'ambildatadomisili' => $this->m_26_caridata->ambildatadomisili(),
				'ambildatadomisiliperusahaan' => $this->m_26_caridata->ambildatadomisiliperusahaan(),
				'ambildatakelahiran' => $this->m_26_caridata->ambildatakelahiran(),
				'ambildatakematian' => $this->m_26_caridata->ambildatakematian(),
				'ambildatapembuatanskck' => $this->m_26_caridata->ambildatapembuatanskck(),
				'ambildatapermohonanimb' => $this->m_26_caridata->ambildatapermohonanimb(),
				'ambildatapindah' => $this->m_26_caridata->ambildatapindah(),
				'ambildatatentangorangtua' => $this->m_26_caridata->ambildatatentangorangtua(),
				'ambildatatidakmampu' => $this->m_26_caridata->ambildatatidakmampu(),
				'ambildatauntuknikah' => $this->m_26_caridata->ambildatauntuknikah(),
				'ambildatawali' => $this->m_26_caridata->ambildatawali(),
				'ambildatawarga' => $this->m_26_caridata->ambildatawarga(),
				'ambildataizinkeramaian' => $this->m_26_caridata->ambildataizinkeramaian(),
				'ambildatapengantarpembuatankk' => $this->m_26_caridata->ambildatapengantarpembuatankk(),
				'ambildatapengantarpembuatanktp' => $this->m_26_caridata->ambildatapengantarpembuatanktp(),
				'ambildatapermohonanaktakelahiran' => $this->m_26_caridata->ambildatapermohonanaktakelahiran(),
				'ambildatapermohonankkdinas' => $this->m_26_caridata->ambildatapermohonankkdinas(),
				'ambildatapermohonanktpdinas' => $this->m_26_caridata->ambildatapermohonanktpdinas(),
				'ambildatapersetujuanmempelai' => $this->m_26_caridata->ambildatapersetujuanmempelai(),
				'ambildatatugasdesa' => $this->m_26_caridata->ambildatatugasdesa(),
				);
			
			$this->load->view('v_23_index',$data);
		}

		public function rentang()
		{
			$data = array(
				'view' => 'main_page/CariData/v_26_caridatarentang.php',
				'ambildataasalusul' => $this->m_26_caridata->ambildataasalusul(),
				'ambildatabelummenikah' => $this->m_26_caridata->ambildatabelummenikah(),
				'ambildatadomisili' => $this->m_26_caridata->ambildatadomisili(),
				'ambildatadomisiliperusahaan' => $this->m_26_caridata->ambildatadomisiliperusahaan(),
				'ambildatakelahiran' => $this->m_26_caridata->ambildatakelahiran(),
				'ambildatakematian' => $this->m_26_caridata->ambildatakematian(),
				'ambildatapembuatanskck' => $this->m_26_caridata->ambildatapembuatanskck(),
				'ambildatapermohonanimb' => $this->m_26_caridata->ambildatapermohonanimb(),
				'ambildatapindah' => $this->m_26_caridata->ambildatapindah(),
				'ambildatatentangorangtua' => $this->m_26_caridata->ambildatatentangorangtua(),
				'ambildatatidakmampu' => $this->m_26_caridata->ambildatatidakmampu(),
				'ambildatauntuknikah' => $this->m_26_caridata->ambildatauntuknikah(),
				'ambildatawali' => $this->m_26_caridata->ambildatawali(),
				'ambildatawarga' => $this->m_26_caridata->ambildatawarga(),
				'ambildataizinkeramaian' => $this->m_26_caridata->ambildataizinkeramaian(),
				'ambildatapengantarpembuatankk' => $this->m_26_caridata->ambildatapengantarpembuatankk(),
				'ambildatapengantarpembuatanktp' => $this->m_26_caridata->ambildatapengantarpembuatanktp(),
				'ambildatapermohonanaktakelahiran' => $this->m_26_caridata->ambildatapermohonanaktakelahiran(),
				'ambildatapermohonankkdinas' => $this->m_26_caridata->ambildatapermohonankkdinas(),
				'ambildatapermohonanktpdinas' => $this->m_26_caridata->ambildatapermohonanktpdinas(),
				'ambildatapersetujuanmempelai' => $this->m_26_caridata->ambildatapersetujuanmempelai(),
				'ambildatatugasdesa' => $this->m_26_caridata->ambildatatugasdesa(),
				);
			
			$this->load->view('v_23_index',$data);
		}


		public function rentangtanggal()
		{
			$satu = $_POST['tanggalawal'];
			$dua = $_POST['tanggalakhir'];
			$datasatu = date('d m Y', strtotime($satu));
			$datadua = date('d m Y', strtotime($dua));
			$data = array(
				'view' => 'main_page/CariData/v_26_caridatarentangtanggal.php',
				'ambildataasalusulrentang' => $this->m_26_caridata->ambildataasalusulrentang($datasatu,$datadua),
				'ambildatabelummenikahrentang' => $this->m_26_caridata->ambildatabelummenikahrentang($datasatu,$datadua),
				'ambildatadomisilirentang' => $this->m_26_caridata->ambildatadomisilirentang($datasatu,$datadua),
				'ambildatadomisiliperusahaanrentang' => $this->m_26_caridata->ambildatadomisiliperusahaanrentang($datasatu,$datadua),
				'ambildatakelahiranrentang' => $this->m_26_caridata->ambildatakelahiranrentang($datasatu,$datadua),
				'ambildatakematianrentang' => $this->m_26_caridata->ambildatakematianrentang($datasatu,$datadua),
				'ambildatapembuatanskckrentang' => $this->m_26_caridata->ambildatapembuatanskckrentang($datasatu,$datadua),
				'ambildatapermohonanimbrentang' => $this->m_26_caridata->ambildatapermohonanimbrentang($datasatu,$datadua),
				'ambildatapindahrentang' => $this->m_26_caridata->ambildatapindahrentang($datasatu,$datadua),
				'ambildatatentangorangtuarentang' => $this->m_26_caridata->ambildatatentangorangtuarentang($datasatu,$datadua),
				'ambildatatidakmampurentang' => $this->m_26_caridata->ambildatatidakmampurentang($datasatu,$datadua),
				'ambildatauntuknikahrentang' => $this->m_26_caridata->ambildatauntuknikahrentang($datasatu,$datadua),
				'ambildatawalirentang' => $this->m_26_caridata->ambildatawalirentang($datasatu,$datadua),
				'ambildatawargarentang' => $this->m_26_caridata->ambildatawargarentang($datasatu,$datadua),
				'ambildataizinkeramaianrentang' => $this->m_26_caridata->ambildataizinkeramaianrentang($datasatu,$datadua),
				'ambildatapengantarpembuatankkrentang' => $this->m_26_caridata->ambildatapengantarpembuatankkrentang($datasatu,$datadua),
				'ambildatapengantarpembuatanktprentang' => $this->m_26_caridata->ambildatapengantarpembuatanktprentang($datasatu,$datadua),
				'ambildatapermohonanaktakelahiranrentang' => $this->m_26_caridata->ambildatapermohonanaktakelahiranrentang($datasatu,$datadua),
				'ambildatapermohonankkdinasrentang' => $this->m_26_caridata->ambildatapermohonankkdinasrentang($datasatu,$datadua),
				'ambildatapermohonanktpdinasrentang' => $this->m_26_caridata->ambildatapermohonanktpdinasrentang($datasatu,$datadua),
				'ambildatapersetujuanmempelairentang' => $this->m_26_caridata->ambildatapersetujuanmempelairentang($datasatu,$datadua),
				'ambildatatugasdesarentang' => $this->m_26_caridata->ambildatatugasdesarentang($datasatu,$datadua),
				);
			
			$this->load->view('v_23_index',$data);
		}
}
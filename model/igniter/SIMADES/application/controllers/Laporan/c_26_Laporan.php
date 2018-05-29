<?php 

/**
* 
*/
class C_26_Laporan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('surat/m_26_data_surat');
		$this->load->model('m_log');
	}
	

	public function index()
	{
		$data = array(
			'view' => 'main_page/Laporan/v_26_pilih_laporan', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdataskasalusul()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_asal_usul/v_26_data_surat_keterangan_asal_usul', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskasalusul(),
			);
		$this->load->view('v_23_index',$data);
	}
	
	
	public function skdatabelummenikah()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_belum_menikah/v_26_data_surat_keterangan_belum_menikah', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskbelummenikah(),
			);
		$this->load->view('v_23_index',$data);
	}

	

	public function skdatadomisili()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_domisili/v_26_data_surat_keterangan_domisili', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskdomisili(),
			);
		$this->load->view('v_23_index',$data);
	}

	

	public function skdatadomisiliperusahaan()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_domisili_perusahaan/v_26_data_surat_keterangan_domisili_perusahaan', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskdomisiliperusahaan(),
			);
		$this->load->view('v_23_index',$data);
	}

	
	public function skdatakelahiran()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_kelahiran/v_26_data_surat_keterangan_kelahiran', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskkelahiran(),
			);
		$this->load->view('v_23_index',$data);
	}

	
	public function skdatakematian()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_kematian/v_26_data_surat_keterangan_kematian', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskkematian(),
			);
		$this->load->view('v_23_index',$data);
	}

	
	public function skdatanikah()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_nikah/v_26_data_surat_keterangan_nikah', 
			'ambildatasurat' => $this->m_26_data_surat->ambildatasknikah(),
			);
		$this->load->view('v_23_index',$data);
	}

	
	public function skdatapembuatankk()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_pembuatan_kk/v_26_data_surat_keterangan_pembuatan_kk', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskpembuatankk(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdatapembuatanktp()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_pembuatan_ktp/v_26_data_surat_keterangan_pembuatan_ktp', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskpembuatanktp(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdatapindah()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_pindah/v_26_data_surat_keterangan_pindah', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskpindah(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdataskck()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_skck/v_26_data_surat_keterangan_skck', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskskck(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdatatorangtua()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_tentang_orang_tua/v_26_data_surat_keterangan_tentang_orang_tua', 
			'ambildatasurat' => $this->m_26_data_surat->ambildatasktorangtua(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdatatidakmampu()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_tidak_mampu/v_26_data_surat_keterangan_tidak_mampu', 
			'ambildatasurat' => $this->m_26_data_surat->ambildatasktidakmampu(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdatawali()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_wali/v_26_data_surat_keterangan_wali', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskwali(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdatapmempelai()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_persetujuan_mempelai/v_26_data_surat_persetujuan_mempelai', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataspmempelai(),
			);
		$this->load->view('v_23_index',$data);
	}


	public function skdatapermohonankk()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_permohonan_kk_untuk_dinas/v_26_data_surat_permohonan_kk_dinas', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataspermohonankk(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdatapermohonanktp()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_permohonan_ktp_untuk_dinas/v_26_data_surat_permohonan_ktp_dinas', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataspermohonanktp(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdatapermohonanaktakelahiran()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_data_surat_permohonan_akta_kelahiran_dinas', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataspermohonanaktakelahiran(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdatawarga()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_warga/v_26_data_surat_keterangan_warga', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskwarga(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdatapermohonanimb()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_keterangan_permohonan_imb/v_26_data_surat_keterangan_permohonan_imb', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataskpimb(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdataperintahtugas()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_perintah_tugas/v_26_data_surat_perintah_tugas', 
			'ambildatasurat' => $this->m_26_data_surat->ambildatasptugas(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function skdatapizinkeramaian()
	{
		$data = array(
			'view' => 'main_page/Laporan/surat_pengantar_izin_keramaian/v_26_data_surat_izin_keramaian', 
			'ambildatasurat' => $this->m_26_data_surat->ambildataspizinkeramaian(),
			);
		$this->load->view('v_23_index',$data);
	}
}
?>
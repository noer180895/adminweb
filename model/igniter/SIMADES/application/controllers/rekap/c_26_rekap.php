<?php

/**
* 
*/
class C_26_rekap extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('rekap/m_26_rekap');
	}

	public function rekapagama()
	{
		
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_agama',
			'dataislam' => $this->m_26_rekap->agamaislam(),
			'dataprotestan' => $this->m_26_rekap->agamaprotestan(),
			'datakhatolik' => $this->m_26_rekap->agamakhatolik(),
			'datahindu' => $this->m_26_rekap->agamahindu(),
			'databuddha' => $this->m_26_rekap->agamabuddha(),
			'datakhonghucu' => $this->m_26_rekap->agamakhonghucu(),
			'datatidakberagama' => $this->m_26_rekap->agamatidakberagama(),
			'datalainnya' => $this->m_26_rekap->agamalainnya(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekapgd()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_golongan_darah',
			'dataa' => $this->m_26_rekap->gda(),
			'dataamin' => $this->m_26_rekap->gdamin(),
			'dataaplus' => $this->m_26_rekap->gdaplus(),
			'datab' => $this->m_26_rekap->gdb(),
			'databmin' => $this->m_26_rekap->gdbmin(),
			'databplus' => $this->m_26_rekap->gdbplus(),
			'dataab' => $this->m_26_rekap->gdab(),
			'dataabmin' => $this->m_26_rekap->gdabmin(),
			'dataabplus' => $this->m_26_rekap->gdabplus(),
			'datao' => $this->m_26_rekap->gdo(),
			'dataomin' => $this->m_26_rekap->gdomin(),
			'dataoplus' => $this->m_26_rekap->gdoplus(),
			'datatidaktahu' => $this->m_26_rekap->gdtidaktahu(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekapjk()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_jenis_kelamin',
			'datalakilaki' => $this->m_26_rekap->jklakilaki(),
			'dataperempuan' => $this->m_26_rekap->jkperempuan(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekaphk()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_hubungan_keluarga',
			'datakepalakeluarga' => $this->m_26_rekap->hkkepalakeluarga(),
			'datasuami' => $this->m_26_rekap->hksuami(),
			'dataistri' => $this->m_26_rekap->hkistri(),
			'dataanak' => $this->m_26_rekap->hkanak(),
			'datamenantu' => $this->m_26_rekap->hkmenantu(),
			'datacucu' => $this->m_26_rekap->hkcucu(),
			'dataorangtua' => $this->m_26_rekap->hkorangtua(),
			'datamertua' => $this->m_26_rekap->hkmertua(),
			'datapembantu' => $this->m_26_rekap->hkpembantu(),
			'datalainnya' => $this->m_26_rekap->hklainnya(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekapsp()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_status_perkawinan',
			'databelummenikah' => $this->m_26_rekap->spbelummenikah(),
			'datamenikah' => $this->m_26_rekap->spmenikah(),
			'dataceraihidup' => $this->m_26_rekap->spceraihidup(),
			'dataceraimati' => $this->m_26_rekap->spceraimati(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekappt()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_pendidikan_terakhir',
			'databelumtidaksekolah' => $this->m_26_rekap->ptbelumtidaksekolah(),
			'databelumtamatsd' => $this->m_26_rekap->ptbelumtamatsd(),
			'datatamatsd' => $this->m_26_rekap->pttamatsd(),
			'datasltp' => $this->m_26_rekap->ptsltp(),
			'dataslta' => $this->m_26_rekap->ptslta(),
			'datadiplomaiii' => $this->m_26_rekap->ptdiplomaiii(),
			'dataakademi' => $this->m_26_rekap->ptakademi(),
			'datadiplomav' => $this->m_26_rekap->ptdiplomav(),
			'datastrataii' => $this->m_26_rekap->ptstrataii(),
			'datastrataiii' => $this->m_26_rekap->ptstrataiii(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekapp()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_pekerjaan',
			'databelumtidakbekerja' => $this->m_26_rekap->pbelumtidakbekerja(),
			'datamengurusrt' => $this->m_26_rekap->pmengurusrumahtangga(),
			'datapelajar' => $this->m_26_rekap->ppelajar(),
			'datapensiunan' => $this->m_26_rekap->ppensiunan(),
			'databekerja' => $this->m_26_rekap->pbekerja(),
			'datalainnya' => $this->m_26_rekap->plainnya(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekapsuratkeluar()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_surat_keluar',
			'ambiljumlahkelahiran' => $this->m_26_rekap->ambildatasuratkelahiran(),
			'ambiljumlahpindah' => $this->m_26_rekap->ambildatasuratpindah(),
			'ambiljumlahdomisili' => $this->m_26_rekap->ambildatasuratdomisili(),
			'ambiljumlahpembuatanktp' => $this->m_26_rekap->ambildatasuratpembuatanktp(),
			'ambiljumlahpembuatankk' => $this->m_26_rekap->ambildatasuratpembuatankk(),
			'ambiljumlahwali' => $this->m_26_rekap->ambildatasuratwali(),
			'ambiljumlahnikah' => $this->m_26_rekap->ambildatasuratnikah(),
			'ambiljumlahskck' => $this->m_26_rekap->ambildatasuratskck(),
			'ambiljumlahtidakmampu' => $this->m_26_rekap->ambildatasurattidakmampu(),
			'ambiljumlahkematian' => $this->m_26_rekap->ambildatasuratkematian(),
			'ambiljumlahbelummenikah' => $this->m_26_rekap->ambildatasuratbelummenikah(),
			'ambiljumlahasalusul' => $this->m_26_rekap->ambildatasuratasalusul(),
			'ambiljumlahmempelai' => $this->m_26_rekap->ambildatasuratmempelai(),
			'ambiljumlahorangtua' => $this->m_26_rekap->ambildatasuratorangtua(),
			'ambiljumlahdomisiliperusahaan' => $this->m_26_rekap->ambildatasuratdomisiliperusahaan(),
			'ambiljumlahpermohonankkuntukdinas' => $this->m_26_rekap->ambildatasuratpermohonankkuntukdinas(),
			'ambiljumlahpermohonanktpuntukdinas' => $this->m_26_rekap->ambildatasuratpermohonanktpuntukdinas(),
			'ambiljumlahpermohonanaktakelahiranuntukdinas' => $this->m_26_rekap->ambildatasuratpermohonanaktakelahiranuntukdinas(),
			'ambiljumlahwarga' => $this->m_26_rekap->ambildatasuratwarga(),
			'ambiljumlahpermohonanimb' => $this->m_26_rekap->ambildatasuratpermohonanimb(),
			'ambiljumlahtugasdesa' => $this->m_26_rekap->ambildatasurattugasdesa(),
			'ambiljumlahpengantarizinkeramaian' => $this->m_26_rekap->ambildatasuratpengantarizinkeramaian(),
			);
		$this->load->view('v_23_index',$data);
	}
	public function rekapsuratmasuk()
	{
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_surat_masuk',
			'ambildata' => $this->m_26_rekap->ambildatasuratmasuk(),
			'ambildataberdasarkan' => $this->m_26_rekap->ambildatasuratmasukberdasarkan(3),
			);
		$this->load->view('v_23_index',$data);
	}

	public function rekapsuratmasukberdasarkan()
	{
		$id = $_POST['file'];
		$data = array(
			'view' => 'main_page/rekap/v_26_rekap_surat_masuk',
			'ambildataberdasarkan' => $this->m_26_rekap->ambildatasuratmasukberdasarkan($id),
			);
		$this->load->view('v_23_index',$data);
	}
}

?>
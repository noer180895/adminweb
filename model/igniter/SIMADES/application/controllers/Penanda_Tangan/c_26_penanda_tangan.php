<?php

/**
* 
*/
class C_26_penanda_tangan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_log');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
	}

	public function tandatangan()
	{
		$data = array(
			'view' => 'main_page/Penanda_Tangan/v_26_data_penanda_tangan',
			'ambil' => $this->m_26_penanda_tangan->ambildata()
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpanpenandatangan()
	{
		$namacamat = $_POST['camat'];
		$pangkatcamat = $_POST['pangkatcamat'];
		$nipcamat = $_POST['nipcamat'];
		$namakades = $_POST['kades'];
		$pangkatkades = $_POST['pangkatkades'];
		$nipkades = $_POST['nipkades'];
		$namasekdes = $_POST['sekdes'];
		$pangkatsekdes = $_POST['pangkatsekdes'];
		$nipsekdes = $_POST['nipsekdes'];
		$namabendes = $_POST['bendes'];
		$pangkatbendes = $_POST['pangkatbendes'];
		$nipbendes = $_POST['nipbendes'];
		$namaplt = $_POST['plt'];
		$pangkatplt = $_POST['pangkatplt'];
		$nipplt = $_POST['nipplt'];
		$namapj = $_POST['pj'];
		$pangkatpj = $_POST['pangkatpj'];
		$nippj = $_POST['nippj'];
		$namakaur = $_POST['kaur'];
		$pangkatkaur = $_POST['pangkatkaur'];
		$nipkaur = $_POST['nipkaur'];

		$data = array(
			'nip_camat' => $nipcamat,
			'nama_camat' => $namacamat,
			'pangkat_camat' => $pangkatcamat,
			'nip_kades' => $nipkades,
			'nama_kades' => $namakades,
			'pangkat_kades' => $pangkatkades,
			'nip_sekdes' => $nipsekdes,
			'nama_sekdes' => $namasekdes,
			'pangkat_sekdes' => $pangkatsekdes,
			'nip_bendes' => $nipbendes,
			'nama_bendes' => $namabendes,
			'pangkat_bendes' => $pangkatbendes,
			'nip_plt' => $nipplt,
			'nama_plt' => $namaplt,
			'pangkat_plt' => $pangkatplt,
			'nip_pj' => $nippj,
			'nama_pj' => $namapj,
			'pangkat_pj' => $pangkatpj,
			'nip_kaur' => $nipkaur,
			'nama_kaur' => $namakaur,
			'pangkat_kaur' => $pangkatkaur,
			);
		$this->m_26_penanda_tangan->ubahpenandatangan($data);
		$aksi 	= 'Menyimpan data penanda tangan surat';
				$this->m_log->log($aksi);
		?>
			<script type="text/javascript">
				alert('Data Penanda Tangan berhasil di simpan');
				window.location="<?php echo base_url() ?>Penanda_Tangan/c_26_penanda_tangan/tandatangan"
			</script>	
		<?php
	}
}

?>
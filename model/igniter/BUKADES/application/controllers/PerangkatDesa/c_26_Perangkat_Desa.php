<?php

/**
* 
*/
class C_26_Perangkat_Desa extends CI_Controller
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
			'view' => 'main_page/PerangkatDesa/v_26_Perangkat_Desa',
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index', $data);
	}

	public function ubahProfilDesa()
	{
		$foto               = $_FILES['file_foto']['name'];
		$foldergambar 		= "assets/images/";
		$alamatgambar 		= $foldergambar.$foto;
        
        if ($alamatgambar == "assets/images/") {
        	$alamatgambar = $_POST['hidden_foto'];
        }
		$upload= move_uploaded_file($_FILES['file_foto']['tmp_name'], $alamatgambar);
		
		$id = $_POST['kodeDesa'];
		$nama_kabupaten	= $_POST['kabupaten'];
		$nama_kecamatan	= $_POST['kecamatan'];
		$nama_desa	= $_POST['namadesa'];
		$nama_kepala_desa	= $_POST['kepaladesa'];
		$nama_sekertaris_desa	= $_POST['sekretaris'];
		$nama_bendahara_desa	= $_POST['bendaharadesa'];
		$nama_bank_desa	= $_POST['namabank'];
		$cabang	= $_POST['cabang'];
		$nomor_rekening_desa	= $_POST['nomorrekening'];
		$logo_desa	= $alamatgambar;
		$alamatdesa = $_POST['alamatdesa'];

		$dataUbah = array(
			'nama_kabupaten'	=> $nama_kabupaten ,
			'nama_kecamatan'	=> 		$nama_kecamatan ,
			'nama_desa'	=> 		$nama_desa ,
			'nama_kepala_desa'	=> 		$nama_kepala_desa ,
			'nama_sekretaris_desa'	=> 		$nama_sekertaris_desa ,
			'nama_bendahara_desa'	=> 		$nama_bendahara_desa ,
			'nama_bank_desa'	=> 		$nama_bank_desa ,
			'cabang'	=> 		$cabang ,
			'nomor_rekening_desa'	=> 		$nomor_rekening_desa ,
			'logo_desa'	=> 		$logo_desa ,
			'alamat_desa' => $alamatdesa,
			);
		$dataWhere = array(
			'id' => $id , 
			);
		$this->m_26_Perangkat_Desa->ubahProfilDesa($dataUbah, $dataWhere);
		$aksi 	= 'Mengubah data perangkat desa';
				$this->m_log->log($aksi);
		
		?>
			<script type="text/javascript">
				alert('Data profil berhasil di ubah');
				window.location="<?php echo base_url() ?>"
			</script>	
		<?php
	}
}

?>
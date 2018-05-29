<?php

/**
* 
*/
class C_26_buku_induk_penduduk_desa extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/m_26_buku_induk_penduduk_desa');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_tampil_buku_induk_penduduk_desa',
			'ambildata' => $this->m_26_buku_induk_penduduk_desa->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_tambah_buku_induk_penduduk_desa', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namalengkap = $_POST['namalengkap'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$agama = $_POST['agama'];
		$pendidikanterakhir = $_POST['pendidikanterakhir'];
		$pekerjaan = $_POST['pekerjaan'];
		$kepandaianmembaca = $_POST['kepandaianmembaca'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$alamat = $_POST['alamat'];
		$hubungankeluarga = $_POST['hubungankeluarga'];
		$noktp = $_POST['nomorktp'];
		$nokk = $_POST['nomorkk'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_lengkap' => $namalengkap,
			'jenis_kelamin' => $jeniskelamin,
			'status_perkawinan' => $statusperkawinan,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'agama' => $agama,
			'pendidikan_terakhir' => $pendidikanterakhir,
			'pekerjaan' => $pekerjaan,
			'kepandaian_membaca' => $kepandaianmembaca,
			'kewarganegaraan' => $kewarganegaraan,
			'alamat_lengkap' => $alamat,
			'hubungan_keluarga' => $hubungankeluarga,
			'no_ktp' => $noktp,
			'no_kk' => $nokk,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_induk_penduduk_desa->simpan($data);
		$aksi 	= 'Menyimpan data buku induk desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku induk penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_induk_penduduk_desa->hapus($id);
		$aksi 	= 'Menghapus data buku induk penduduk desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku induk penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_lihat_buku_induk_penduduk_desa',
			'ambildata' => $this->m_26_buku_induk_penduduk_desa->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukudataindukpendudukdesa()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Data Induk Penduduk Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_pdf_buku_induk_penduduk_desa',
			'ambildata' => $this->m_26_buku_induk_penduduk_desa->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_pdf_buku_induk_penduduk_desa',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}


	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_excel_buku_induk_penduduk_desa',
			'ambildata' => $this->m_26_buku_induk_penduduk_desa->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_excel_buku_induk_penduduk_desa',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/v_26_ubah_buku_induk_penduduk_desa',
			'ambildata' => $this->m_26_buku_induk_penduduk_desa->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namalengkap = $_POST['namalengkap'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$agama = $_POST['agama'];
		$pendidikanterakhir = $_POST['pendidikanterakhir'];
		$pekerjaan = $_POST['pekerjaan'];
		$kepandaianmembaca = $_POST['kepandaianmembaca'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$alamat = $_POST['alamat'];
		$hubungankeluarga = $_POST['hubungankeluarga'];
		$noktp = $_POST['nomorktp'];
		$nokk = $_POST['nomorkk'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_lengkap' => $namalengkap,
			'jenis_kelamin' => $jeniskelamin,
			'status_perkawinan' => $statusperkawinan,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'agama' => $agama,
			'pendidikan_terakhir' => $pendidikanterakhir,
			'pekerjaan' => $pekerjaan,
			'kepandaian_membaca' => $kepandaianmembaca,
			'kewarganegaraan' => $kewarganegaraan,
			'alamat_lengkap' => $alamat,
			'hubungan_keluarga' => $hubungankeluarga,
			'no_ktp' => $noktp,
			'no_kk' => $nokk,
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_induk_penduduk_desa->ubah($id,$data);
		$aksi 	= 'Mengubah data buku induk penduduk desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku induk penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/';
				</script>
			";
		
	}


    public function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

    public function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 3);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
}
?>
<?php

/**
* 
*/
class C_26_buku_mutasi_penduduk extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/m_26_buku_mutasi_penduduk');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_tampil_buku_mutasi_penduduk',
			'ambildata' => $this->m_26_buku_mutasi_penduduk->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_tambah_buku_mutasi_penduduk', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namalengkap = $_POST['namalengkap'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$datangasaldaerah = $_POST['asaldaerah'];
		$datangtanggalkedatangan = $_POST['tanggaldatang'];
		$datangtempatlahir = $_POST['datangtempatlahir'];
		$datangtanggallahir = $_POST['datangtanggallahir'];
		$datangpenguranganpenduduk = $_POST['penguranganpenduduk'];
		$datangtanggalpindah = $_POST['tanggalpindah'];
		$meninggaltempatmeninggal = $_POST['tempatmeninggal'];
		$meninggaltanggalmeninggal = $_POST['tanggalmeninggal'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_lengkap' => $namalengkap,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jeniskelamin,
			'kewarganegaraan' => $kewarganegaraan,
			'datang_asal_daerah' => $datangasaldaerah,
			'datang_tanggal_kedatangan' => $datangtanggalkedatangan,
			'datang_tempat_lahir' => $datangtempatlahir,
			'datang_tanggal_lahir' => $datangtanggallahir,
			'datang_pengurangan_penduduk' => $datangpenguranganpenduduk,
			'datang_tanggal_pindah' => $datangtanggalpindah,
			'meninggal_tempat_meninggal' => $meninggaltempatmeninggal,
			'meninggal_tanggal_meninggal' => $meninggaltanggalmeninggal,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_mutasi_penduduk->simpan($data);
		$aksi 	= 'Menyimpan data buku mutasi penduduk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku mutasi penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_mutasi_penduduk->hapus($id);
		$aksi 	= 'Menghapus data buku mutasi penduduk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku mutasi pendudukk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_lihat_buku_mutasi_penduduk',
			'ambildata' => $this->m_26_buku_mutasi_penduduk->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukumutasipenduduk()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Mutasi Penduduk Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_pdf_buku_mutasi_penduduk',
			'ambildata' => $this->m_26_buku_mutasi_penduduk->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_pdf_buku_mutasi_penduduk',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_excel_buku_mutasi_penduduk',
			'ambildata' => $this->m_26_buku_mutasi_penduduk->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_excel_buku_mutasi_penduduk',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/v_26_ubah_buku_mutasi_penduduk',
			'ambildata' => $this->m_26_buku_mutasi_penduduk->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namalengkap = $_POST['namalengkap'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$datangasaldaerah = $_POST['asaldaerah'];
		$datangtanggalkedatangan = $_POST['tanggaldatang'];
		$datangtempatlahir = $_POST['datangtempatlahir'];
		$datangtanggallahir = $_POST['datangtanggallahir'];
		$datangpenguranganpenduduk = $_POST['penguranganpenduduk'];
		$datangtanggalpindah = $_POST['tanggalpindah'];
		$meninggaltempatmeninggal = $_POST['tempatmeninggal'];
		$meninggaltanggalmeninggal = $_POST['tanggalmeninggal'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_lengkap' => $namalengkap,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jeniskelamin,
			'kewarganegaraan' => $kewarganegaraan,
			'datang_asal_daerah' => $datangasaldaerah,
			'datang_tanggal_kedatangan' => $datangtanggalkedatangan,
			'datang_tempat_lahir' => $datangtempatlahir,
			'datang_tanggal_lahir' => $datangtanggallahir,
			'datang_pengurangan_penduduk' => $datangpenguranganpenduduk,
			'datang_tanggal_pindah' => $datangtanggalpindah,
			'meninggal_tempat_meninggal' => $meninggaltempatmeninggal,
			'meninggal_tanggal_meninggal' => $meninggaltanggalmeninggal,
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_mutasi_penduduk->ubah($id,$data);
		$aksi 	= 'Mengubah data buku mutasi penduduk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku mutasi penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/';
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
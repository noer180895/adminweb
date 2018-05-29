<?php

/**
* 
*/
class C_26_buku_tanah_kas_milik_desa extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/m_26_buku_tanah_kas_milik_desa');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_tampil_buku_tanah_kas_milik_desa',
			'ambildata' => $this->m_26_buku_tanah_kas_milik_desa->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_tambah_buku_tanah_kas_milik_desa', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$asaltanah = $_POST['namaasal'];
		$nomorsertifikat = $_POST['nomorsertifikat'];
		$luas = $_POST['luas'];
		$klas = $_POST['klas'];
		$aslimilikdesa = $_POST['aslimilikdesa'];
		$pusat = $_POST['pusat'];
		$provinsi = $_POST['provinsi'];
		$kabupaten = $_POST['kabupatenkota'];
		$lainlain = $_POST['lainlain'];
		$tanggalperolehan = $_POST['tanggalperolehan'];
		$sawah = $_POST['sawah'];
		$tegal = $_POST['tegal'];
		$kebun = $_POST['kebun'];
		$tambakkolam = $_POST['tambakkolam'];
		$tanahkeringdaratan = $_POST['tanahdaratan'];
		$patokada = $_POST['patokada'];
		$patoktidakada = $_POST['patoktidak'];
		$papanada = $_POST['papanada'];
		$papantidakada = $_POST['papantidakada'];
		$lokasi = $_POST['lokasi'];
		$peruntukan = $_POST['peruntukan'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'asal_tanah' => $asaltanah,
			'nomor_sertifikat' => $nomorsertifikat,
			'luas' => $luas,
			'klas' => $klas,
			'asli_milik_desa' => $aslimilikdesa,
			'pusat' => $pusat, 
			'provinsi' => $provinsi, 
			'kabupaten' => $kabupaten, 
			'lain_lain' => $lainlain, 
			'tanggal_perolehan' => $tanggalperolehan, 
			'sawah' => $sawah, 
			'tegal' => $tegal, 
			'kebun' => $kebun, 
			'tambak_kolam' => $tambakkolam, 
			'tanah_kering_daratan' => $tanahkeringdaratan, 
			'patok_ada' => $patokada, 
			'patok_tidak_ada' => $patoktidakada, 
			'papan_ada' => $papanada, 
			'papan_tidak_ada' => $papantidakada, 
			'lokasi' => $lokasi, 
			'peruntukan' => $peruntukan, 
			'ket' => $keterangan, 
			);
		$this->m_26_buku_tanah_kas_milik_desa->simpan($data);
		$aksi 	= 'Menyimpan data buku tanah kas milik desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku tanah kas milik desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/';
				</script>
			";
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_tanah_kas_milik_desa->hapus($id);
		$aksi 	= 'Menghapus data buku tanah kas milik desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku tanah kas milik desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_lihat_buku_tanah_kas_milik_desa',
			'ambildata' => $this->m_26_buku_tanah_kas_milik_desa->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukudatatanahkasmilikdesa()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku data Tanah Kas Milik Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_pdf_buku_tanah_kas_milik_desa',
			'ambildata' => $this->m_26_buku_tanah_kas_milik_desa->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_pdf_buku_tanah_kas_milik_desa',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_excel_buku_tanah_kas_milik_desa',
			'ambildata' => $this->m_26_buku_tanah_kas_milik_desa->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_excel_buku_tanah_kas_milik_desa',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/v_26_ubah_buku_tanah_kas_milik_desa',
			'ambildata' => $this->m_26_buku_tanah_kas_milik_desa->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$asaltanah = $_POST['namaasal'];
		$nomorsertifikat = $_POST['nomorsertifikat'];
		$luas = $_POST['luas'];
		$klas = $_POST['klas'];
		$aslimilikdesa = $_POST['aslimilikdesa'];
		$pusat = $_POST['pusat'];
		$provinsi = $_POST['provinsi'];
		$kabupaten = $_POST['kabupatenkota'];
		$lainlain = $_POST['lainlain'];
		$tanggalperolehan = $_POST['tanggalperolehan'];
		$sawah = $_POST['sawah'];
		$tegal = $_POST['tegal'];
		$kebun = $_POST['kebun'];
		$tambakkolam = $_POST['tambakkolam'];
		$tanahkeringdaratan = $_POST['tanahdaratan'];
		$patokada = $_POST['patokada'];
		$patoktidakada = $_POST['patoktidak'];
		$papanada = $_POST['papanada'];
		$papantidakada = $_POST['papantidakada'];
		$lokasi = $_POST['lokasi'];
		$peruntukan = $_POST['peruntukan'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'asal_tanah' => $asaltanah,
			'nomor_sertifikat' => $nomorsertifikat,
			'luas' => $luas,
			'klas' => $klas,
			'asli_milik_desa' => $aslimilikdesa,
			'pusat' => $pusat, 
			'provinsi' => $provinsi, 
			'kabupaten' => $kabupaten, 
			'lain_lain' => $lainlain, 
			'tanggal_perolehan' => $tanggalperolehan, 
			'sawah' => $sawah, 
			'tegal' => $tegal, 
			'kebun' => $kebun, 
			'tambak_kolam' => $tambakkolam, 
			'tanah_kering_daratan' => $tanahkeringdaratan, 
			'patok_ada' => $patokada, 
			'patok_tidak_ada' => $patoktidakada, 
			'papan_ada' => $papanada, 
			'papan_tidak_ada' => $papantidakada, 
			'lokasi' => $lokasi, 
			'peruntukan' => $peruntukan, 
			'ket' => $keterangan, 
			);
		$this->m_26_buku_tanah_kas_milik_desa->ubah($id,$data);
		$aksi 	= 'Mengubah data buku tanah kas milik desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku tanah kas milik desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/';
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
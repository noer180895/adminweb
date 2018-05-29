<?php

/**
* 
*/
class C_26_buku_register_perubahan_hak_atas_tanah extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/m_26_buku_register_perubahan_hak_atas_tanah');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_tampil_buku_register_perubahan_hak_atas_tanah',
			'ambildata' => $this->m_26_buku_register_perubahan_hak_atas_tanah->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_tambah_buku_register_perubahan_hak_atas_tanah', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggalperubahan = $_POST['tanggalperubahan'];
		$melepaskanperubahanhaktanah = $_POST['namayangmelepaskan'];
		$menerimaperubahanhaktanah = $_POST['namayangmenerima'];
		$jeniskelas = $_POST['jeniskelas'];
		$nomorpersil = $_POST['nomorpersil'];
		$letakblok = $_POST['letakblok'];
		$luastanah = $_POST['luastanah'];
		$bataskeliling = $_POST['bataskeliling'];
		$harga = $_POST['harga'];
		$tanggalakteperubahan = $_POST['tanggalakteperubahan'];
		$nomorakteperubahan = $_POST['nomorakteperubahan'];
		$prosesperubahanhak = $_POST['prosesperubahan'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal_perubahan' => $tanggalperubahan,
			'melepaskan_perubahan_hak_tanah' => $melepaskanperubahanhaktanah,
			'menerima_perubahan_hak_tanah' => $menerimaperubahanhaktanah,
			'jenis_kelas_tanah' => $jeniskelas,
			'nomor_persil' => $nomorpersil,
			'letak_blok' => $letakblok,
			'luas_tanah' => $luastanah,
			'batas_keliling' => $bataskeliling,
			'harga' => $harga,
			'tanggal_akte_perubahan' => $tanggalakteperubahan,
			'nomor_akte_perubahan' => $nomorakteperubahan,
			'proses_perubahan_hak' => $prosesperubahanhak,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_perubahan_hak_atas_tanah->simpan($data);
		$aksi 	= 'Menyimpan data buku register perubahan hak atas tanah';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku register perubahan hak atas tanah Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/c_26_buku_register_perubahan_hak_atas_tanah/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_register_perubahan_hak_atas_tanah->hapus($id);
		$aksi 	= 'Menghapus data buku register perubahan hak atas tanah';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku register perubahan hak atas tanah Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/c_26_buku_register_perubahan_hak_atas_tanah/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_lihat_buku_register_perubahan_hak_atas_tanah',
			'ambildata' => $this->m_26_buku_register_perubahan_hak_atas_tanah->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuregisterperubahanhakatastanah()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Register Perubahan Hak Atas Tanah '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_pdf_buku_register_perubahan_hak_atas_tanah',
			'ambildata' => $this->m_26_buku_register_perubahan_hak_atas_tanah->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_pdf_buku_register_perubahan_hak_atas_tanah',$data);
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_excel_buku_register_perubahan_hak_atas_tanah',
			'ambildata' => $this->m_26_buku_register_perubahan_hak_atas_tanah->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_excel_buku_register_perubahan_hak_atas_tanah',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/v_26_ubah_buku_register_perubahan_hak_atas_tanah',
			'ambildata' => $this->m_26_buku_register_perubahan_hak_atas_tanah->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggalperubahan = $_POST['tanggalperubahan'];
		$melepaskanperubahanhaktanah = $_POST['namayangmelepaskan'];
		$menerimaperubahanhaktanah = $_POST['namayangmenerima'];
		$jeniskelas = $_POST['jeniskelas'];
		$nomorpersil = $_POST['nomorpersil'];
		$letakblok = $_POST['letakblok'];
		$luastanah = $_POST['luastanah'];
		$bataskeliling = $_POST['bataskeliling'];
		$harga = $_POST['harga'];
		$tanggalakteperubahan = $_POST['tanggalakteperubahan'];
		$nomorakteperubahan = $_POST['nomorakteperubahan'];
		$prosesperubahanhak = $_POST['prosesperubahan'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'tanggal_perubahan' => $tanggalperubahan,
			'melepaskan_perubahan_hak_tanah' => $melepaskanperubahanhaktanah,
			'menerima_perubahan_hak_tanah' => $menerimaperubahanhaktanah,
			'jenis_kelas_tanah' => $jeniskelas,
			'nomor_persil' => $nomorpersil,
			'letak_blok' => $letakblok,
			'luas_tanah' => $luastanah,
			'batas_keliling' => $bataskeliling,
			'harga' => $harga,
			'tanggal_akte_perubahan' => $tanggalakteperubahan,
			'nomor_akte_perubahan' => $nomorakteperubahan,
			'proses_perubahan_hak' => $prosesperubahanhak,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_perubahan_hak_atas_tanah->ubah($id,$data);
		$aksi 	= 'Mengubah data buku register perubahan hak atas tanah';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku register perubahan hak atas tanah Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/c_26_buku_register_perubahan_hak_atas_tanah/';
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
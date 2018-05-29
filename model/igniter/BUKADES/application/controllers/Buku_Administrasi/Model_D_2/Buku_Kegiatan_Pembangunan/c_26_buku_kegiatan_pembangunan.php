<?php

/**
* 
*/
class C_26_buku_kegiatan_pembangunan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/m_26_buku_kegiatan_pembangunan');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/v_26_tampil_buku_kegiatan_pembangunan',
			'ambildata' => $this->m_26_buku_kegiatan_pembangunan->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/v_26_tambah_buku_kegiatan_pembangunan', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namaproyek = $_POST['namaproyekkegiatan'];
		$volume = $_POST['volume'];
		$pemerintah = $_POST['pemerintah'];
		$swadaya = $_POST['swadaya'];
		$jumlah = $_POST['jumlah'];
		$waktupenyelesaian = $_POST['waktupenyelesaian'];
		$sifatbaru = $_POST['baru'];
		$sifatlanjutan = $_POST['lanjutan'];
		$pelaksanaproyek = $_POST['pelaksana'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_proyek' => $namaproyek,
			'volume' => $volume,
			'pemerintah' => $pemerintah,
			'swadaya' => $swadaya,
			'jumlah' => $jumlah,
			'waktu_penyelesaian' => $waktupenyelesaian,
			'sifat_proyek_baru' => $sifatbaru,
			'sifat_proyek_lanjutan' => $sifatlanjutan,
			'pelaksana_proyek' => $pelaksanaproyek,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_kegiatan_pembangunan->simpan($data);
		$aksi 	= 'Menyimpan data buku kegiatan pembangunan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku kegiatan pembangunan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/c_26_buku_kegiatan_pembangunan/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_kegiatan_pembangunan->hapus($id);
		$aksi 	= 'Menghapus data buku kegiatan pembangunan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku kegiatan pembangunan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/c_26_buku_kegiatan_pembangunan/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/v_26_lihat_buku_kegiatan_pembangunan',
			'ambildata' => $this->m_26_buku_kegiatan_pembangunan->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukukegiatanpembangunan()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Kegiatan Pembangunan '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_2/Buku_kegiatan_Pembangunan/v_26_pdf_buku_kegiatan_pembangunan',
			'ambildata' => $this->m_26_buku_kegiatan_pembangunan->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_D_2/Buku_kegiatan_Pembangunan/v_26_pdf_buku_kegiatan_pembangunan',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_2/Buku_kegiatan_Pembangunan/v_26_excel_buku_kegiatan_pembangunan',
			'ambildata' => $this->m_26_buku_kegiatan_pembangunan->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_D_2/Buku_kegiatan_Pembangunan/v_26_excel_buku_kegiatan_pembangunan',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/v_26_ubah_buku_kegiatan_pembangunan',
			'ambildata' => $this->m_26_buku_kegiatan_pembangunan->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namaproyek = $_POST['namaproyekkegiatan'];
		$volume = $_POST['volume'];
		$pemerintah = $_POST['pemerintah'];
		$swadaya = $_POST['swadaya'];
		$jumlah = $_POST['jumlah'];
		$waktupenyelesaian = $_POST['waktupenyelesaian'];
		$sifatbaru = $_POST['baru'];
		$sifatlanjutan = $_POST['lanjutan'];
		$pelaksanaproyek = $_POST['pelaksana'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_proyek' => $namaproyek,
			'volume' => $volume,
			'pemerintah' => $pemerintah,
			'swadaya' => $swadaya,
			'jumlah' => $jumlah,
			'waktu_penyelesaian' => $waktupenyelesaian,
			'sifat_proyek_baru' => $sifatbaru,
			'sifat_proyek_lanjutan' => $sifatlanjutan,
			'pelaksana_proyek' => $pelaksanaproyek,
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_kegiatan_pembangunan->ubah($id,$data);
		$aksi 	= 'Mengubah data buku kegiatan pembangunan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku kegiatan pembangunan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/c_26_buku_kegiatan_pembangunan/';
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
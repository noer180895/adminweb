<?php

/**
* 
*/
class C_26_buku_kas_harian_pembantu extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/m_26_buku_kas_harian_pembantu');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_tampil_buku_kas_harian_pembantu',
			'ambildata' => $this->m_26_buku_kas_harian_pembantu->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_tambah_buku_kas_harian_pembantu', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggal = $_POST['tanggal'];
		$uraian = $_POST['uraian'];
		$penerimaan = $_POST['penerimaan'];
		$pengeluaran = $_POST['pengeluaran'];
		$jumlah = $_POST['jumlah'];
		

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal' => $tanggal,
			'uraian' => $uraian,
			'penerimaan' => $penerimaan,
			'pengeluaran' => $pengeluaran,
			'jumlah' => $jumlah, 
			);
		
		$this->m_26_buku_kas_harian_pembantu->simpan($data);
		$aksi 	= 'Menyimpan data buku kas harian pembantu';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku kas harian pembantu Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_kas_harian_pembantu->hapus($id);
		$aksi 	= 'Menghapus data buku kas harian pembantu';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku kas harian pembantu Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_lihat_buku_kas_harian_pembantu',
			'ambildata' => $this->m_26_buku_kas_harian_pembantu->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukukasharianpembantu()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Kas Harian Pembantu '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_pdf_buku_kas_harian_pembantu',
			'ambildata' => $this->m_26_buku_kas_harian_pembantu->ambildata(),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_pdf_buku_kas_harian_pembantu',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_excel_buku_kas_harian_pembantu',
			'ambildata' => $this->m_26_buku_kas_harian_pembantu->ambildata(),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_excel_buku_kas_harian_pembantu',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/v_26_ubah_buku_kas_harian_pembantu',
			'ambildata' => $this->m_26_buku_kas_harian_pembantu->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggal = $_POST['tanggal'];
		$uraian = $_POST['uraian'];
		$penerimaan = $_POST['penerimaan'];
		$pengeluaran = $_POST['pengeluaran'];
		$jumlah = $_POST['jumlah'];
		

		$data = array(
			'tahun' => $tahun,
			'tanggal' => $tanggal,
			'uraian' => $uraian,
			'penerimaan' => $penerimaan,
			'pengeluaran' => $pengeluaran,
			'jumlah' => $jumlah, 
			);
		
		$this->m_26_buku_kas_harian_pembantu->ubah($id,$data);
		$aksi 	= 'Mengubah data buku kas harian pembantu';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku kas harian pembantu Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/';
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
<?php

/**
* 
*/
class C_26_buku_inventaris_desa extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/m_26_buku_inventaris_desa');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_tampil_buku_inventaris_desa',
			'ambildata' => $this->m_26_buku_inventaris_desa->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_tambah_buku_inventaris_desa', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$jenisbarangbangunan = $_POST['jenisbarangbangunan'];
		$asaldibelisendiri = $_POST['dibelisendiri'];
		$asalbantuanpemerintah = $_POST['bantuanpemerintah'];
		$asalsumbangkan = $_POST['sumbangan'];
		$keadaanawalbaik = $_POST['keadaanawalbaik'];
		$keadaanawalrusak = $_POST['keadaanawalrusak'];
		$penghapusanrusak = $_POST['penghapusanrusak'];
		$penghapusandijual = $_POST['penghapusandijual'];
		$penghapusandisumbangkan = $_POST['penghapusandisumbangkan'];
		$tanggalpenghapusan = $_POST['tanggalpenghapusan'];
		$keadaanakhirbaik = $_POST['keadaanakhirbaik'];
		$keadaanakhirrusak = $_POST['keadaanakhirrusak'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'jenis_barang_bangunan' => $jenisbarangbangunan,
			'asal_dibeli_sendiri' => $asaldibelisendiri,
			'asal_bantuan_pemerintah' => $asalbantuanpemerintah,
			'asal_sumbangan' => $asalsumbangkan,
			'keadaan_baik' => $keadaanawalbaik,
			'keadaan_rusak' => $keadaanawalrusak, 
			'penghapusan_rusak' => $penghapusanrusak, 
			'penghapusan_dijual' => $penghapusandijual, 
			'penghapusan_disumbangkan' => $penghapusandisumbangkan, 
			'tanggal_penghapusan' => $tanggalpenghapusan, 
			'keadaan_akhir_tahun_baik' => $keadaanakhirbaik, 
			'keadaan_akhir_tahun_rusak' => $keadaanakhirrusak, 
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_inventaris_desa->simpan($data);
		$aksi 	= 'Menyimpan data buku inventaris desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku inventaris desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/';
				</script>
			";
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_inventaris_desa->hapus($id);
		$aksi 	= 'Menghapus data buku inventaris desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku inventaris desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_lihat_buku_inventaris_desa',
			'ambildata' => $this->m_26_buku_inventaris_desa->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuinventarisdesa()
	{	
		$a = date('H')+5;
		$nama_dokumen='Buku Inventaris Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_pdf_buku_inventaris_desa',
			'ambildata' => $this->m_26_buku_inventaris_desa->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_pdf_buku_inventaris_desa',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_excel_buku_inventaris_desa',
			'ambildata' => $this->m_26_buku_inventaris_desa->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_excel_buku_inventaris_desa',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/v_26_ubah_buku_inventaris_desa',
			'ambildata' => $this->m_26_buku_inventaris_desa->ambildataberdasarkan($id), 
			'id' => $id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$jenisbarangbangunan = $_POST['jenisbarangbangunan'];
		$asaldibelisendiri = $_POST['dibelisendiri'];
		$asalbantuanpemerintah = $_POST['bantuanpemerintah'];
		$asalsumbangkan = $_POST['sumbangan'];
		$keadaanawalbaik = $_POST['keadaanawalbaik'];
		$keadaanawalrusak = $_POST['keadaanawalrusak'];
		$penghapusanrusak = $_POST['penghapusanrusak'];
		$penghapusandijual = $_POST['penghapusandijual'];
		$penghapusandisumbangkan = $_POST['penghapusandisumbangkan'];
		$tanggalpenghapusan = $_POST['tanggalpenghapusan'];
		$keadaanakhirbaik = $_POST['keadaanakhirbaik'];
		$keadaanakhirrusak = $_POST['keadaanakhirrusak'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'jenis_barang_bangunan' => $jenisbarangbangunan,
			'asal_dibeli_sendiri' => $asaldibelisendiri,
			'asal_bantuan_pemerintah' => $asalbantuanpemerintah,
			'asal_sumbangan' => $asalsumbangkan,
			'keadaan_baik' => $keadaanawalbaik,
			'keadaan_rusak' => $keadaanawalrusak, 
			'penghapusan_rusak' => $penghapusanrusak, 
			'penghapusan_dijual' => $penghapusandijual, 
			'penghapusan_disumbangkan' => $penghapusandisumbangkan, 
			'tanggal_penghapusan' => $tanggalpenghapusan, 
			'keadaan_akhir_tahun_baik' => $keadaanakhirbaik, 
			'keadaan_akhir_tahun_rusak' => $keadaanakhirrusak, 
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_inventaris_desa->ubah($id,$data);
		$aksi 	= 'Mengubah data buku inventaris desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku inventaris desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/';
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
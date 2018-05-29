<?php

/**
* 
*/
class C_26_buku_inventaris_proyek extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/m_26_buku_inventaris_proyek');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_tampil_buku_inventaris_proyek',
			'ambildata' => $this->m_26_buku_inventaris_proyek->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_tambah_buku_inventaris_proyek', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namaproyek = $_POST['namaproyekkegiatan'];
		$volume = $_POST['volume'];
		$jumlahbiaya = $_POST['jumlah'];
		$lokasiproyek = $_POST['lokasi'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_proyek' => $namaproyek,
			'volume' => $volume,
			'jumlah_biaya' => $jumlahbiaya,
			'lokasi_proyek' => $lokasiproyek,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_inventaris_proyek->simpan($data);
		$aksi 	= 'Menyimpan data buku inventaris proyek berhasil';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku inventaris Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_inventaris_proyek->hapus($id);
		$aksi 	= 'Menghapus data buku inventaris proyek';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku inventaris proyek Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_lihat_buku_inventaris_proyek',
			'ambildata' => $this->m_26_buku_inventaris_proyek->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuinventarisproyek()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Inventaris Proyek '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_pdf_buku_inventaris_proyek',
			'ambildata' => $this->m_26_buku_inventaris_proyek->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_pdf_buku_inventaris_proyek',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}


	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_excel_buku_inventaris_proyek',
			'ambildata' => $this->m_26_buku_inventaris_proyek->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_excel_buku_inventaris_proyek',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/v_26_ubah_buku_inventaris_proyek',
			'ambildata' => $this->m_26_buku_inventaris_proyek->ambildataberdasarkan($id), 
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
		$jumlahbiaya = $_POST['jumlah'];
		$lokasiproyek = $_POST['lokasi'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_proyek' => $namaproyek,
			'volume' => $volume,
			'jumlah_biaya' => $jumlahbiaya,
			'lokasi_proyek' => $lokasiproyek,
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_inventaris_proyek->ubah($id,$data);
		$aksi 	= 'Mengubah data buku inventaris proyek';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku inventaris proyek Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/';
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
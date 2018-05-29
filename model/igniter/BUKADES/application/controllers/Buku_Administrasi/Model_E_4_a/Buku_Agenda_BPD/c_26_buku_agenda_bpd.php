	<?php

/**
* 
*/
class C_26_buku_agenda_bpd extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/m_26_buku_agenda_bpd');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_tampil_buku_agenda_bpd',
			'ambildata' => $this->m_26_buku_agenda_bpd->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_tambah_buku_agenda_bpd', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggalagenda= $_POST['tanggalagenda'];
		$nomorsuratmasuk = $_POST['nomorsuratmasuk'];
		$tanggalsuratmasuk = $_POST['tanggalsuratmasuk'];
		$darisuratmasuk = $_POST['darisuratmasuk'];
		$isisuratmasuk = $_POST['isisuratmasuk'];
		$isisuratkeluar = $_POST['isisuratkeluar'];
		$tanggalsuratkeluar = $_POST['tanggalsuratkeluar'];
		$alamatsuratkeluar = $_POST['alamatsuratkeluar'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal_agenda' => $tanggalagenda,
			'nomor_surat_masuk' => $nomorsuratmasuk,
			'tanggal_surat_masuk' => $tanggalsuratmasuk,
			'dari_surat_masuk' => $darisuratmasuk,
			'isi_surat_masuk' => $isisuratmasuk,
			'isi_surat_keluar' => $isisuratkeluar,
			'tanggal_surat_keluar' => $tanggalsuratkeluar,
			'alamat_surat_keluar' => $alamatsuratkeluar,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_agenda_bpd->simpan($data);
		$aksi 	= 'Menyimpan data buku agenda bpd';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku agenda bpd berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_agenda_bpd->hapus($id);
		$aksi 	= 'Menghapus data buku agenda bpd';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku agenda bpd Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_lihat_buku_agenda_bpd',
			'ambildata' => $this->m_26_buku_agenda_bpd->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuagendabpd()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Agenda BPD '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_pdf_buku_agenda_bpd',
			'ambildata' => $this->m_26_buku_agenda_bpd->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_pdf_buku_agenda_bpd',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_excel_buku_agenda_bpd',
			'ambildata' => $this->m_26_buku_agenda_bpd->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_excel_buku_agenda_bpd',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/v_26_ubah_buku_agenda_bpd',
			'ambildata' => $this->m_26_buku_agenda_bpd->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggalagenda= $_POST['tanggalagenda'];
		$nomorsuratmasuk = $_POST['nomorsuratmasuk'];
		$tanggalsuratmasuk = $_POST['tanggalsuratmasuk'];
		$darisuratmasuk = $_POST['darisuratmasuk'];
		$isisuratmasuk = $_POST['isisuratmasuk'];
		$isisuratkeluar = $_POST['isisuratkeluar'];
		$tanggalsuratkeluar = $_POST['tanggalsuratkeluar'];
		$alamatsuratkeluar = $_POST['alamatsuratkeluar'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'tanggal_agenda' => $tanggalagenda,
			'nomor_surat_masuk' => $nomorsuratmasuk,
			'tanggal_surat_masuk' => $tanggalsuratmasuk,
			'dari_surat_masuk' => $darisuratmasuk,
			'isi_surat_masuk' => $isisuratmasuk,
			'isi_surat_keluar' => $isisuratkeluar,
			'tanggal_surat_keluar' => $tanggalsuratkeluar,
			'alamat_surat_keluar' => $alamatsuratkeluar,
			'keterangan' => $keterangan, 
			);
		$this->m_26_buku_agenda_bpd->ubah($id,$data);
		$aksi 	= 'Mengubah data buku agenda bpd';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku agenda bpd Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/';
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
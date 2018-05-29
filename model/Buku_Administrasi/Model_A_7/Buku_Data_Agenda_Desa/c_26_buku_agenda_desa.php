<?php

/**
* 
*/
class C_26_buku_agenda_desa extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/m_26_buku_agenda_desa');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_tampil_buku_agenda_desa',
			'ambildata' => $this->m_26_buku_agenda_desa->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_tambah_buku_agenda_desa', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggal = $_POST['tanggal'];
		$nomorsurat = $_POST['nomorsurat'];
		$tanggalsurat = $_POST['tanggalsurat'];
		$suratmasukdari = $_POST['suratmasukdari'];
		$suratmasukisi = $_POST['suratmasukisi'];
		$suratkeluarisi = $_POST['suratkeluarisi'];
		$suratkeluartanggal = $_POST['tanggalpengiriman'];
		$alamat = $_POST['alamat'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal' => $tanggal,
			'nomor_surat' => $nomorsurat,
			'tanggal_surat' => $tanggalsurat,
			'surat_masuk_dari' => $suratmasukdari,
			'surat_masuk_isi' => $suratmasukisi,
			'surat_keluar_isi' => $suratkeluarisi, 
			'surat_keluar_tanggal' => $suratkeluartanggal, 
			'alamat' => $alamat, 
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_agenda_desa->simpan($data);
		$aksi 	= 'Menyimpan data buku agenda desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku agenda desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_agenda_desa/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_agenda_desa->hapus($id);
		$aksi 	= 'Menghapus data buku agenda desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku agenda desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_agenda_desa/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_lihat_buku_agenda_desa',
			'ambildata' => $this->m_26_buku_agenda_desa->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukudataagendadesa()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Data Agenda Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_pdf_buku_agenda_desa',
			'ambildata' => $this->m_26_buku_agenda_desa->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_pdf_buku_agenda_desa',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}


	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_excel_buku_agenda_desa',
			'ambildata' => $this->m_26_buku_agenda_desa->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_excel_buku_agenda_desa',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/v_26_ubah_buku_agenda_desa',
			'ambildata' => $this->m_26_buku_agenda_desa->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggal = $_POST['tanggal'];
		$nomorsurat = $_POST['nomorsurat'];
		$tanggalsurat = $_POST['tanggalsurat'];
		$suratmasukdari = $_POST['suratmasukdari'];
		$suratmasukisi = $_POST['suratmasukisi'];
		$suratkeluarisi = $_POST['suratkeluarisi'];
		$suratkeluartanggal = $_POST['tanggalpengiriman'];
		$alamat = $_POST['alamat'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'tanggal' => $tanggal,
			'nomor_surat' => $nomorsurat,
			'tanggal_surat' => $tanggalsurat,
			'surat_masuk_dari' => $suratmasukdari,
			'surat_masuk_isi' => $suratmasukisi,
			'surat_keluar_isi' => $suratkeluarisi, 
			'surat_keluar_tanggal' => $suratkeluartanggal, 
			'alamat' => $alamat,
			'keterangan' => $keterangan, 
			);
		
		
		$this->m_26_buku_agenda_desa->ubah($id,$data);
		$aksi 	= 'Mengubah data buku agenda desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku agenda desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_agenda_desa/';
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
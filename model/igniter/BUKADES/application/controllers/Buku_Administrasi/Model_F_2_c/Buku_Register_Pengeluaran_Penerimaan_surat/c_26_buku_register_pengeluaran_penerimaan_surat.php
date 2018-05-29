<?php

/**
* 
*/
class C_26_buku_register_pengeluaran_penerimaan_surat extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/m_26_buku_register_pengeluaran_penerimaan_surat');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_tampil_buku_register_pengeluaran_penerimaan_surat',
			'ambildata' => $this->m_26_buku_register_pengeluaran_penerimaan_surat->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_tambah_buku_register_pengeluaran_penerimaan_surat', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggalsuratketerangan = $_POST['tanggalsuratketerangan'];
		$nomorsuratketerangan = $_POST['nomorsuratketerangan'];
		$tentangsuratketerangan = $_POST['isisuratketerangan'];
		$nama = $_POST['nama'];
		$tanggallahir = $_POST['tanggallahir'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$digunakanuntuk = $_POST['digunakanuntuk'];
		$berlaku = $_POST['berlaku'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal_identitas' => $tanggalsuratketerangan,
			'nomor_identitas' => $nomorsuratketerangan,
			'tentang_identitas' => $tentangsuratketerangan,
			'nama' => $nama,
			'tanggal_lahir' => $tanggallahir,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'digunakan_untuk' => $digunakanuntuk,
			'berlaku' => $berlaku,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_pengeluaran_penerimaan_surat->simpan($data);
		$aksi 	= 'Menyimpan data buku register pengeluaran dan penerimaan surat keterangan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku register pengeluaran dan penerimaan surat keterangan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/c_26_buku_register_pengeluaran_penerimaan_surat/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_register_pengeluaran_penerimaan_surat->hapus($id);
		$aksi 	= 'Menghapus data buku register pengeluaran penerimaan surat';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku register pengeluaran penerimaan surat Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/c_26_buku_register_pengeluaran_penerimaan_surat/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_lihat_buku_register_pengeluaran_penerimaan_surat',
			'ambildata' => $this->m_26_buku_register_pengeluaran_penerimaan_surat->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuregisterpengeluaranpenerimaansurat()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Register Pengeluaran Penerimaan Surat '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_pdf_buku_register_pengeluaran_penerimaan_surat',
			'ambildata' => $this->m_26_buku_register_pengeluaran_penerimaan_surat->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_pdf_buku_register_pengeluaran_penerimaan_surat',$data);
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_excel_buku_register_pengeluaran_penerimaan_surat',
			'ambildata' => $this->m_26_buku_register_pengeluaran_penerimaan_surat->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_excel_buku_register_pengeluaran_penerimaan_surat',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/v_26_ubah_buku_register_pengeluaran_penerimaan_surat',
			'ambildata' => $this->m_26_buku_register_pengeluaran_penerimaan_surat->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggalsuratketerangan = $_POST['tanggalsuratketerangan'];
		$nomorsuratketerangan = $_POST['nomorsuratketerangan'];
		$tentangsuratketerangan = $_POST['isisuratketerangan'];
		$nama = $_POST['nama'];
		$tanggallahir = $_POST['tanggallahir'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$digunakanuntuk = $_POST['digunakanuntuk'];
		$berlaku = $_POST['berlaku'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'tanggal_identitas' => $tanggalsuratketerangan,
			'nomor_identitas' => $nomorsuratketerangan,
			'tentang_identitas' => $tentangsuratketerangan,
			'nama' => $nama,
			'tanggal_lahir' => $tanggallahir,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'digunakan_untuk' => $digunakanuntuk,
			'berlaku' => $berlaku,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_pengeluaran_penerimaan_surat->ubah($id,$data);
		$aksi 	= 'Mengubah data buku register pengeluaran penerimaan surat';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku register pengeluaran penerimaan surat Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_c/Buku_Register_Pengeluaran_Penerimaan_Surat/c_26_buku_register_pengeluaran_penerimaan_surat/';
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
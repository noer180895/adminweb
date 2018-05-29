<?php

/**
* 
*/
class C_26_buku_register_nikah_talak_cerai_rujuk extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/m_26_buku_register_nikah_talak_cerai_rujuk');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_tampil_buku_register_nikah_talak_cerai_rujuk',
			'ambildata' => $this->m_26_buku_register_nikah_talak_cerai_rujuk->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_tambah_buku_register_nikah_talak_cerai_rujuk', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggalregister = $_POST['tanggalregister'];
		$namasuami = $_POST['namasuami'];
		$alamatsuami = $_POST['alamatsuami'];
		$noktpsuami = $_POST['nomorktpsuami'];
		$statussuami = $_POST['statussuami'];
		$tanggallahirsuami = $_POST['tanggallahirsuami'];
		$pekerjaansuami = $_POST['pekerjaansuami'];
		$namaistri = $_POST['namaistri'];
		$alamatistri = $_POST['alamatistri'];
		$noktpistri = $_POST['nomorktpistri'];
		$statusistri = $_POST['statusistri'];
		$tanggallahiristri = $_POST['tanggallahiristri'];
		$pekerjaanistri = $_POST['pekerjaanistri'];
		$wali = $_POST['namawali'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal_register' => $tanggalregister,
			'nama_suami' => $namasuami,
			'alamat_suami' => $alamatsuami,
			'no_ktp_suami' => $noktpsuami,
			'status_suami' => $statussuami,
			'tanggal_lahir_suami' => $tanggallahirsuami,
			'pekerjaan_suami' => $pekerjaansuami,
			'nama_istri' => $namaistri,
			'alamat_istri' => $alamatistri,
			'no_ktp_istri' => $noktpistri,
			'status_istri' => $statusistri,
			'tanggal_lahir_istri' => $tanggallahiristri,
			'pekerjaan_istri' => $pekerjaanistri,
			'wali' => $wali,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_nikah_talak_cerai_rujuk->simpan($data);
		$aksi 	= 'Menyimpan data buku register nikah talak cerai rujuk keterangan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku register nikah talak cerai rujuk Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_register_nikah_talak_cerai_rujuk->hapus($id);
		$aksi 	= 'Menghapus data buku register nikah talak cerai rujuk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku register nikah talak cerai rujuk Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_lihat_buku_register_nikah_talak_cerai_rujuk',
			'ambildata' => $this->m_26_buku_register_nikah_talak_cerai_rujuk->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuregisternikahtalakcerairujuk()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Register Nikah Talak Cerai Rujuk '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_pdf_buku_register_nikah_talak_cerai_rujuk',
			'ambildata' => $this->m_26_buku_register_nikah_talak_cerai_rujuk->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_pdf_buku_register_nikah_talak_cerai_rujuk',$data);
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_excel_buku_register_nikah_talak_cerai_rujuk',
			'ambildata' => $this->m_26_buku_register_nikah_talak_cerai_rujuk->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_excel_buku_register_nikah_talak_cerai_rujuk',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/v_26_ubah_buku_register_nikah_talak_cerai_rujuk',
			'ambildata' => $this->m_26_buku_register_nikah_talak_cerai_rujuk->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggalregister = $_POST['tanggalregister'];
		$namasuami = $_POST['namasuami'];
		$alamatsuami = $_POST['alamatsuami'];
		$noktpsuami = $_POST['nomorktpsuami'];
		$statussuami = $_POST['statussuami'];
		$tanggallahirsuami = $_POST['tanggallahirsuami'];
		$pekerjaansuami = $_POST['pekerjaansuami'];
		$namaistri = $_POST['namaistri'];
		$alamatistri = $_POST['alamatistri'];
		$noktpistri = $_POST['nomorktpistri'];
		$statusistri = $_POST['statusistri'];
		$tanggallahiristri = $_POST['tanggallahiristri'];
		$pekerjaanistri = $_POST['pekerjaanistri'];
		$wali = $_POST['namawali'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'tanggal_register' => $tanggalregister,
			'nama_suami' => $namasuami,
			'alamat_suami' => $alamatsuami,
			'no_ktp_suami' => $noktpsuami,
			'status_suami' => $statussuami,
			'tanggal_lahir_suami' => $tanggallahirsuami,
			'pekerjaan_suami' => $pekerjaansuami,
			'nama_istri' => $namaistri,
			'alamat_istri' => $alamatistri,
			'no_ktp_istri' => $noktpistri,
			'status_istri' => $statusistri,
			'tanggal_lahir_istri' => $tanggallahiristri,
			'pekerjaan_istri' => $pekerjaanistri,
			'wali' => $wali,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_nikah_talak_cerai_rujuk->ubah($id,$data);
		$aksi 	= 'Mengubah data buku register nikah talak cerai rujuk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku register nikah talak cerai rujuk Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/';
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
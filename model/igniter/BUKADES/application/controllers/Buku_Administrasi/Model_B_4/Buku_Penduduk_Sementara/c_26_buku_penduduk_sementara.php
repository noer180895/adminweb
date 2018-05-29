<?php

/**
* 
*/
class C_26_buku_penduduk_sementara extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/m_26_buku_penduduk_sementara');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_tampil_buku_penduduk_sementara',
			'ambildata' => $this->m_26_buku_penduduk_sementara->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_tambah_buku_penduduk_sementara', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namalengkap = $_POST['namalengkap'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$notandapengenal = $_POST['notandapengenal'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$pekerjaan = $_POST['pekerjaan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$asalpenduduk = $_POST['asalpenduduk'];
		$tujuandatang = $_POST['tujuandatang'];
		$namaalamatyangdidatangi = $_POST['namaalamatyangdidatangi'];
		$tanggalkedatangan = $_POST['tanggalkedatangan'];
		$tanggalkepergian = $_POST['tanggalkepergian'];
		$keterangan = $_POST['keterangan'];



		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_lengkap' => $namalengkap,
			'jenis_kelamin' => $jeniskelamin,
			'no_tanda_pengenal' => $notandapengenal,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'asal_penduduk' => $asalpenduduk,
			'tujuan_datang' => $tujuandatang,
			'alamat_yang_didatangi' => $namaalamatyangdidatangi,
			'tanggal_kedatangan' => $tanggalkedatangan,
			'tanggal_kepergian' => $tanggalkepergian,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_penduduk_sementara->simpan($data);
		$aksi 	= 'Menyimpan data buku penduduk sementara';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku penduduk sementara Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/c_26_buku_penduduk_sementara/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_penduduk_sementara->hapus($id);
		$aksi 	= 'Menghapus data buku penduduk sementara';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku penduduk sementara Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/c_26_buku_penduduk_sementara/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_lihat_buku_penduduk_sementara',
			'ambildata' => $this->m_26_buku_penduduk_sementara->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukupenduduksementara()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Penduduk Sementara '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_pdf_buku_penduduk_sementara',
			'ambildata' => $this->m_26_buku_penduduk_sementara->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_pdf_buku_penduduk_sementara',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_excel_buku_penduduk_sementara',
			'ambildata' => $this->m_26_buku_penduduk_sementara->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_excel_buku_penduduk_sementara',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/v_26_ubah_buku_penduduk_sementara',
			'ambildata' => $this->m_26_buku_penduduk_sementara->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namalengkap = $_POST['namalengkap'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$notandapengenal = $_POST['notandapengenal'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$pekerjaan = $_POST['pekerjaan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$asalpenduduk = $_POST['asalpenduduk'];
		$tujuandatang = $_POST['tujuandatang'];
		$namaalamatyangdidatangi = $_POST['namaalamatyangdidatangi'];
		$tanggalkedatangan = $_POST['tanggalkedatangan'];
		$tanggalkepergian = $_POST['tanggalkepergian'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_lengkap' => $namalengkap,
			'jenis_kelamin' => $jeniskelamin,
			'no_tanda_pengenal' => $notandapengenal,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'pekerjaan' => $pekerjaan,
			'kewarganegaraan' => $kewarganegaraan,
			'asal_penduduk' => $asalpenduduk,
			'tujuan_datang' => $tujuandatang,
			'alamat_yang_didatangi' => $namaalamatyangdidatangi,
			'tanggal_kedatangan' => $tanggalkedatangan,
			'tanggal_kepergian' => $tanggalkepergian,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_penduduk_sementara->ubah($id,$data);
		$aksi 	= 'Mengubah data buku penduduk sementara';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku penduduk sementara Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/c_26_buku_penduduk_sementara/';
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
<?php

/**
* 
*/
class C_26_buku_pengurus_anggota_kemasyarakatan extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/m_26_buku_pengurus_anggota_kemasyarakatan');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_tampil_buku_pengurus_anggota_kemasyarakatan',
			'ambildata' => $this->m_26_buku_pengurus_anggota_kemasyarakatan->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_tambah_buku_pengurus_anggota_kemasyarakatan', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namalembaga = $_POST['namalembaga'];
		$tanggalperaturandesa = $_POST['tanggalperaturandesa'];
		$nomorperaturandesa = $_POST['nomorperaturandesa'];
		$namapengurus = $_POST['namapengurus'];
		$tanggalpengurus = $_POST['tanggallahirpengurus'];
		$pendidikanpengurus = $_POST['pendidikanpengurus'];
		$agamapengurus = $_POST['agamapengurus'];
		$jabatanpengurus = $_POST['jabatanpengurus'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_lembaga' => $namalembaga,
			'tanggal_peraturan_desa' => $tanggalperaturandesa,
			'nomor_peraturan_desa' => $nomorperaturandesa,
			'nama_pengurus' => $namapengurus,
			'tanggal_lahir_pengurus' => $tanggalpengurus,
			'pendidikan_pengurus' => $pendidikanpengurus,
			'agama_pengurus' => $agamapengurus,
			'jabatan_pengurus' => $jabatanpengurus,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_pengurus_anggota_kemasyarakatan->simpan($data);
		$aksi 	= 'Menyimpan data buku pengurus anggota kemasyarakatan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku pengurus anggota kemasyarakatan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/c_26_buku_pengurus_anggota_kemasyarakatan/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_pengurus_anggota_kemasyarakatan->hapus($id);
		$aksi 	= 'Menghapus data buku pengurus anggota kemasyarakatan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku pengurus anggota kemasyarakatan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/c_26_buku_pengurus_anggota_kemasyarakatan/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_lihat_buku_pengurus_anggota_kemasyarakatan',
			'ambildata' => $this->m_26_buku_pengurus_anggota_kemasyarakatan->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukupengurusanggotakemasyarakatan()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Pengurus Anggota Kemasyarakatan '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_pdf_buku_pengurus_anggota_kemasyarakatan',
			'ambildata' => $this->m_26_buku_pengurus_anggota_kemasyarakatan->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_pdf_buku_pengurus_anggota_kemasyarakatan',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_excel_buku_pengurus_anggota_kemasyarakatan',
			'ambildata' => $this->m_26_buku_pengurus_anggota_kemasyarakatan->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_excel_buku_pengurus_anggota_kemasyarakatan',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/v_26_ubah_buku_pengurus_anggota_kemasyarakatan',
			'ambildata' => $this->m_26_buku_pengurus_anggota_kemasyarakatan->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namalembaga = $_POST['namalembaga'];
		$tanggalperaturandesa = $_POST['tanggalperaturandesa'];
		$nomorperaturandesa = $_POST['nomorperaturandesa'];
		$namapengurus = $_POST['namapengurus'];
		$tanggalpengurus = $_POST['tanggallahirpengurus'];
		$pendidikanpengurus = $_POST['pendidikanpengurus'];
		$agamapengurus = $_POST['agamapengurus'];
		$jabatanpengurus = $_POST['jabatanpengurus'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_lembaga' => $namalembaga,
			'tanggal_peraturan_desa' => $tanggalperaturandesa,
			'nomor_peraturan_desa' => $nomorperaturandesa,
			'nama_pengurus' => $namapengurus,
			'tanggal_lahir_pengurus' => $tanggalpengurus,
			'pendidikan_pengurus' => $pendidikanpengurus,
			'agama_pengurus' => $agamapengurus,
			'jabatan_pengurus' => $jabatanpengurus,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_pengurus_anggota_kemasyarakatan->ubah($id,$data);
		$aksi 	= 'Mengubah data buku pengurus anggota kemasyarakatan';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku pengurus anggota kemasyarakatan Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/c_26_buku_pengurus_anggota_kemasyarakatan/';
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
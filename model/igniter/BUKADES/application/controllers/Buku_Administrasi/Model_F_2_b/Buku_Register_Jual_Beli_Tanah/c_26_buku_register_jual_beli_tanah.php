<?php

/**
* 
*/
class C_26_buku_register_jual_beli_tanah extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/m_26_buku_register_jual_beli_tanah');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_tampil_buku_register_jual_beli_tanah',
			'ambildata' => $this->m_26_buku_register_jual_beli_tanah->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_tambah_buku_register_jual_beli_tanah', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$tanggalsuratperjanjian = $_POST['tanggalsuratperjanjian'];
		$nomorsuratperjanjian = $_POST['nomorsuratperjanjian'];
		$namapenjual = $_POST['namapenjual'];
		$alamatpenjual = $_POST['alamatpenjual'];
		$namapembeli = $_POST['namapembeli'];
		$alamatpembeli = $_POST['alamatpembeli'];
		$nomorkitirgiriktanah = $_POST['nokitirgirik'];
		$nomorpersiltanah = $_POST['nopersil'];
		$jenistanah = $_POST['jenistanah'];
		$luastanah = $_POST['luastanah'];
		$batastanah = $_POST['bataskeliling'];
		$harga = $_POST['harga'];
		$syaratlain = $_POST['syaratlain'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'tanggal_surat_perjanjian' => $tanggalsuratperjanjian,
			'nomor_surat_perjanjian' => $nomorsuratperjanjian,
			'nama_penjual' => $namapenjual,
			'alamat_penjual' => $alamatpenjual,
			'nama_pembeli' => $namapembeli,
			'alamat_pembeli' => $alamatpembeli,
			'nomor_kitir_girik_tanah' => $nomorkitirgiriktanah,
			'nomor_persil_tanah' => $nomorpersiltanah,
			'jenis_tanah' => $jenistanah,
			'luas_tanah' => $luastanah,
			'batas_tanah' => $batastanah,
			'harga' => $harga,
			'syarat_lain' => $syaratlain,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_jual_beli_tanah->simpan($data);
		$aksi 	= 'Menyimpan data buku register jual beli tanah';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku register jual beli tanah Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_register_jual_beli_tanah->hapus($id);
		$aksi 	= 'Menghapus data buku register jual beli tanah';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku register jual beli tanah Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_lihat_buku_register_jual_beli_tanah',
			'ambildata' => $this->m_26_buku_register_jual_beli_tanah->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukuregisterjualbelitanah()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Register Jual Beli Tanah '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_pdf_buku_register_jual_beli_tanah',
			'ambildata' => $this->m_26_buku_register_jual_beli_tanah->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_pdf_buku_register_jual_beli_tanah',$data);
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}


	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_excel_buku_register_jual_beli_tanah',
			'ambildata' => $this->m_26_buku_register_jual_beli_tanah->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_excel_buku_register_jual_beli_tanah',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/v_26_ubah_buku_register_jual_beli_tanah',
			'ambildata' => $this->m_26_buku_register_jual_beli_tanah->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$tanggalsuratperjanjian = $_POST['tanggalsuratperjanjian'];
		$nomorsuratperjanjian = $_POST['nomorsuratperjanjian'];
		$namapenjual = $_POST['namapenjual'];
		$alamatpenjual = $_POST['alamatpenjual'];
		$namapembeli = $_POST['namapembeli'];
		$alamatpembeli = $_POST['alamatpembeli'];
		$nomorkitirgiriktanah = $_POST['nokitirgirik'];
		$nomorpersiltanah = $_POST['nopersil'];
		$jenistanah = $_POST['jenistanah'];
		$luastanah = $_POST['luastanah'];
		$batastanah = $_POST['bataskeliling'];
		$harga = $_POST['harga'];
		$syaratlain = $_POST['syaratlain'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'tanggal_surat_perjanjian' => $tanggalsuratperjanjian,
			'nomor_surat_perjanjian' => $nomorsuratperjanjian,
			'nama_penjual' => $namapenjual,
			'alamat_penjual' => $alamatpenjual,
			'nama_pembeli' => $namapembeli,
			'alamat_pembeli' => $alamatpembeli,
			'nomor_kitir_girik_tanah' => $nomorkitirgiriktanah,
			'nomor_persil_tanah' => $nomorpersiltanah,
			'jenis_tanah' => $jenistanah,
			'luas_tanah' => $luastanah,
			'batas_tanah' => $batastanah,
			'harga' => $harga,
			'syarat_lain' => $syaratlain,
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_register_jual_beli_tanah->ubah($id,$data);
		$aksi 	= 'Mengubah data buku register jual beli tanah';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku register jual beli tanah Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/';
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
<?php

/**
* 
*/
class C_26_buku_tanah_desa extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/m_26_buku_tanah_desa');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_tampil_buku_tanah_desa',
			'ambildata' => $this->m_26_buku_tanah_desa->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_tambah_buku_tanah_desa', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namaperorangan = $_POST['namaperorangan'];
		$jumlah = $_POST['jumlah'];
		$hakmilik = $_POST['hakmilik'];
		$hakgunabangunan = $_POST['hakgunabangunan'];
		$hakpakai = $_POST['hakpakai'];
		$hakgunausaha = $_POST['hakgunausaha'];
		$hakpengelolaan = $_POST['hakpengelolaan'];
		$hakmilikadat = $_POST['hakmilikadat'];
		$verpondingindonesie = $_POST['verpondingindonesie'];
		$tanahnegara = $_POST['tanahnegara'];
		$perumahan = $_POST['perumahan'];
		$perdaganganjasa = $_POST['perdaganganjasa'];
		$perkantoran = $_POST['perkantoran'];
		$industri = $_POST['industri'];
		$fasilitasumum = $_POST['fasilitasumum'];
		$sawah = $_POST['sawah'];
		$tegalan = $_POST['tegalan'];
		$perkebunan = $_POST['perkebunan'];
		$peternakanperikanan = $_POST['peternakanperikanan'];
		$hutanbelukar = $_POST['hutanbelukar'];
		$hutanlebatlindung = $_POST['hutanlebatlindung'];
		$tanahkosong = $_POST['tanahkosong'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nama_perorangan' => $namaperorangan,
			'jumlah' => $jumlah,
			'hak_milik' => $hakmilik,
			'hak_guna_bangunan' => $hakgunabangunan,
			'hak_pakai' => $hakpakai,
			'hak_guna_usaha' => $hakgunausaha, 
			'hak_pengelolaan' => $hakpengelolaan, 
			'hak_milik_adat' => $hakmilikadat, 
			'verponding_indonesie' => $verpondingindonesie, 
			'tanah_negara' => $tanahnegara, 
			'perumahan' => $perumahan, 
			'perdagangan_jasa' => $perdaganganjasa, 
			'perkantoran' => $perkantoran, 
			'industri' => $industri, 
			'fasilitas_umum' => $fasilitasumum, 
			'sawah' => $sawah, 
			'tegalan' => $tegalan, 
			'perkebunan' => $perkebunan, 
			'peternakan_perikanan' => $peternakanperikanan, 
			'hutan_belukar' => $hutanbelukar, 
			'hutan_lebat_lindung' => $hutanlebatlindung,
			'tanah_kosong' => $tanahkosong, 
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_tanah_desa->simpan($data);
		$aksi 	= 'Menyimpan data buku tanah di desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku tanah di desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_tanah_desa->hapus($id);
		$aksi 	= 'Menghapus data buku tanah di desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku tanah di desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_lihat_buku_tanah_desa',
			'ambildata' => $this->m_26_buku_tanah_desa->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukudatatanahdesa()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Data Tanah di Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_pdf_buku_tanah_desa',
			'ambildata' => $this->m_26_buku_tanah_desa->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_pdf_buku_tanah_desa',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}


	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_excel_buku_tanah_desa',
			'ambildata' => $this->m_26_buku_tanah_desa->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_excel_buku_tanah_desa',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/v_26_ubah_buku_tanah_desa',
			'ambildata' => $this->m_26_buku_tanah_desa->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namaperorangan = $_POST['namaperorangan'];
		$jumlah = $_POST['jumlah'];
		$hakmilik = $_POST['hakmilik'];
		$hakgunabangunan = $_POST['hakgunabangunan'];
		$hakpakai = $_POST['hakpakai'];
		$hakgunausaha = $_POST['hakgunausaha'];
		$hakpengelolaan = $_POST['hakpengelolaan'];
		$hakmilikadat = $_POST['hakmilikadat'];
		$verpondingindonesie = $_POST['verpondingindonesie'];
		$tanahnegara = $_POST['tanahnegara'];
		$perumahan = $_POST['perumahan'];
		$perdaganganjasa = $_POST['perdaganganjasa'];
		$perkantoran = $_POST['perkantoran'];
		$industri = $_POST['industri'];
		$fasilitasumum = $_POST['fasilitasumum'];
		$sawah = $_POST['sawah'];
		$tegalan = $_POST['tegalan'];
		$perkebunan = $_POST['perkebunan'];
		$peternakanperikanan = $_POST['peternakanperikanan'];
		$hutanbelukar = $_POST['hutanbelukar'];
		$hutanlebatlindung = $_POST['hutanlebatlindung'];
		$tanahkosong = $_POST['tanahkosong'];
		$keterangan = $_POST['keterangan'];

		$data = array(
			'tahun' => $tahun,
			'nama_perorangan' => $namaperorangan,
			'jumlah' => $jumlah,
			'hak_milik' => $hakmilik,
			'hak_guna_bangunan' => $hakgunabangunan,
			'hak_pakai' => $hakpakai,
			'hak_guna_usaha' => $hakgunausaha, 
			'hak_pengelolaan' => $hakpengelolaan, 
			'hak_milik_adat' => $hakmilikadat, 
			'verponding_indonesie' => $verpondingindonesie, 
			'tanah_negara' => $tanahnegara, 
			'perumahan' => $perumahan, 
			'perdagangan_jasa' => $perdaganganjasa, 
			'perkantoran' => $perkantoran, 
			'industri' => $industri, 
			'fasilitas_umum' => $fasilitasumum, 
			'sawah' => $sawah, 
			'tegalan' => $tegalan, 
			'perkebunan' => $perkebunan, 
			'peternakan_perikanan' => $peternakanperikanan, 
			'hutan_belukar' => $hutanbelukar, 
			'hutan_lebat_lindung' => $hutanlebatlindung,
			'tanah_kosong' => $tanahkosong, 
			'keterangan' => $keterangan, 
			);
		
		$this->m_26_buku_tanah_desa->ubah($id,$data);
		$aksi 	= 'Mengubah data buku tanah di desa';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku tanah di desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/';
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
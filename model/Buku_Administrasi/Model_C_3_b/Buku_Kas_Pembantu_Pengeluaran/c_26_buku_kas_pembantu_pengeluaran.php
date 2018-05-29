<?php

/**
* 
*/
class C_26_buku_kas_pembantu_pengeluaran extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/m_26_buku_kas_pembantu_pengeluaran');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_tampil_buku_kas_pembantu_pengeluaran',
			'ambildata' => $this->m_26_buku_kas_pembantu_pengeluaran->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(), 
			'hitungnomorspp' => $this->m_26_buku_kas_pembantu_pengeluaran->hitungnomorspp(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_tambah_buku_kas_pembantu_pengeluaran', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$nomorbkupengeluaran = $_POST['nomorbkupengeluaran'];
		$tanggalpengeluaran = $_POST['tanggalpengeluaran'];
		$nomorspp = $_POST['nomorspp'];
		$jumlah = $_POST['jumlah'];
		

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'nomor_bku_pengeluaran' => $nomorbkupengeluaran,
			'tanggal_pengeluaran' => $tanggalpengeluaran,
			'nomor_spp' => $nomorspp,
			'jumlah' => $jumlah, 
			);
		
		$this->m_26_buku_kas_pembantu_pengeluaran->simpan($data);
		$aksi 	= 'Menyimpan data buku kas pembantu pengeluaran';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku kas pembantu pengeluaran Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/C_26_buku_kas_pembantu_pengeluaran';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_kas_pembantu_pengeluaran->hapus($id);
		$aksi 	= 'Menghapus data buku kas pembantu pengeluaran';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku kas pembantu pengeluaran Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/C_26_buku_kas_pembantu_pengeluaran/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_lihat_buku_kas_pembantu_pengeluaran',
			'ambildata' => $this->m_26_buku_kas_pembantu_pengeluaran->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukukaspembantupengeluaran()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Kas Pembantu Pengeluaran '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		$jumlahBulanIni		= $this->m_26_buku_kas_pembantu_pengeluaran->SumBulanIni('jumlah');
		$jumlahBulanLalu	= $this->m_26_buku_kas_pembantu_pengeluaran->SumBulanLalu('jumlah');
		$jumlahSemuaBulan	= $this->m_26_buku_kas_pembantu_pengeluaran->SumSemuaBulan('jumlah');
		
		if (empty($jumlahBulanIni[0]->jumlah)) {
			$jumlahBulanIni		= "0";
		}else{
			$jumlahBulanIni		= $jumlahBulanIni[0]->jumlah;
		}
		if (empty($jumlahSemuaBulan[0]->jumlah)) {
			$jumlahSemuaBulan		= "0";
		}else{
			$jumlahSemuaBulan	= $jumlahSemuaBulan[0]->jumlah;
		}
		if (empty($jumlahBulanLalu[0]->jumlah)) {
			$jumlahBulanLalu		= "0";
		}else{
			$jumlahBulanLalu	= $jumlahBulanLalu[0]->jumlah;
		}
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_pdf_buku_kas_pembantu_pengeluaran',
			'ambildata' => $this->m_26_buku_kas_pembantu_pengeluaran->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(), 
			'hitungnomorspp' => $this->m_26_buku_kas_pembantu_pengeluaran->hitungnomorspp(),
			'jumlahBulanLalu'	=> $jumlahBulanLalu,
			'jumlahBulanIni'	=> $jumlahBulanIni,
			'jumlahSemuaBulan'	=> $jumlahSemuaBulan,
			);
		$this->load->view('main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_pdf_buku_kas_pembantu_pengeluaran',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$jumlahBulanIni		= $this->m_26_buku_kas_pembantu_pengeluaran->SumBulanIni('jumlah');
		$jumlahBulanLalu	= $this->m_26_buku_kas_pembantu_pengeluaran->SumBulanLalu('jumlah');
		$jumlahSemuaBulan	= $this->m_26_buku_kas_pembantu_pengeluaran->SumSemuaBulan('jumlah');
		
		if (empty($jumlahBulanIni[0]->jumlah)) {
			$jumlahBulanIni		= "0";
		}else{
			$jumlahBulanIni		= $jumlahBulanIni[0]->jumlah;
		}
		if (empty($jumlahSemuaBulan[0]->jumlah)) {
			$jumlahSemuaBulan		= "0";
		}else{
			$jumlahSemuaBulan	= $jumlahSemuaBulan[0]->jumlah;
		}
		if (empty($jumlahBulanLalu[0]->jumlah)) {
			$jumlahBulanLalu		= "0";
		}else{
			$jumlahBulanLalu	= $jumlahBulanLalu[0]->jumlah;
		}
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_excel_buku_kas_pembantu_pengeluaran',
			'ambildata' => $this->m_26_buku_kas_pembantu_pengeluaran->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(), 
			'hitungnomorspp' => $this->m_26_buku_kas_pembantu_pengeluaran->hitungnomorspp(),
			'jumlahBulanLalu'	=> $jumlahBulanLalu,
			'jumlahBulanIni'	=> $jumlahBulanIni,
			'jumlahSemuaBulan'	=> $jumlahSemuaBulan,
			);
		$this->load->view('main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_excel_buku_kas_pembantu_pengeluaran',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/v_26_ubah_buku_kas_pembantu_pengeluaran',
			'ambildata' => $this->m_26_buku_kas_pembantu_pengeluaran->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$nomorbkupengeluaran = $_POST['nomorbkupengeluaran'];
		$tanggalpengeluaran = $_POST['tanggalpengeluaran'];
		$nomorspp = $_POST['nomorspp'];
		$jumlah = $_POST['jumlah'];
		

		$data = array(
			'tahun' => $tahun,
			'nomor_bku_pengeluaran' => $nomorbkupengeluaran,
			'tanggal_pengeluaran' => $tanggalpengeluaran,
			'nomor_spp' => $nomorspp,
			'jumlah' => $jumlah, 
			);
		
		$this->m_26_buku_kas_pembantu_pengeluaran->ubah($id,$data);
		$aksi 	= 'Mengubah data buku kas pembantu pengeluaran';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku kas pembantu pengeluaran Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/C_26_buku_kas_pembantu_pengeluaran/';
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
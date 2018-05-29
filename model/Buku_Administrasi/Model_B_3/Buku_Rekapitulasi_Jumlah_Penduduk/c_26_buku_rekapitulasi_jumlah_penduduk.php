<?php

/**
* 
*/
class C_26_buku_rekapitulasi_jumlah_penduduk extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/m_26_buku_rekapitulasi_jumlah_penduduk');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('m_log');
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_tampil_buku_rekapitulasi_jumlah_penduduk',
			'ambildata' => $this->m_26_buku_rekapitulasi_jumlah_penduduk->ambildata(), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function tambah()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_tambah_buku_rekapitulasi_jumlah_penduduk', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpan()
	{
		$tahun = $_POST['tahun'];
		$namadusun = $_POST['namadusun'];
		$jumlahkkawalbulan = $_POST['jumlahkkawalbulan'];
		$wnaawallakilaki = $_POST['wnaawallakilaki'];
		$wnaawalperempuan = $_POST['wnaawalperempuan'];
		$wniawallakilaki = $_POST['wniawallakilaki'];
		$wniawalperempuan = $_POST['wniawalperempuan'];
		$jumlahanggotakkawalbulan = $_POST['jumlahanggotakkawalbulan'];
		$jumlahpendudukawalbulan = $_POST['jumlahpendudukawalbulan'];
		$penambahanwnalahirlakilaki = $_POST['wnalahirlakilaki'];
		$penambahanwnalahirperempuan = $_POST['wnalahirperempuan'];
		$penambahanwnilahirlakilaki = $_POST['wnilahirlakilaki'];
		$penambahanwnilahirperempuan = $_POST['wnilahirperempuan'];
		$penambahanwnapindahlakilaki = $_POST['wnapindahlakilaki'];
		$penambahanwnapindahperempuan = $_POST['wnapindahperempuan'];
		$penambahanwnipindahlakilaki = $_POST['wnipindahlakilaki'];
		$penambahanwnipindahperempuan = $_POST['wnipindahperempuan'];
		$penguranganwnakematianlakilaki = $_POST['wnakematianlakilaki'];
		$penguranganwnakematianperempuan = $_POST['wnakematianperempuan'];
		$penguranganwnikematianlakilaki = $_POST['wnikematianlakilaki'];
		$penguranganwnikematianperempuan = $_POST['wnikematianperempuan'];
		$penguranganwnapindahlakilaki = $_POST['wnapenguranganpindahlakilaki'];
		$penguranganwnapindahperempuan = $_POST['wnapenguranganpindahperempuan'];
		$penguranganwnipindahlakilaki = $_POST['wnipenguranganpindahlakilaki'];
		$penguranganwnipindahperempuan = $_POST['wnipenguranganpindahperempuan'];
		$wnaakhirlakilaki = $_POST['wnaakhirlakilaki'];
		$wnaakhirperempuan = $_POST['wnaakhirperempuan'];
		$wniakhirlakilaki = $_POST['wniakhirlakilaki'];
		$wniakhirperempuan = $_POST['wniakhirperempuan'];
		$jumlahkkakhirbulan = $_POST['jumlahkkakhirbulan'];
		$jumlahanggotakeluargaakhirbulan = $_POST['jumlahanggotakeluargaakhirbulan'];
		$jumlahpendudukakhir = $_POST['jumlahpendudukakhir'];

		$data = array(
			'id' => "",
			'tahun' => $tahun,
			'dusun' => $namadusun,
			'jumlah_kk_awal_bulan' => $jumlahkkawalbulan,
			'wna_awal_laki_laki' => $wnaawallakilaki,
			'wna_awal_perempuan' => $wnaawalperempuan,
			'wni_awal_laki_laki' => $wniawallakilaki,
			'wni_awal_perempuan' => $wniawalperempuan,
			'jumlah_anggota_kk_awal_bulan' => $jumlahanggotakkawalbulan,
			'jumlah_penduduk_awal_bulan' => $jumlahpendudukawalbulan,
			'penambahan_wna_lahir_laki_laki' => $penambahanwnalahirlakilaki,
			'penambahan_wna_lahir_perempuan' => $penambahanwnalahirperempuan,
			'penambahan_wni_lahir_laki_laki' => $penambahanwnilahirlakilaki,
			'penambahan_wni_lahir_perempuan' => $penambahanwnilahirperempuan,
			'penambahan_wna_pindah_laki_laki' => $penambahanwnapindahlakilaki,
			'penambahan_wna_pindah_perempuan' => $penambahanwnapindahperempuan,
			'penambahan_wni_pindah_laki_laki' => $penambahanwnipindahlakilaki,
			'penambahan_wni_pindah_perempuan' => $penambahanwnipindahperempuan,
			'pengurangan_wna_kematian_laki_laki' => $penguranganwnakematianlakilaki,
			'pengurangan_wna_kematian_perempuan' => $penguranganwnakematianperempuan,
			'pengurangan_wni_kematian_laki_laki' => $penguranganwnikematianlakilaki,
			'pengurangan_wni_kematian_perempuan' => $penguranganwnikematianperempuan,
			'pengurangan_wna_pindah_laki_laki' => $penguranganwnapindahlakilaki,
			'pengurangan_wna_pindah_perempuan' => $penguranganwnapindahperempuan,
			'pengurangan_wni_pindah_laki_laki' => $penguranganwnipindahlakilaki,
			'pengurangan_wni_pindah_perempuan' => $penguranganwnipindahperempuan,
			'wna_akhir_laki_laki' => $wnaakhirlakilaki,
			'wna_akhir_perempuan' => $wnaakhirperempuan,
			'wni_akhir_laki_laki' => $wniakhirlakilaki,
			'wni_akhir_perempuan' => $wniakhirperempuan,
			'jumlah_kk_akhir_bulan' => $jumlahkkakhirbulan,
			'jumlah_anggota_keluarga_akhir_bulan' => $jumlahanggotakeluargaakhirbulan,
			'jumlah_penduduk_akhir' => $jumlahpendudukakhir, 
			);
		
		$this->m_26_buku_rekapitulasi_jumlah_penduduk->simpan($data);
		$aksi 	= 'Menyimpan data buku rekapitulasi jumlah penduduk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data buku rekapitulasi jumlah penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/C_26_buku_rekapitulasi_jumlah_penduduk/';
				</script>
			";
		
	}

	public function hapus()
	{
		$id=$_GET['id'];
		$hapus = $this->m_26_buku_rekapitulasi_jumlah_penduduk->hapus($id);
		$aksi 	= 'Menghapus data buku rekapitulasi jumlah penduduk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data buku rekapitulasi jumlah pendudukk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/';
				</script>
			";
	}

	public function lihat()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_lihat_buku_rekapitulasi_jumlah_penduduk',
			'ambildata' => $this->m_26_buku_rekapitulasi_jumlah_penduduk->ambildataberdasarkan($id), 
			);
		$this->load->view('v_23_index',$data);
	}

	public function pdfbukurekapitulasijumlahpenduduk()
	{
		$a = date('H')+5;
		$nama_dokumen='Buku Rekapitulasi Jumlah Penduduk Desa '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
		 
		ob_start();

		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_pdf_buku_rekapitulasi_jumlah_penduduk',
			'ambildata' => $this->m_26_buku_rekapitulasi_jumlah_penduduk->ambildata(), 
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_pdf_buku_rekapitulasi_jumlah_penduduk',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_excel_buku_rekapitulasi_jumlah_penduduk',
			'ambildata' => $this->m_26_buku_rekapitulasi_jumlah_penduduk->ambildata(), 
			);
		$this->load->view('main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_excel_buku_rekapitulasi_jumlah_penduduk',$data);
	}

	public function ubah()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/v_26_ubah_buku_rekapitulasi_jumlah_penduduk',
			'ambildata' => $this->m_26_buku_rekapitulasi_jumlah_penduduk->ambildataberdasarkan($id), 
			'id' =>$id,
			);
		$this->load->view('v_23_index',$data);
	}

	public function ubahdata()
	{
		$id = $_POST['id'];
		$tahun = $_POST['tahun'];
		$namadusun = $_POST['namadusun'];
		$jumlahkkawalbulan = $_POST['jumlahkkawalbulan'];
		$wnaawallakilaki = $_POST['wnaawallakilaki'];
		$wnaawalperempuan = $_POST['wnaawalperempuan'];
		$wniawallakilaki = $_POST['wniawallakilaki'];
		$wniawalperempuan = $_POST['wniawalperempuan'];
		$jumlahanggotakkawalbulan = $_POST['jumlahanggotakkawalbulan'];
		$jumlahpendudukawalbulan = $_POST['jumlahpendudukawalbulan'];
		$penambahanwnalahirlakilaki = $_POST['wnalahirlakilaki'];
		$penambahanwnalahirperempuan = $_POST['wnalahirperempuan'];
		$penambahanwnilahirlakilaki = $_POST['wnilahirlakilaki'];
		$penambahanwnilahirperempuan = $_POST['wnilahirperempuan'];
		$penambahanwnapindahlakilaki = $_POST['wnapindahlakilaki'];
		$penambahanwnapindahperempuan = $_POST['wnapindahperempuan'];
		$penambahanwnipindahlakilaki = $_POST['wnipindahlakilaki'];
		$penambahanwnipindahperempuan = $_POST['wnipindahperempuan'];
		$penguranganwnakematianlakilaki = $_POST['wnakematianlakilaki'];
		$penguranganwnakematianperempuan = $_POST['wnakematianperempuan'];
		$penguranganwnikematianlakilaki = $_POST['wnikematianlakilaki'];
		$penguranganwnikematianperempuan = $_POST['wnikematianperempuan'];
		$penguranganwnapindahlakilaki = $_POST['wnapenguranganpindahlakilaki'];
		$penguranganwnapindahperempuan = $_POST['wnapenguranganpindahperempuan'];
		$penguranganwnipindahlakilaki = $_POST['wnipenguranganpindahlakilaki'];
		$penguranganwnipindahperempuan = $_POST['wnipenguranganpindahperempuan'];
		$wnaakhirlakilaki = $_POST['wnaakhirlakilaki'];
		$wnaakhirperempuan = $_POST['wnaakhirperempuan'];
		$wniakhirlakilaki = $_POST['wniakhirlakilaki'];
		$wniakhirperempuan = $_POST['wniakhirperempuan'];
		$jumlahkkakhirbulan = $_POST['jumlahkkakhirbulan'];
		$jumlahanggotakeluargaakhirbulan = $_POST['jumlahanggotakeluargaakhirbulan'];
		$jumlahpendudukakhir = $_POST['jumlahpendudukakhir'];

		$data = array(
			'tahun' => $tahun,
			'dusun' => $namadusun,
			'jumlah_kk_awal_bulan' => $jumlahkkawalbulan,
			'wna_awal_laki_laki' => $wnaawallakilaki,
			'wna_awal_perempuan' => $wnaawalperempuan,
			'wni_awal_laki_laki' => $wniawallakilaki,
			'wni_awal_perempuan' => $wniawalperempuan,
			'jumlah_anggota_kk_awal_bulan' => $jumlahanggotakkawalbulan,
			'jumlah_penduduk_awal_bulan' => $jumlahpendudukawalbulan,
			'penambahan_wna_lahir_laki_laki' => $penambahanwnalahirlakilaki,
			'penambahan_wna_lahir_perempuan' => $penambahanwnalahirperempuan,
			'penambahan_wni_lahir_laki_laki' => $penambahanwnilahirlakilaki,
			'penambahan_wni_lahir_perempuan' => $penambahanwnilahirperempuan,
			'penambahan_wna_pindah_laki_laki' => $penambahanwnapindahlakilaki,
			'penambahan_wna_pindah_perempuan' => $penambahanwnapindahperempuan,
			'penambahan_wni_pindah_laki_laki' => $penambahanwnipindahlakilaki,
			'penambahan_wni_pindah_perempuan' => $penambahanwnipindahperempuan,
			'pengurangan_wna_kematian_laki_laki' => $penguranganwnakematianlakilaki,
			'pengurangan_wna_kematian_perempuan' => $penguranganwnakematianperempuan,
			'pengurangan_wni_kematian_laki_laki' => $penguranganwnikematianlakilaki,
			'pengurangan_wni_kematian_perempuan' => $penguranganwnikematianperempuan,
			'pengurangan_wna_pindah_laki_laki' => $penguranganwnapindahlakilaki,
			'pengurangan_wna_pindah_perempuan' => $penguranganwnapindahperempuan,
			'pengurangan_wni_pindah_laki_laki' => $penguranganwnipindahlakilaki,
			'pengurangan_wni_pindah_perempuan' => $penguranganwnipindahperempuan,
			'wna_akhir_laki_laki' => $wnaakhirlakilaki,
			'wna_akhir_perempuan' => $wnaakhirperempuan,
			'wni_akhir_laki_laki' => $wniakhirlakilaki,
			'wni_akhir_perempuan' => $wniakhirperempuan,
			'jumlah_kk_akhir_bulan' => $jumlahkkakhirbulan,
			'jumlah_anggota_keluarga_akhir_bulan' => $jumlahanggotakeluargaakhirbulan,
			'jumlah_penduduk_akhir' => $jumlahpendudukakhir, 
			);
		
		$this->m_26_buku_rekapitulasi_jumlah_penduduk->ubah($id,$data);
		$aksi 	= 'Mengubah data buku rekapitulasi jumlah penduduk';
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data buku rekapitulasi jumlah penduduk desa Berhasil');
					window.location='".base_url()."Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/';
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
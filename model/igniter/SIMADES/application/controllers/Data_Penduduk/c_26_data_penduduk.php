<?php

/**
* 
*/
class C_26_data_penduduk extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
			$this->load->model('m_log');
			$this->load->model('Data_Penduduk/m_26_data_penduduk');
			$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
	}

	public function popup()
	{
		$data = array(
			'view' => 'main_page/Data_Penduduk/v_26_pop_up_aksi',
			);
		$this->load->view('main_page/Data_Penduduk/v_26_pop_up_aksi');
	}

	public function index()
	{

		$data = array(
			'view' => 'main_page/Data_Penduduk/v_26_data_penduduk',
				'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
			);
		$this->load->view('v_23_index', $data);
	}

	public function lihat()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/Data_Penduduk/v_26_lihat_data_penduduk',
			'ambil' => $this->m_26_data_penduduk->ambildataberdasarkan($id),
			);
		$this->load->view('v_23_index',$data);

				$aksi 	= 'Melihat data penduduk';
				$this->m_log->log($aksi);
	}

	public function ubah()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/Data_Penduduk/v_26_ubah_data_penduduk',
			'ambil' => $this->m_26_data_penduduk->ambildataberdasarkan($id),
			'rowa' => $this->m_26_Perangkat_Desa->ambildata(),
			'id' => $id,
			);
		$this->load->view('v_23_index',$data);
		
	}

	public function ubahdata()
	{
		$where = $_POST['id'];
		$nokk = $_POST['txtnomorkk'];
		$nonik = $_POST['txtnomornik'];
		$nama = $_POST['txtnama'];
		$tempatlahir = $_POST['txttempatlahir'];
		$tanggallahir = $_POST['txttanggallahir'];
		$jk = $_POST['jeniskelamin'];
		$gd = $_POST['golongandarah'];
		$alamat = $_POST['alamat'];
		$txtrt = $_POST['txtrt'];
		$txtrw = $_POST['txtrw'];
		$agama = $_POST['agama'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$pendidikanterakhir = $_POST['pendidikanterakhir'];
		$pekerjaan = $_POST['txtpekerjaan'];
		$hubungankeluarga = $_POST['hubungankeluarga'];
		$kewarganegaraan = $_POST['txtkewarganegaraan'];
		$namaayah = $_POST['txtnamaayah'];
		$namaibu = $_POST['txtnamaibu'];
		$namadesa = $_POST['namadesa'];
		$namakecamatan = $_POST['namakecamatan'];
		$namakabupaten = $_POST['namakabupaten'];
				
			
		
		$data = array(
			'no_kk' => $nokk,
			'no_NIK' => $nonik,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jk,
			'golongan_darah' => $gd,
			'Alamat' => $alamat,
			'RT' => $txtrt,
			'RW' => $txtrw,
			'nama_desa' => $namadesa,
			'nama_kecamatan' => $namakecamatan,
			'nama_kabupaten' => $namakabupaten,
			'agama' => $agama,
			'status_perkawinan' => $statusperkawinan,
			'pendidikan_terakhir' => $pendidikanterakhir,
			'pekerjaan' => $pekerjaan,
			'hubungan_keluarga' => $hubungankeluarga,
			'kewarganegaraan' => $kewarganegaraan,
			'nama_ayah' => $namaayah,
			'nama_ibu' => $namaibu,
			
			);
		
		$this->m_26_data_penduduk->ubah($data,$where);

				$aksi 	= 'Mengubah data penduduk dengan nomor NIK '.$nonik;
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengubahan data berhasil dengan');
					window.location='".base_url()."Data_Penduduk/c_26_data_penduduk';
				</script>
			";
		
	}

	public function hapus()
	{
		$id = $_GET['id'];
		$hasilHapus = $this->m_26_data_penduduk->hapus($id);
	
		$aksi 	= 'Menghapus data penduduk ';
		$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Penghapusan data berhasil');
					window.location='".base_url()."Data_Penduduk/c_26_data_penduduk';
				</script>
			";
	
	}

	public function tambahdata()
	{
		$data = array(
			'view' => 'main_page/Data_Penduduk/v_26_tambah_penduduk',
			);
		$this->load->view('v_23_index', $data);
	}

	public function simpan()
	{
		$nokk = $_POST['txtnomorkk'];
		$nonik = $_POST['txtnomornik'];
		$nama = $_POST['txtnama'];
		$tempatlahir = $_POST['txttempatlahir'];
		$tanggallahir = $_POST['txttanggallahir'];
		$jk = $_POST['jeniskelamin'];
		$gd = $_POST['golongandarah'];
		$alamat = $_POST['alamat'];
		$txtrt = $_POST['txtrt'];
		$txtrw = $_POST['txtrw'];
		$agama = $_POST['agama'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$pendidikanterakhir = $_POST['pendidikanterakhir'];
		$pekerjaan = $_POST['txtpekerjaan'];
		$hubungankeluarga = $_POST['hubungankeluarga'];
		$kewarganegaraan = $_POST['txtkewarganegaraan'];
		$namaayah = $_POST['txtnamaayah'];
		$namaibu = $_POST['txtnamaibu'];

		$row = $this->m_26_Perangkat_Desa->ambildata();
		foreach ($row as $rowdesa) {
			
		
		$data = array(
			'id' => '',
			'no_kk' => $nokk,
			'no_NIK' => $nonik,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jk,
			'golongan_darah' => $gd,
			'Alamat' => $alamat,
			'RT' => $txtrt,
			'RW' => $txtrw,
			'nama_desa' => $rowdesa->nama_desa,
			'nama_kecamatan' => $rowdesa->nama_kecamatan,
			'nama_kabupaten' => $rowdesa->nama_kabupaten,
			'agama' => $agama,
			'status_perkawinan' => $statusperkawinan,
			'pendidikan_terakhir' => $pendidikanterakhir,
			'pekerjaan' => $pekerjaan,
			'hubungan_keluarga' => $hubungankeluarga,
			'kewarganegaraan' => $kewarganegaraan,
			'nama_ayah' => $namaayah,
			'nama_ibu' => $namaibu,
			
			);
		}
		$this->m_26_data_penduduk->simpan($data);

				$aksi 	= 'Menyimpan data penduduk dengan nama '.$nama;
				$this->m_log->log($aksi);
		echo 
			"
				<script>
					alert('Pengisian data Penduduk Berhasil');
					window.location='".base_url()."Data_Penduduk/c_26_data_penduduk/';
				</script>
			";
	}
}

?>
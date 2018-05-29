<?php
	/**
	* 
	*/
	class C_23_pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('pegawai/m_23_pegawai');
			$this->load->model('auth/m_23_log');
			$this->load->model('m_log');
		}


		public function index()
		{
			$lihat = $this->m_23_pegawai->lihat();
			$data = array(
				'view' => 'main_page/pegawai/v_23_dataPegawai' , 
				'ambil' => $lihat,
				);
			$this->load->view('v_23_index', $data);
		}

		public function viewTambah()
		{
			$data = array(
				'view' => 'main_page/pegawai/v_23_pegawai' , 
				);
			$this->load->view('v_23_index', $data);
		}
		
		public function lihat()
		{
			$id = $_GET['id'];
			$dataTampilCari = array(
				'NIP' => $id , 
				);
			$lihat = $this->m_23_pegawai->cari($dataTampilCari);
			$data = array(
				'view' => 'main_page/pegawai/v_23_lihatPegawai.php',
				'row' => $lihat[0],
				);
			$this->load->view('v_23_index',$data);
		}

		public function ubah()
		{
			$id = $_GET['id'];
			$dataTampilCari = array(
				'NIP' => $id , 
				);
			$lihat = $this->m_23_pegawai->cari($dataTampilCari);
			$data = array(
				'view' => 'main_page/pegawai/v_23_ubahPegawai.php',
				'row' => $lihat[0],
				);
			$this->load->view('v_23_index',$data);
		}
		public function fungsiUbah()
		{
			$nip 		= $_POST['txtNIP'];
			$nama 		= $_POST['txtNama'];
			$hp 		= $_POST['txtHp'];
			$alamat 	= $_POST['txtAlamat'];
			$jk 		= $_POST['JK'];
			
			$dataWhere = array(
				'NIP' => $nip , 
				);
			$dataUpdate = array(
				'NIP' => $nip , 
				'nama' => $nama , 
				'hp' => $hp , 
				'alamat' => $alamat , 
				'jenis_kelamin' => $jk , 
				);
			$hasilUbah = $this->m_23_pegawai->ubah($dataUpdate, $dataWhere);
			if ($hasilUbah == 1) {
				$aksi 	= 'Mengubah data pegawai dengan NIP '.$nip;
				$this->m_log->log($aksi);
				echo 
					"
						<script>
							alert('Pengubahan data berhasil');
							window.location='".base_url()."pegawai/c_23_pegawai';
						</script>
					";
			}else{
				echo 
					"
						<script>
							alert('Data gagal di ubah');
						</script>
					";
			}

		}

		public function hapus()
		{
			$nip = $_GET['id'];
			$hasilHapus = $this->m_23_pegawai->hapus($nip);
			if ($hasilHapus == 1) {
				$aksi 	= 'Menghapus data pegawai dengan NIP '.$nip;
				$this->m_log->log($aksi);
				echo 
					"
						<script>
							alert('Penghapusan data berhasil');
							window.location='".base_url()."pegawai/c_23_pegawai';
						</script>
					";
			}else{
				echo 
					"
						<script>
							alert('Data gagal di hapus');
						</script>
					";
			}

		}

		public function simpan()
		{
			$nip 		= $_POST['txtNIP'];
			$nama 		= $_POST['txtNama'];
			$hp 		= $_POST['txtHp'];
			$alamat 	= $_POST['txtAlamat'];
			$jk 		= $_POST['JK'];
			$status 	= 'Aktif';
			if ($jk == "Laki-Laki") {
				$foto		= 'assets/foto/DeffaultMan.jpg';
			}else{
				$foto		= 'assets/foto/DeffaultWoman.jpg';
			}

			$dataSimpan = array(
				'NIP' => $nip,
				'nama' => $nama,
				'hp' => $hp,
				'alamat' => $alamat,
				'status' => $status,
				'jenis_kelamin' => $jk,
				'foto' => $foto, 
				);
			$simpan = $this->m_23_pegawai->simpan($dataSimpan);
			if ($simpan == 1) {
				$aksi 	= 'Menambah data pegawai dengan NIP '.$nip;
				$this->m_log->log($aksi);
				echo 
					"
						<script>
							alert('Penyimpanan data berhasil');
							window.location='".base_url()."pegawai/c_23_pegawai';
						</script>
					";
			}else{
				echo 
					"
						<script>
							alert('Data gagal di simpan');
						</script>
					";
			}

		}

		public function pdf()
		{
			$data = array(
				'view' => 'main_page/pegawai/v_23_pegawai' , 
				);
			
			
			$nama_dokumen='Nota Cicilan'; //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A5zz'); // Create new mPDF Document
			 
			//Beginning Buffer to save PHP variables and HTML tags
			ob_start();

			$this->load->view('v_23_index', $data);

		
			$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
			ob_end_clean();
			//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}
	}
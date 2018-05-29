<?php
	/**
	* 
	*/
	class C_23_user extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('user/m_23_user');
			$this->load->model('m_log');
		}

		public function index()
		{
			$tampil = $this->m_23_user->tampilSemua();
			$data = array(
				'view' => 'main_page/user/v_23_user' ,
				'tampil' => $tampil , 
				);
			$this->load->view('v_23_index',$data);
		}

		public function lihat()
		{
			$id = $_GET['id'];
			$dataTampilCari = array(
				'nip' => $id , 
				);
			$lihat = $this->m_23_user->cari($dataTampilCari);
			$data = array(
				'view' => 'main_page/user/v_23_lihatuser.php',
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
			$lihat = $this->m_23_user->cari($dataTampilCari);
			$data = array(
				'view' => 'main_page/user/v_23_ubahuser.php',
				'row' => $lihat[0],
				);
			$this->load->view('v_23_index',$data);
		}

		public function fungsiUbah()
		{
			$nip 		= $_POST['txtNIP'];
			$email 		= $_POST['txtEmail'];
			$status 	= $_POST['Status'];
			$level 		= $_POST['Level'];
			
			$dataWhere = array(
				'nip' => $nip , 
				);
			$dataUpdate = array(
				'nip' => $nip , 
				'email' => $email , 
				'status' => $status , 
				'level' => $level , 
				);
			$hasilUbah = $this->m_23_user->ubah($dataUpdate, $dataWhere);
			if ($hasilUbah == 1) {
				$aksi 	= 'Mengubah data user dengan NIP '.$nip;
				$this->m_log->log($aksi);
				echo 
					"
						<script>
							alert('Pengubahan data berhasil');
							window.location='".base_url()."user/c_23_user';
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
			$hasilHapus = $this->m_23_user->hapus($nip);
			if ($hasilHapus == 1) {
				$aksi 	= 'Menghapus data user dengan NIP '.$nip;
				$this->m_log->log($aksi);
				echo 
					"
						<script>
							alert('Penghapusan data berhasil');
							window.location='".base_url()."user/c_23_user';
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
	}
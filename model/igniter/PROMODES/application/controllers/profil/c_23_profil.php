<?php
	/**
	* 
	*/
	class C_23_profil extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('profil/m_23_profil');
			$this->load->model('m_log');

		}
		public function index()
		{
			$data = array(
				'view' => 'main_page/profil/v_23_profil.php' , 
				);
			$this->load->view('v_23_index', $data);
		}

		public function ubahprofil()
		{
			$foto               = $_FILES['file_foto']['name'];
			$foldergambar 		= "assets/foto/";
			$alamatgambar 		= $foldergambar.$foto;
	        
	        if ($alamatgambar == "assets/foto/") {
	        	$alamatgambar = $_POST['hidden_foto'];
	        }
			$upload= move_uploaded_file($_FILES['file_foto']['tmp_name'], $alamatgambar);
	        $nama               = $_POST['txtNama'];
	        $nip                = $_POST['txtNIP'];
	        $hp                 = $_POST['txtHp'];
	        $email				= $_POST['txtEmail'];
	        $alamat             = $_POST['txtAlamat'];
	        $password			= md5($_POST['txtPassword']);
	        $id = array(
	        	'nip' => $nip , );
	        $dataAuth = array(
	        	'nip' => $nip, 
	        	'password' => $password, 
	        	'email' => $email, 
	        	);
	        $dataPegawai = array(
	        	'nip' => $nip, 
	        	'nama' => $nama, 
	        	'hp' => $hp, 
	        	'alamat' => $alamat, 
	        	'foto' => $alamatgambar, 
	        	);
	        $result = $this->m_23_profil->ubahprofile($dataPegawai, $dataAuth, $id);
	        if ($result == 1) {
	        	$aksi = "Mengubah data profil";
	        	$this->m_log->log($aksi);
	        	?>
	        		<script type="text/javascript"> 
	        			alert('Berhasil ubah data');
	        			window.location="<?php echo base_url() ?>profil/C_23_profil"
	        		</script>
	        	<?php
	        }else {
	        	?>
	        		<script type="text/javascript"> 
	        			alert('Gagal ubah data');
	        			window.location="<?php echo base_url() ?>profil/C_23_profil"
	        		</script>
	        	<?php
	        }

		}
	}
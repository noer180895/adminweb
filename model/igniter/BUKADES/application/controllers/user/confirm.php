<?php
	/**
	* 
	*/
	class Confirm extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_log');
			$this->load->model('auth/m_23_daftar');
		}
		public function index()
		{
			if (isset($_GET['email']) && isset($_GET['id'])) {
				$email 		= $_GET['email'];
				$verifikasi = $_GET['id'];
				$row = $this->m_log->getNipUserTanpaSession($email);
				// cek status
					$cari = array(
						'email' => $email , 
						);
					$this->db->select('*');
		            $this->db->from('auth');
		            $this->db->where($cari);
		            $query = $this->db->get();
		            $row   = $query->result();
	            // !cek status
				if ($row[0]->status == 'Aktif') {
					?>
					<script >
						window.location="<?php echo base_url()?>";
					</script>
					<?php
				}else{
					$dataWhere = array(
						'email' => $email , 
						'status' => $verifikasi , 
						);
					$this->m_23_daftar->verifikasi($dataWhere);
					$aksi = "Verifikasi email berhasil dengan id ".$verifikasi;
					$this->m_log->logLupas($aksi, $row[0]->nip);
					?>
					<script >
						alert('Verifikasi berhasil, silahkan login menggunakan Email dan Password anda');
						window.location="<?php echo base_url()?>";
					</script>
					<?php
				}
			}else{
				?>
				<script >
					window.location="<?php echo base_url()?>";
				</script>
				<?php
			}

		}
	}
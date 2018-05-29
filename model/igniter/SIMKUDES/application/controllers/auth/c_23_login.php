<?php
	/**
	* 
	*/
	class C_23_login extends Ci_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('auth/m_23_auth');
			$this->load->model('m_log');

		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/auth/v_23_login' , 
				);
			if (isset($_SESSION['salah'])) {
					if ($_SESSION['salah'] == 3) {
						echo 
							"
								<script>
									alert('Anda sudah gagal 3x login');
									window.location='".base_url()."auth/c_23_login/captcha';
								</script>
							";
					}else{
						$this->load->view('v_23_auth',$data);
					}
				}else{
						$this->load->view('v_23_auth',$data);
					}
			
		}
		public function captchaSukses()
		{
			$sessdata = array(
				'salah',
				);
			$this->session->unset_userdata($sessdata);
			?>
			<script type="text/javascript">
				window.location="<?php echo base_url()?>"
			</script>
			<?php
		}
		public function captcha()
		{
			// load the session library
			$this->load->library('session');
			$this->load->helper(array('captcha','url'));
	 
	        // if form was submitted and given captcha word matches one in session
	        if ($this->input->post() && ($this->input->post('secutity_code') == $this->session->userdata('mycaptcha'))) {
				$this->captchaSukses();
	        }
			else
			{
	            // load codeigniter captcha helper
	            $this->load->helper('captcha');
	 
	            $vals = array(
	                'img_path'	 => './captcha/',
	                'img_url'	 => base_url().'captcha/',
	                'img_width'	 => '200',
	                'img_height' => 30,
	                'border' => 0, 
	                'expiration' => 7200
	            );
	 
	            // create captcha image
	            $cap = create_captcha($vals);
	 
	            // store the captcha word in a session
	            $this->session->set_userdata('mycaptcha', $cap['word']);	
			$data = array(
				'view' => 'include/demo' , 
				'image' => $cap['image']
				);
			$this->load->view('v_23_auth', $data);
			}
		}

		public function logout()
		{
			if (isset($_SESSION['email'])) {
				// ============================================
				// mengambil data lewat model m_23_auth->tampil
				// =============================================
					$modelData = array(
						'email' => $_SESSION['email'] , 
						);
					$tampil = $this->m_23_auth->tampil($modelData);
				// =================================================
				// # mengambil data lewat model m_23_auth->tampil #
				// =================================================

				// ============================================
				// penyimpanan log lewat model m_log
				// =============================================
					$aksi 	= "Me-Logout email ".$tampil[0]->email;
					$this->m_log->log($aksi);

				// =================================================
				// # penyimpanan log lewat model m_log #
				// =================================================
			}
			$sessdata = array(
				'email',
				'level',
				'salah',
				);
			$this->session->unset_userdata($sessdata);
			header('location:'.base_url());
		}

		public function login()
			{
				$email = $_POST['txtEmail'];
				$password = md5($_POST['txtPassword']);
				// ========================================================================
				// mengecek email dan password dari database lewat model m_23_auth -> login
				// ========================================================================
					$modelData = array(
						'email' => $email ,
						'password' => $password , 
						);
					$hasil = $this->m_23_auth->login($modelData);
				// ============================================================================
				// # mengecek email dan password dari database lewat model m_23_auth -> login #
				// ============================================================================
				if ($hasil == 1) {
					// =========================================
					// mengecek apakah akun aktif atau tidak
					// =========================================
						$modelData = array(
							'email' => $email ,
							'password' => $password ,
							'status' => 'Aktif' 
							);
						$hasil = $this->m_23_auth->login($modelData);
					// =========================================
					// # mengecek apakah akun aktif atau tidak #
					// =========================================
					if ($hasil == 1) {
						// ============================================
						// mengambil data lewat model m_23_auth->tampil
						// =============================================
							$modelData = array(
								'email' => $email ,
								'password' => $password , 
								);
							$tampil = $this->m_23_auth->tampil($modelData);
						// =================================================
						// # mengambil data lewat model m_23_auth->tampil #
						// =================================================

						// ============================================
						// penyimpanan log lewat model m_log
						// =============================================
							$aksi 	= "Login dengan email ".$tampil[0]->email;
							$this->m_log->logTanpasession($aksi, $tampil[0]->email);

						// =================================================
						// # penyimpanan log lewat model m_log #
						// =================================================

						// =======================
						// menambahkan session
						// =======================
							$sessdata = array(
								'email' => $tampil[0]->email ,
								'level' => $tampil[0]->level , 
								);
							$this->session->set_userdata($sessdata);
						// =======================
						// # menambahkan session #
						// =======================
						echo "<script>
								window.location='".base_url()."beranda/c_26_beranda'
							  </script>
							 ";
					}else{
						?>
						<script>
							alert('Akun anda belum aktif, silahkan verifikasi akun anda melalui email anda');
							window.location='<?php echo base_url()?>';
						</script>
						<?php
					}
				}else{
					if (isset($_SESSION['salah'])) {
						$_SESSION['salah'] = $_SESSION['salah'] + 1;
					}else{
						$_SESSION['salah'] = 1;
					}
					echo "<script>
							alert('Email atau Password tidak ditemukan');
							window.location='".base_url()."auth/c_23_login'
						  </script>
						 ";
				}
				
			}	
	}
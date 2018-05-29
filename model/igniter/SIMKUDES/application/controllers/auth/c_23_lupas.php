<?php
	/**
	* 
	*/
	class C_23_lupas extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('auth/m_23_lupas');
			$this->load->model('m_log');
		}
		public function index()
		{
			$this->captcha();
		}

		public function lupaPassword()
		{
			$email	= $_POST['txtEmail'];
			$nip 	= $_POST['txtNip'];
			$where = array(
				'email' => $email ,
				'nip' => $nip , 
				);
			$hasil = $this->m_23_lupas->ubahPassword($where);
			if ($hasil == 1) {
				$passwordBaru = rand();
				$this->sendMail($passwordBaru, $email);
				$dataUpdate = array(
					'password' => md5($passwordBaru) , 
					);
				$dataWhere = array(
					'nip' => $nip , 
					);
				$hasilUbah = $this->m_23_lupas->updatePassword($dataUpdate, $dataWhere);
				if ($hasilUbah == 1) {
					$aksi 	= 'Melupa Password';
					$this->m_log->logLupas($aksi, $nip);
					?>
						<script>
							alert('Password anda sudah dikirim melalui e-mail anda');
							window.location ='<?php echo base_url() ?>';
						</script>
					<?php
				}else{
					?>
						<script>
							alert('Password anda gagal dikirim ke e-mail anda, hubungi administrator');
							window.location ='<?php echo base_url() ?>';
						</script>
					<?php
				}
			}else{
				?>
						<script>
							alert('Password gagal di reset, pastikan E-mail dan NIP sudah benar');
							window.location ='<?php echo base_url() ?>auth/c_23_lupas/';
						</script>
					<?php
			}
			
		}


		function sendMail($password,$email) {
	        $this->load->library('email');

            $config['protocol']    = 'smtp';

            $config['smtp_host']    = 'ssl://smtp.gmail.com';

            $config['smtp_port']    = '465';

            $config['smtp_timeout'] = '7';

            $config['smtp_user']    = 'kresnaaji28@gmail.com';

            $config['smtp_pass']    = '9981576889';

            $config['charset']    = 'utf-8';

            $config['newline']    = "\r\n";

            $config['mailtype'] = 'text'; // or html

            $config['validation'] = TRUE; // bool whether to validate email or not      

            $this->email->initialize($config);


            $this->email->from('kresnaaji28@gmail.com', 'softindotech');
            $this->email->to($email); 


            $this->email->subject('Recovery Password');

            $message = "Password anda sekarang adalah ".$password." silahkan login menggunakan password tersebut";

            $this->email->message($message);  

            $this->email->send();

            echo $this->email->print_debugger();
    	}

    	public function captchaSukses()
		{
			$this->lupaPassword();
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
				if (isset($_POST['Submit'])) {
					?>
						<script type="text/javascript">

						</script>
					<?php
				}
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
				'view' => 'main_page/auth/v_23_lupas' ,  
				'image' => $cap['image']
				);
			$this->load->view('v_23_auth', $data);
			}
		}
	}
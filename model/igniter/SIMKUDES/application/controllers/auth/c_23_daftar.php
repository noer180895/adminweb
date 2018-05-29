<?php
	/**
	* 
	*/
	class C_23_daftar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_log');
			$this->load->model('auth/m_23_daftar');
		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/auth/v_23_daftar' , 
				);
			$this->load->view('v_23_auth',$data);
		}

		public function fungsiDaftar()
		{
			$email 		= $_POST['txtEmail'];
			$nip 		= $_POST['txtNip'];
			$password 	= md5($_POST['txtPassword']);

			$dataCek = array(
				'email' => $email , );
			$cekEmail = $this->m_23_daftar->cekEmail($dataCek);
			if ($cekEmail == 0) {
				$dataCek = array(
					'NIP' => $nip , );
				$cekNIP = $this->m_23_daftar->cekNIP($dataCek);
				if ($cekNIP == 1) {
					$verifikasi = rand();
					$dataInsert = array(
					'email' => $email , 
					'nip' => $nip , 
					'password' => $password , 
					'status' => $verifikasi ,
					'last_log' => 'Daftar dengan email '.$email ,
					'level' => 2 ,
					);
					$this->m_23_daftar->daftar($dataInsert);
					$aksi = "Daftar dengan email ".$email;
					$this->m_log->logLupas($aksi, $nip);
					$this->sendMail($verifikasi, $email);
					?>
					<script>
						alert('Pendaftaran berhasil, silahkan lakukan verifikasi email dahulu');
						window.location="<?php echo base_url() ?>"
					</script>
					<?php
				}else{
					?>
					<script>
						alert('NIP yang anda gunakan tidak terdaftar');
						window.location="<?php echo base_url() ?>auth/C_23_daftar"
					</script>
					<?php	
				}
			}else{
				?>
				<script>
					alert('Email yang anda gunakan sudah terdaftar');
					window.location="<?php echo base_url() ?>auth/C_23_daftar"
				</script>
				<?php
			}
		}

		function sendMail($id,$email) {
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


            $this->email->subject('Konfirmasi Email');

            $message = "Silahkan masuk ke http://localhost/kerjaan/SIMKUDES/auth/confirm?email=".$email."&id=".$id;

            $this->email->message($message);  

            $this->email->send();

            echo $this->email->print_debugger();
    	}
	}
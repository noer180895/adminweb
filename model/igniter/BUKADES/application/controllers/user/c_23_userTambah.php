<?php
	/**
	* 
	*/
	class C_23_userTambah extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('user/m_23_user');
			$this->load->model('m_log');
		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/user/v_23_tambahUser' ,
				);
			$this->load->view('v_23_index',$data);
		}
		public function fungsiTambah()
		{
			$nip 		= $_POST['txtNIP'];
			$email 		= $_POST['txtEmail'];
			$password 	= md5($_POST['txtPassword']);
			$status		= $_POST['Status'];
			$level 		= $_POST['Level'];

			if ($level == 0) {
				?>
					<script type="text/javascript">
						alert('Pilih level terlebih dahulu');
						window.location="<?php echo base_url() ?>user/c_23_userTambah"
					</script>
				<?php
			}else{
				$dataCek = array(
					'email' => $email , );
				$cekEmail = $this->m_23_user->cekEmail($dataCek);
				if ($cekEmail == 1) {
					?>
					<script>
						alert('Email yang anda gunakan sudah terdaftar');
						window.location="<?php echo base_url() ?>user/C_23_user"
					</script>
					<?php
				}else{
					$dataCek = array(
						'NIP' => $nip , );
					$cekNIP = $this->m_23_user->cekNIP($dataCek);
					if ($cekNIP == 0) {
						?>
						<script>
							alert('NIP yang digunakan belum ada dalam database');
							window.location="<?php echo base_url() ?>user/C_23_user"
						</script>
						<?php
					}else{
						$aksiuser = "Didaftarkan oleh admin";
						$dataTambah = array(
							'nip' => $nip ,
							'email' => $email ,
							'password' => $password ,
							'status' => $status ,
							'last_log' => $aksiuser ,
							'level' => $level ,
							);
						$this->m_23_user->tambah($dataTambah);
						$aksi = "Mendaftarkan user dengan email ".$email;
						$this->m_log->log($aksi);
						if ($status != "Aktif" || $status != "Tidak Aktif") {
							$this->sendMail($status, $email);
						}
						?>
							<script type="text/javascript">
								alert('Data berhasil di tambahkan');
								window.location="<?php echo base_url()?>user/c_23_user"
							</script>
						<?php
					}// tutup kondisi (else) $cekNIP == 0
				}// tutup kondisi (else) $cekEmail == 0
			} //tutup kondisi (else) level == 0
		}// tutup fungsi tambah
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

            $message = "Silahkan masuk ke http://localhost/kerjaan/SIMKUDES/user/confirm?email=".$email."&id=".$id;

            $this->email->message($message);  

            $this->email->send();

            echo $this->email->print_debugger();
    	}//tutup fungsi sendmail
	}//tutup class
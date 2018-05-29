<?php
	/**
	* 
	*/
	class C_log extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('auth/c_23_log');
		}

		public function log($aksi, $nip)
		{
				$modelData = array(
						'id' => '' ,
						'aksi' => $aksi , 
						'nip' => $nip ,
						'waktu' => ''
						);
				$logInput 	= $this->m_23_log->insert($modelData);

				$inputUbah = array(
					'last_log' => $aksi , 
					);
				$inputWhere = array(
					'nip' => $nip , 
					);
				$tabel = "auth";
				$logUpdate 	= $this->m_23_log->update($inputUbah, $inputWhere, $tabel);
		}
	}
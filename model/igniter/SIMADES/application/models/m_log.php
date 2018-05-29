<?php
	/**
	* 
	*/
	class M_log extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('auth/m_23_log');
		}

		public function getNipUser()
		{
			$email = $_SESSION['email'];
                                        
            $cari = array(
                'email' => $email , 
                );
			$this->db->select('*');
            $this->db->from('auth');
            $this->db->join('pegawai', 'pegawai.NIP = auth.NIP');
            $this->db->where($cari);
            $query              = $this->db->get();
            return $result             = $query->result();
		}
		public function getNipUserTanpaSession($email)
		{                                        
            $cari = array(
                'email' => $email , 
                );
			$this->db->select('*');
            $this->db->from('auth');
            $this->db->join('pegawai', 'pegawai.NIP = auth.NIP');
            $this->db->where($cari);
            $query              = $this->db->get();
            return $result             = $query->result();
		}
		public function logTanpasession($aksi, $email)
		{
				$result = $this->getNipUserTanpaSession($email);
				$nipUser 	= $result[0]->nip;
				$modelData = array(
						'id' => '' ,
						'aksi' => $aksi , 
						'nip' => $nipUser ,
						);
				$logInput 	= $this->m_23_log->insert($modelData);

				$inputUbah = array(
					'last_log' => $aksi , 
					);
				$inputWhere = array(
					'nip' => $nipUser , 
					);
				$tabel = "auth";
				$logUpdate 	= $this->m_23_log->update($inputUbah, $inputWhere, $tabel);
				return 1;
		}
		public function log($aksi)
		{
				$result = $this->getNipUser();
				$nipUser 	= $result[0]->nip;
				$modelData = array(
						'id' => '' ,
						'aksi' => $aksi , 
						'nip' => $nipUser ,
						);
				$logInput 	= $this->m_23_log->insert($modelData);

				$inputUbah = array(
					'last_log' => $aksi , 
					);
				$inputWhere = array(
					'nip' => $nipUser , 
					);
				$tabel = "auth";
				$logUpdate 	= $this->m_23_log->update($inputUbah, $inputWhere, $tabel);
				return 1;
		}
		public function logLupas($aksi, $nip)
		{
				$modelData = array(
						'id' => '' ,
						'aksi' => $aksi , 
						'nip' => $nip ,
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
				return 1;
		}
	}
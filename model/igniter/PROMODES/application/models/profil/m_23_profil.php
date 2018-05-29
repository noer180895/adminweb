<?php
	/**
	* 
	*/
	class M_23_profil extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function ubahprofile($data1, $data2, $where)
		{
			$this->db->where($where);
			$this->db->update('pegawai',$data1);

			$this->db->where($where);
			$this->db->update('auth',$data2);

			return 1;

		}
	}
<?php
	/**
	* 
	*/
	class M_23_daftar extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();

		}
		public function cekEmail($where)
		{
			$this->db->select('*');
			$this->db->from('auth');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->num_rows();
		}
		public function cekNIP($where)
		{
			$this->db->select('*');
			$this->db->from('pegawai');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->num_rows();
		}
		public function daftar($data)
		{
			$this->db->insert('auth' , $data);
		}
		public function verifikasi($where)
		{
			$data = array(
				'status' => 'Aktif'
				);
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('auth');
		}
	}
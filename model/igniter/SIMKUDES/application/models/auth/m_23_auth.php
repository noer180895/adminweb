<?php
	/**
	* 
	*/
	class M_23_auth extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function login($data)
		{
			$this->db->select('*');
			$this->db->from('auth');
			$this->db->where($data);
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function tampil($data)
		{
			$query = $this->db->get_where('auth', $data);
			return $query->result();
		}
	}
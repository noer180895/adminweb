<?php
	/**
	* 
	*/
	class M_23_lupas extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function ubahPassword($data)
		{
			$this->db->select('*');
			$this->db->from('auth');
			$this->db->where($data);
			$query = $this->db->get();
			return $result = $query->num_rows();
		}

		public function updatePassword($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('auth');
			return 1;
		}
	}
<?php
	/**
	* 
	*/
	class M_23_log extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}
		public function insert($data)
		{
			$this->db->insert('log', $data);
		}
		public function update($data, $where, $tabel)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update($tabel);
		}
		public function lihat()
		{	
			$this->db->select('*');
			$this->db->from('log');
			$this->db->order_by('id', 'desc');
			$query = $this->db->get();
			return $result = $query->result();
		}
	}
<?php
	/**
	* 
	*/
	class M_23_user extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function tampilSemua()
		{
			$query = $this->db->get('auth');
			return $result = $query->result();
		}
		public function cari($data)
		{
			$this->db->select('*');
			$this->db->from('auth');
			$this->db->where($data);
			$query = $this->db->get();
			return $result = $query->result();
		}
		public function ubah($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('auth');
			return 1;
		}
		public function hapus($where)
		{
			$this->db->where('nip', $where);
			$this->db->delete('auth');
			return 1;
		}
		public function tambah($data)
		{
			$this->db->insert('auth' , $data);
		}
		public function cekNIP($where)
		{
			$this->db->select('*');
			$this->db->from('pegawai');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->num_rows();
		}
		public function cekEmail($where)
		{
			$this->db->select('*');
			$this->db->from('auth');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->num_rows();
		}
	}
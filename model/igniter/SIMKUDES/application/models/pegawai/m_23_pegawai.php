	<?php
	/**
	* 
	*/
	class M_23_pegawai extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function simpan($data)
		{
			$this->db->insert('pegawai', $data);
			return 1;
		}
		public function lihat()
		{
			$this->db->select('*');
			$this->db->from('pegawai');
			$query = $this->db->get();
			return $result = $query->result();
		}
		public function cari($data)
		{
			$this->db->select('*');
			$this->db->from('pegawai');
			$this->db->where($data);
			$query = $this->db->get();
			return $result = $query->result();
		}
		public function ubah($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('pegawai');
			return 1;
		}
		public function hapus($where)
		{
			$this->db->where('NIP', $where);
			$this->db->delete('pegawai');

			$this->db->where('nip', $where);
			$this->db->delete('auth');
			return 1;
		}
	}
<?php 
	/**
	* 
	*/
	class M_23_APBDes extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function template_select($tabel)
		{
			$this->db->select('*');
			$this->db->from($tabel);
			$query = $this->db->get();
			return $query->result();
		}
		public function template_select_where($tabel, $where)
		{
			$this->db->select('*');
			$this->db->from($tabel);
			$this->db->where($where);
			$query = $this->db->get();
			return $query->result();
		}
		public function template_simpan($tabel, $dataSimpan)
		{
			$this->db->insert($tabel, $dataSimpan);
		}
		public function template_hapus($tabel, $where)
		{
			$this->db->where($where);
			$this->db->delete($tabel);
		}
		public function select_order_by($tabel)
		{
			$this->db->select('*');
			$this->db->from($tabel);
			$this->db->order_by('nomor_rekening', 'asc');
			$query = $this->db->get();
			return $query->result();
		}
	}
?>
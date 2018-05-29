<?php
	/**
	* 
	*/
	class M_23_bukubankdesa extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function insert($data)
		{
			$this->db->insert('buku_bank_desa', $data);
		}

		public function select()
		{
			$this->db->select('*');
			$this->db->from('buku_bank_desa');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result  = $query->result();
		}

		public function selectDesc()
		{
			$this->db->select('*');
			$this->db->from('buku_bank_desa');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->order_by('id', 'desc');
			$query = $this->db->get();
			return $result  = $query->result();
		}

		public function selectSum($field)
		{
			$this->db->select_sum($field);
			$this->db->from('buku_bank_desa');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectWhere($where)
		{
			$this->db->select('*');
			$this->db->from('buku_bank_desa');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectWhereTahun($where)
		{
			$this->db->select('*');
			$this->db->from('buku_bank_desa');
			$this->db->where($where);
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function delete($data)
		{
			$this->db->where($data);
			$this->db->delete('buku_bank_desa');
		}
		public function update($dataUpdate, $dataWhere)
		{
			$this->db->where($dataWhere);
			$this->db->update('buku_bank_desa', $dataUpdate);
		}
	}
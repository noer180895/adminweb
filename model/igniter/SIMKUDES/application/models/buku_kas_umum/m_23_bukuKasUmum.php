<?php
	/**
	* 
	*/
	class M_23_bukuKasUmum extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		/*
		=====================
			  Template
		=====================
		*/

		public function templateSimpan($tabel, $data)
		{
			$this->db->insert($tabel, $data);
		}

		public function templateHapus($tabel, $data)
		{
			$this->db->where($data);
			$this->db->delete($tabel);
		}

		public function templateUpdate($tabel, $where, $data)
		{
			$this->db->where($where);
			$this->db->update($tabel, $data);
		}

		/*
		=====================
		#	  Template 	#
		=====================
		*/

		public function insert($data)
		{
			$this->db->insert('buku_kas_Umum', $data);
		}

		public function select()
		{
			$this->db->select('*');
			$this->db->from('buku_kas_Umum');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result  = $query->result();
		}

		public function selectDesc()
		{
			$this->db->select('*');
			$this->db->from('buku_kas_Umum');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->order_by('id', 'desc');
			$query = $this->db->get();
			return $result  = $query->result();
		}

		public function selectSum($field)
		{
			$this->db->select_sum($field);
			$this->db->from('buku_kas_Umum');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectWhere($where)
		{
			$this->db->select('*');
			$this->db->from('buku_kas_Umum');
			$this->db->where($where);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function selectWhereTahun($where)
		{
			$this->db->select('*');
			$this->db->from('buku_kas_Umum');
			$this->db->where($where);
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function delete($data)
		{
			$this->db->where($data);
			$this->db->delete('buku_kas_Umum');
		}
		public function update($dataUpdate, $dataWhere)
		{
			$this->db->where($dataWhere);
			$this->db->update('buku_kas_Umum', $dataUpdate);
		}
	}
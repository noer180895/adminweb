<?php 
	/**
	* 
	*/
	class M_23_buku_kas_umum extends CI_Model
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

		public function SumBulanLalu($field)
		{
			$query = "SELECT SUM(".$field.") as '".$field."' FROM `bukades_buku_kas_umum` WHERE MONTH('2016-06-02') < MONTH(CURDATE())";
			$sql = $this->db->query($query);
			return $result = $sql->result();
		}

		public function SumBulanIni($field)
		{
			$query = "SELECT SUM(".$field.") as '".$field."' FROM `bukades_buku_kas_umum` WHERE MONTH(CURDATE())";
			$sql = $this->db->query($query);
			return $result = $sql->result();
		}

		public function SumSemuaBulan($field)
		{
			$query = "SELECT SUM(".$field.") as '".$field."' FROM `bukades_buku_kas_umum` WHERE YEAR(CURDATE())";
			$sql = $this->db->query($query);
			return $result = $sql->result();
		}
	}
?>
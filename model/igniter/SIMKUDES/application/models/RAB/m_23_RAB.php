<?php
	/**
	* 
	*/
	class M_23_RAB extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function insert($data)
		{
			$this->db->insert('rab', $data);
		}

		public function cekRABpertahun($tahun)
		{
			$this->db->select('*');
			$this->db->from('rab');
			$this->db->where('tahun', $tahun);
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function ambilItemRekening($data)
		{
			// $this->db->select('*');
			// $this->db->from('item_rekening');
			// $this->db->join('rekening_tahunan', 'rekening_tahunan.nomor_rekening = item_rekening.nomor_rekening');
			// $this->db->where($data);
			$query = 
					"	SELECT * FROM rekening_tahunan
						INNER JOIN item_rekening
						ON rekening_tahunan.nomor_rekening = item_rekening.nomor_rekening
						WHERE item_rekening.tahun = ".$data." AND item_rekening.tahun = rekening_tahunan.tahun
					";
			$query = $this->db->query($query);
			return $result = $query->result();
		}

		public function ambilRekening($data)
		{
			$query = 
					"	SELECT * FROM item_rekening
						INNER JOIN rekening_tahunan
						ON rekening_tahunan.nomor_rekening = item_rekening.nomor_rekening
						WHERE item_rekening.tahun = ".$data." AND item_rekening.tahun = rekening_tahunan.tahun
					";
			$query = $this->db->query($query);
			return $result = $query->result();
		}

		public function hitungJumlahAnggaran($data)
		{
			$this->db->select_sum('jumlah');
			$this->db->from('rab');
			$this->db->where($data);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function updateHeadRAB($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('rab');
		}

		public function selectWhereRAB($where)
		{
			$this->db->select('*');
			$this->db->where($where);
			$this->db->from('rab');
			$query = $this->db->get();
			return $query->result();
		}
	}
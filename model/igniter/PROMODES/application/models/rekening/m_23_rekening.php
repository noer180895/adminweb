<?php
	/**
	* 
	*/
	class M_23_rekening extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function lihat()
		{
			$this->db->select('*');
			$this->db->from('rekening');
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function tambah($data)
		{
			$this->db->insert('rekening', $data);
		}

		public function cekRekening($where)
		{
			$query = $this->db->get_where('rekening', $where);
			return $result = $query->num_rows();
		}
		public function cekRekeningUbah($where, $id)
		{
			$query = $this->db->get_where('rekening', $where);
			$result = $query->num_rows();
			$hasil = $query->result();
			if ($result == 1) {
				if ($hasil[0]->nomor_rekening == $id ) {
					return 0;
				}else{
					return 1;
				}
			}else{
				return 0;
			}
		}
		public function cariRekening($where)
		{
			$query = $this->db->get_where('rekening', $where);
			return $result = $query->result();
		}
		public function ubah($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('rekening');
		}
		public function hapus($data)
		{
			$this->db->where('nomor_rekening', $data);
			$this->db->delete('rekening');
			return 1;
		}
	}
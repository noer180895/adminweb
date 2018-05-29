<?php

/**
* 
*/
class M_26_buku_kas_harian_pembantu extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_kas_harian_pembantu', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_kas_harian_pembantu');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_kas_harian_pembantu');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_kas_harian_pembantu');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_kas_harian_pembantu',$data);
	}

	public function jumlah($tabel)
	{
        $this->db->select_sum($tabel);
        $this->db->from('buku_kas_harian_pembantu');
        $query = $this->db->get();
        $jumlah = $query->result();
        return $jumlah;
	}
}

?>
<?php

/**
* 
*/
class M_26_buku_kegiatan_pembangunan extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_kegiatan_pembangunan', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_kegiatan_pembangunan');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_kegiatan_pembangunan');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_kegiatan_pembangunan');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_kegiatan_pembangunan',$data);
	}
}

?>
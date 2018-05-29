<?php

/**
* 
*/
class M_26_buku_keputusan_bpd extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_data_keputusan_bpd', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_data_keputusan_bpd');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_data_keputusan_bpd');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_data_keputusan_bpd');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_data_keputusan_bpd',$data);
	}
}

?>
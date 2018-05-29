<?php

/**
* 
*/
class M_26_buku_pengurus_anggota_kemasyarakatan extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_pengurus_anggota_kemasyarakatan', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_pengurus_anggota_kemasyarakatan');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_pengurus_anggota_kemasyarakatan');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_pengurus_anggota_kemasyarakatan');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_pengurus_anggota_kemasyarakatan',$data);
	}
}

?>
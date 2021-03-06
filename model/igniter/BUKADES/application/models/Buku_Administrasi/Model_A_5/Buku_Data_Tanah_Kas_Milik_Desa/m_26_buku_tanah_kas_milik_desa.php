<?php

/**
* 
*/
class M_26_buku_tanah_kas_milik_desa extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_data_tanah_kas_milik_desa', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_data_tanah_kas_milik_desa');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_data_tanah_kas_milik_desa');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_data_tanah_kas_milik_desa');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_data_tanah_kas_milik_desa',$data);
	}
}

?>
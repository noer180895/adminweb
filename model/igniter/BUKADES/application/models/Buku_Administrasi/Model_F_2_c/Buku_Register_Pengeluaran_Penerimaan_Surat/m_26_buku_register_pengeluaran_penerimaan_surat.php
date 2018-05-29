<?php

/**
* 
*/
class M_26_buku_register_pengeluaran_penerimaan_surat extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_register_pengeluaran_penerimaan_surat', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_register_pengeluaran_penerimaan_surat');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_register_pengeluaran_penerimaan_surat');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_register_pengeluaran_penerimaan_surat');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_register_pengeluaran_penerimaan_surat',$data);
	}
}

?>
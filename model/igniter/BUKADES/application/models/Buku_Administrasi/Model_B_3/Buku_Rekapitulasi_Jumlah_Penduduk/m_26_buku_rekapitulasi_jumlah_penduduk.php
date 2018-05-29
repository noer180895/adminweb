<?php

/**
* 
*/
class M_26_buku_rekapitulasi_jumlah_penduduk extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_rekapitulasi_penduduk_akhir_bulan', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_rekapitulasi_penduduk_akhir_bulan');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_rekapitulasi_penduduk_akhir_bulan');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_rekapitulasi_penduduk_akhir_bulan');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_rekapitulasi_penduduk_akhir_bulan',$data);
	}
}

?>
<?php

/**
* 
*/
class M_26_data_perusahaan extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('data_perusahaan');
		return $query->result();
	}
	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('data_perusahaan');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	

	public function simpan($data)
	{
		$this->db->insert('data_perusahaan', $data);
	}
	
	public function ubah($data, $where)
	{
		$this->db->set($data);
		$this->db->where('id',$where);
		$this->db->update('data_perusahaan');
		return 1;
	}
	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('data_perusahaan');
	}

}

?>
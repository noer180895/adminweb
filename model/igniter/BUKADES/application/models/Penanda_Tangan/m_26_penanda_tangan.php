<?php


/**
* 
*/
class M_26_penanda_tangan extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function ubahpenandatangan($data)
	{
		$this->db->where('id',1);
		$this->db->update('data_penanda_tangan',$data);
	}
	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('data_penanda_tangan');
		$this->db->where('id',1);
		$query = $this->db->get();
		return $query->result();
	}
	
}

?>
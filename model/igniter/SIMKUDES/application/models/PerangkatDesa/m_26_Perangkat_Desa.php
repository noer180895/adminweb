<?php

/**
* 
*/
class M_26_Perangkat_Desa extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('perangkat_desa');
		return $query->result();
	}

	public function ubahProfilDesa($data, $where)
	{
		$this->db->where($where);
		$this->db->update('perangkat_desa', $data);
	}
}

?>
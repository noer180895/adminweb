<?php

/**
* 
*/
class M_26_buku_kas_pembantu_penerimaan extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('buku_kas_pembantu_penerimaan', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$this->db->from('buku_kas_pembantu_penerimaan');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('buku_kas_pembantu_penerimaan');
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('buku_kas_pembantu_penerimaan');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubah($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('buku_kas_pembantu_penerimaan',$data);
	}

	public function jumlah($tabel)
	{
        $this->db->select_sum($tabel);
        $this->db->from('buku_kas_pembantu_penerimaan');
        $query = $this->db->get();
        $jumlah = $query->result();
        return $jumlah;
	}

	public function hitungnomorsts()
	{
		$this->db->from('buku_kas_pembantu_penerimaan');
		$query = $this->db->count_all_results();
		return $query;
	}

	public function SumBulanLalu($field)
	{
		$query = "SELECT SUM(".$field.") as '".$field."' FROM `buku_kas_pembantu_penerimaan` WHERE MONTH('2016-06-02') < MONTH(CURDATE())";
		$sql = $this->db->query($query);
		return $result = $sql->result();
	}

	public function SumBulanIni($field)
	{
		$query = "SELECT SUM(".$field.") as '".$field."' FROM `buku_kas_pembantu_penerimaan` WHERE MONTH(CURDATE())";
		$sql = $this->db->query($query);
		return $result = $sql->result();
	}

	public function SumSemuaBulan($field)
	{
		$query = "SELECT SUM(".$field.") as '".$field."' FROM `buku_kas_pembantu_penerimaan` WHERE YEAR(CURDATE())";
		$sql = $this->db->query($query);
		return $result = $sql->result();
	}
}

?>
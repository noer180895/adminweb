<?php

/**
* 
*/
class M_26_RAPBDes extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function simpan($data)
	{
		$this->db->insert('rapbdes', $data);
	}

	public function cekBerdasarkanTahun($data)
	{
		$this->db->select('*');
		$this->db->from('rapbdes');
		$this->db->where('tahun', $data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('rapbdes');
		return $query->result();
	}
	
	public function ambildataberdasarkan($ambil)
	{
		
		$this->db->select('*');
		$this->db->from('rapbdes');
		$this->db->where('id', $ambil);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambilpenanggungjawab($ambil)
	{
	
		$this->db->select('*');
		$this->db->from('auth');
		$this->db->join('pegawai', 'pegawai.NIP = auth.NIP');
		$this->db->where($ambil);
		$query = $this->db->get();
		return $query->result();	
	
	}

	public function Ubah($id,$Angka,$rencana,$target,$status,$keterangan,$TahunUbah,$penanggungjawab)
	{
		$data = array(
	        'rencana' => $rencana,
	        'anggaran' => $Angka,
	        'target' => $target,
	        'status' => $status,
	        'keterangan' => $keterangan,
	        'tahun' => $TahunUbah,
	        'penanggung_jawab' => $penanggungjawab
		);

		$this->db->where('id', $id);
		$this->db->update('rapbdes', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('rapbdes');
	}

	public function acc($id)
	{
		$data = array(
			'grant' => 1,
			);
		$this->db->where('id', $id);
		$this->db->update('rapbdes', $data);
	}
}
?>
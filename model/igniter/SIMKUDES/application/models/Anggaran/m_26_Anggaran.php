<?php

/**
* 
*/
class M_26_Anggaran extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}
	public function simpan($data)
	{
		$this->db->insert('anggaran', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('anggaran');
		return $query->result();
	}

	public function ambilnomorrekening()
	{
		$this->db->select('*');
		$query = $this->db->get('rekening');
		return $query->result();
	}

	public function ambildataberdasarkan($ambil)
	{	
		$this->db->select('*');
		$this->db->from('anggaran');
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

	public function Ubah($id,$Tahun,$Anggaran,$UbahTanggal)
	{
		$data = array(
	        'tahun' => $Tahun,
	        'anggaran' => $Anggaran,
	        'tanggal_update' => $UbahTanggal
		);

		$this->db->where('id', $id);
		$this->db->update('anggaran', $data);
	}

	public function ubahanggaran($nomorrekening,$anggaran)
	{
		$data = array(
			'anggaran' => $anggaran,
			);
		$this->db->where('nomor_rekening', $nomorrekening);
		$this->db->update('apbdes_pendapatan', $data);
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('anggaran');
	}
}
?>
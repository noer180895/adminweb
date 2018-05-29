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

	public function cekNomorPerdes($data)
	{
		$this->db->select('*');
		$this->db->from('rapbdes');
		$this->db->where('nomor_perdes', $data);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function cekGrant($data)
	{
		$this->db->select('*');
		$this->db->from('rapbdes');
		$this->db->where($data);
		$query = $this->db->get();
		$result = $query->num_rows();
		return $result; 
	}

	public function ambildataGrant()
	{
		$data = array(
			'grant' => 1 , 
			);

		$this->db->select('*');
		$this->db->from('rapbdes');
		$this->db->where($data);
		$query = $this->db->get();
		$result = $query->result();
		return $result; 
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('rapbdes');
		return $query->result();
	}

	public function ambilDataRekeningBerdasarkanTahun($data)
	{
		$this->db->select('*');
		$this->db->from('rekening_tahunan');
		$this->db->where('tahun', $data);
		$this->db->order_by('nomor_rekening', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambilJoinPdfRab()
	{
		$query = 
				" 	SELECT * FROM rab
					INNER JOIN rekening_tahunan 
					ON rekening_tahunan.nomor_rekening = rab.nomor_rekening
					WHERE rab.tahun = '".$_SESSION['tahunApbdes']."'
				";
		$query = $this->db->query($query);
		return $result = $query->result();
	}



	public function ambilDataRekeningBerdasarkanapa($data, $data2)
	{
		$this->db->select('*');
		$this->db->from('rekening_tahunan');
		$this->db->where($data);
		$this->db->like('nomor_rekening', $data2, 'after');
		$this->db->order_by('nomor_rekening', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambilDataRekeningBerdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('rekening');
		$this->db->where('nomor_rekening', $data);
		$query = $this->db->get();
		return $query->result();
	}

	public function cekDataRekening($noId, $tahun)
	{
		$this->db->select('*');
		$this->db->from('rekening_tahunan');
		$this->db->where('nomor_rekening', $noId);
		$this->db->where('tahun', $tahun);
		$query = $this->db->get();
		return $query->num_rows();
	}

	
	
	public function ambildataberdasarkan($ambil)
	{
		
		$this->db->select('*');
		$this->db->from('rapbdes');
		$this->db->where('tahun', $ambil);
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

	public function updateGrant($data, $tahun)
	{
		$this->db->where('tahun', $tahun);
		$this->db->update('rapbdes', $data);
	}



	public function hapus($data, $data2)
	{
		$this->db->where($data);
		$this->db->delete('rapbdes');

		// penghapusan rekening tahunan berdasarkan tahun
		$this->db->where($data2);
		$this->db->delete('rekening_tahunan');
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
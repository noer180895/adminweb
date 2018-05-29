<?php

/**
* 
*/
class M_26_data_penduduk extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('data_penduduk');
		return $query->result();
	}
	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('data_penduduk');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	

	public function simpan($data)
	{

		$this->db->insert('data_penduduk', $data);
	}
	
	public function ubah($data, $where)
	{
		$this->db->set($data);
		$this->db->where('id',$where);
		$this->db->update('data_penduduk');
		return 1;
	}
	public function hapus($where)
	{
		$this->db->where('id', $where);
		$this->db->delete('data_penduduk');
	}

	public function ambildatapenduduk()
	{
		$this->db->select('*');
		$query = $this->db->get('data_penduduk');
		return $query->result();
	}
	
	public function caridatapendudukberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_penduduk');
		$this->db->or_like('no_kk',$data);
		$this->db->or_like('no_NIK',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_lahir',$data);
		$this->db->or_like('tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('golongan_darah',$data);
		$this->db->or_like('Alamat',$data);
		$this->db->or_like('RT',$data);
		$this->db->or_like('RW',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('pendidikan_terakhir',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('hubungan_keluarga',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('nama_ayah',$data);
		$this->db->or_like('nama_ibu',$data);
		$query = $this->db->get();
		return $query->result();
	}
}

?>
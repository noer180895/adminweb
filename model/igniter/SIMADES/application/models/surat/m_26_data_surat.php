<?php

/**
* 
*/
class M_26_data_surat extends CI_Model
{
	
	function __construct()
	{
			parent:: __construct();
	}

	public function simpandatascansurat($data)
	{
		$this->db->insert('data_surat_masuk', $data);
	}

	public function ambildata()
	{
		$this->db->select('*');
		$query = $this->db->get('data_surat');
		return $query->result();
	}

	public function ambildataberdasarkan($id)
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambilsuratberdasarkan($namasurat)
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('nama_surat', $namasurat);
		$query = $this->db->get();
		return $query->result();
	}

	public function ubahnomor($data,$where)
	{
		$this->db->where('nama_surat',$where);
		$this->db->update('data_surat', $data);
	}

	public function simpanskkelahiran($data)
	{
		$this->db->insert('data_surat_keterangan_kelahiran', $data);
	}

	public function ambildataskkelahiran()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kelahiran');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function ambildataskkelahiranberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kelahiran');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskkelahiranberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kelahiran');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama_ibu_kandung',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('nama_anak',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('lahir',$data);
		$this->db->or_like('panjang',$data);
		$this->db->or_like('berat',$data);
		$this->db->or_like('anak_ke',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskpindah($data)
	{
		$this->db->insert('data_surat_keterangan_pindah', $data);
	}

	public function ambildataskpindahberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pindah');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskpindah()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pindah');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskpindahberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pindah');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama_lengkap',$data);
		$this->db->or_like('nomor_kk',$data);
		$this->db->or_like('nomor_nik',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('pindah_ke',$data);
		$this->db->or_like('nama_desa_baru',$data);
		$this->db->or_like('nama_kecamatan_baru',$data);
		$this->db->or_like('nama_kabupaten_baru',$data);
		$this->db->or_like('alasan_pindah',$data);
		$this->db->or_like('jumlah_pengikut',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskdomisili($data)
	{
		$this->db->insert('data_surat_keterangan_domisili', $data);
	}

	public function ambildataskdomisiliberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskdomisili()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskdomisiliberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tujuan',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskpembuatanktp($data)
	{
		$this->db->insert('data_surat_pengantar_pembuatan_ktp', $data);
	}

	public function ambildataskpembuatanktpberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_ktp');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskpembuatanktp()
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_ktp');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskpembuatanktpberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_ktp');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskpembuatankk($data)
	{
		$this->db->insert('data_surat_pengantar_pembuatan_kk', $data);
	}

	public function ambildataskpembuatankkberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_kk');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskpembuatankk()
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_kk');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskpembuatankkberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_kk');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskwali($data)
	{
		$this->db->insert('data_surat_keterangan_wali', $data);
	}

	public function ambildataskwaliberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_wali');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskwali()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_wali');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskwaliberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_wali');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('umur',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('nama_dua',$data);
		$this->db->or_like('umur_dua',$data);
		$this->db->or_like('agama_dua',$data);
		$this->db->or_like('alamat_dua',$data);
		$this->db->or_like('nama_tiga',$data);
		$this->db->or_like('umur_tiga',$data);
		$this->db->or_like('agama_tiga',$data);
		$this->db->or_like('alamat_tiga',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskskck($data)
	{
		$this->db->insert('data_surat_keterangan_pembuatan_skck', $data);
	}

	public function ambildataskskckberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pembuatan_skck');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskskck()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pembuatan_skck');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskskckberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pembuatan_skck');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpansknikah($data)
	{
		$this->db->insert('data_surat_keterangan_untuk_nikah', $data);
	}

	public function ambildatasknikahberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_untuk_nikah');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasknikah()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_untuk_nikah');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridatasknikahberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_untuk_nikah');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('bin_binti',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('nama_istri_suami_dulu',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpansktidakmampu($data)
	{
		$this->db->insert('data_surat_keterangan_tidak_mampu', $data);
	}

	public function ambildatasktidakmampuberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tidak_mampu');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasktidakmampu()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tidak_mampu');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridatasktidakmampuberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tidak_mampu');
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskkematian($data)
	{
		$this->db->insert('data_surat_keterangan_kematian', $data);
	}

	public function ambildataskkematianberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kematian');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskkematian()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kematian');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskkematianberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kematian');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('hari_tanggal',$data);
		$this->db->or_like('jam',$data);
		$this->db->or_like('pada_usia',$data);
		$this->db->or_like('dikarenakan',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskbelummenikah($data)
	{
		$this->db->insert('data_surat_keterangan_belum_menikah', $data);
	}

	public function ambildataskbelummenikahberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_belum_menikah');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskbelummenikah()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_belum_menikah');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskbelummenikahberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_belum_menikah');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tujuan',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function simpanskasalusul($data)
	{
		$this->db->insert('data_surat_keterangan_asal_usul', $data);
	}

	public function ambildataskasalusulberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_asal_usul');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskasalusulberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_asal_usul');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('rt',$data);
		$this->db->or_like('rw',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('nama_pria',$data);
		$this->db->or_like('tempat_tanggal_lahir_pria',$data);
		$this->db->or_like('kewarganegaraan_pria',$data);
		$this->db->or_like('agama_pria',$data);
		$this->db->or_like('pekerjaan_pria',$data);
		$this->db->or_like('alamat_pria',$data);
		$this->db->or_like('nama_wanita',$data);
		$this->db->or_like('tempat_tanggal_lahir_wanita',$data);
		$this->db->or_like('kewarganegaraan_wanita',$data);
		$this->db->or_like('agama_wanita',$data);
		$this->db->or_like('pekerjaan_wanita',$data);
		$this->db->or_like('alamat_wanita',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskasalusul()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_asal_usul');
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanspmempelai($data)
	{
		$this->db->insert('data_surat_persetujuan_mempelai', $data);
	}

	public function ambildataspmempelaiberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_persetujuan_mempelai');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataspmempelai()
	{
		$this->db->select('*');
		$this->db->from('data_surat_persetujuan_mempelai');
		$query = $this->db->get();
		return $query->result();
	}


	public function caridataspmempelaiberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_persetujuan_mempelai');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('nama_suami',$data);
		$this->db->or_like('bin',$data);
		$this->db->or_like('tempat_tanggal_lahir_suami',$data);
		$this->db->or_like('kewarganegaraan_suami',$data);
		$this->db->or_like('agama_suami',$data);
		$this->db->or_like('pekerjaan_suami',$data);
		$this->db->or_like('alamat_suami',$data);
		$this->db->or_like('nama_istri',$data);
		$this->db->or_like('binti',$data);
		$this->db->or_like('tempat_tanggal_lahir_istri',$data);
		$this->db->or_like('kewarganegaraan_istri',$data);
		$this->db->or_like('agama_istri',$data);
		$this->db->or_like('pekerjaan_istri',$data);
		$this->db->or_like('alamat_istri',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan_suami',$data);
		$this->db->or_like('penanda_tangan_istri',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpansktorangtua($data)
	{
		$this->db->insert('data_surat_keterangan_tentang_orang_tua', $data);
	}

	public function ambildatasktorangtuaberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tentang_orang_tua');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasktorangtua()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tentang_orang_tua');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridatasktorangtuaberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tentang_orang_tua');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('nama_ayah',$data);
		$this->db->or_like('tempat_tanggal_lahir_ayah',$data);
		$this->db->or_like('kewarganegaraan_ayah',$data);
		$this->db->or_like('agama_ayah',$data);
		$this->db->or_like('pekerjaan_ayah',$data);
		$this->db->or_like('alamat_ayah',$data);
		$this->db->or_like('nama_ibu',$data);
		$this->db->or_like('tempat_tanggal_lahir_ibu',$data);
		$this->db->or_like('kewarganegaraan_ibu',$data);
		$this->db->or_like('agama_ibu',$data);
		$this->db->or_like('pekerjaan_ibu',$data);
		$this->db->or_like('alamat_ibu',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskdomisiliperusahaan($data)
	{
		$this->db->insert('data_surat_keterangan_domisili_perusahaan', $data);
	}

	public function ambildataskdomisiliperusahaanberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili_perusahaan');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskdomisiliperusahaan()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili_perusahaan');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskdomisiliperusahaanberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili_perusahaan');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_tanggal_lahir',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('nama_perusahaan',$data);
		$this->db->or_like('alamat_perusahaan',$data);
		$this->db->or_like('nomor_telepon',$data);
		$this->db->or_like('jenis_usaha',$data);
		$this->db->or_like('akta_pendirian',$data);
		$this->db->or_like('jam_kerja',$data);
		$this->db->or_like('jumlah_karyawan',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('penanda_tangan_kecamatan',$data);
		$this->db->or_like('penanda_tangan_kelurahan',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanspermohonankk($data)
	{
		$this->db->insert('data_surat_permohonan_kk_dinas', $data);
	}

	public function ambildataspermohonankkberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_kk_dinas');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataspermohonankk()
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_kk_dinas');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataspermohonankkberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_kk_dinas');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('lampiran',$data);
		$this->db->or_like('perihal',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('kepada',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_lahir',$data);
		$this->db->or_like('tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('status_perkawinan',$data);
		$this->db->or_like('no_ktp',$data);
		$this->db->or_like('alamat',$data);
		$query = $this->db->get();
		return $query->result();
	}
	public function simpanspermohonanktp($data)
	{
		$this->db->insert('data_surat_permohonan_ktp_dinas', $data);
	}

	public function ambildataspermohonanktpberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_ktp_dinas');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataspermohonanktp()
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_ktp_dinas');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataspermohonanktpberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_ktp_dinas');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('lampiran',$data);
		$this->db->or_like('perihal',$data);
		$this->db->or_like('tanggal',$data);
		$this->db->or_like('kepada',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_lahir',$data);
		$this->db->or_like('tanggal_lahir',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('golongan_darah',$data);
		$this->db->or_like('alamat',$data);
		$query = $this->db->get();
		return $query->result();
	}
	public function simpanspermohonanaktakelahiran($data)
	{
		$this->db->insert('data_surat_permohonan_akta_kelahiran_dinas', $data);
	}

	public function ambildataspermohonanaktakelahiranberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_akta_kelahiran_dinas');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataspermohonanaktakelahiran()
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_akta_kelahiran_dinas');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataspermohonanaktakelahiranberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_akta_kelahiran_dinas');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('lampiran',$data);
		$this->db->or_like('perihal',$data);
		$this->db->or_like('tanggal_surat',$data);
		$this->db->or_like('kepada',$data);
		$this->db->or_like('nama_anak',$data);
		$this->db->or_like('agama_anak',$data);
		$this->db->or_like('jenis_kelamin_anak',$data);
		$this->db->or_like('nama_ayah',$data);
		$this->db->or_like('tempat_lahir_ayah',$data);
		$this->db->or_like('tanggal_lahir_ayah',$data);
		$this->db->or_like('jenis_kelamin_ayah',$data);
		$this->db->or_like('agama_ayah',$data);
		$this->db->or_like('pekerjaan_ayah',$data);
		$this->db->or_like('alamat_ayah',$data);
		$this->db->or_like('nama_ibu',$data);
		$this->db->or_like('tempat_lahir_ibu',$data);
		$this->db->or_like('tanggal_lahir_ibu',$data);
		$this->db->or_like('jenis_kelamin_ibu',$data);
		$this->db->or_like('agama_ibu',$data);
		$this->db->or_like('pekerjaan_ibu',$data);
		$this->db->or_like('alamat_ibu',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskwarga($data)
	{
		$this->db->insert('data_surat_keterangan_warga', $data);
	}

	public function ambildataskwargaberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_warga');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskwarga()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_warga');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskwargaberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_warga');
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_lahir',$data);
		$this->db->or_like('tanggal_lahir',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanskpimb($data)
	{
		$this->db->insert('data_surat_keterangan_permohonan_imb', $data);
	}

	public function ambildataskpimbberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_permohonan_imb');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataskpimb()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_permohonan_imb');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataskpimbberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_permohonan_imb');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('nama_kades',$data);
		$this->db->or_like('jabatan_kades',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('persil_nib',$data);
		$this->db->or_like('persil_nis',$data);
		$this->db->or_like('persil_nama_pemilik',$data);
		$this->db->or_like('persil_alamat_bidang',$data);
		$this->db->or_like('persil_penggunaan_tanah',$data);
		$this->db->or_like('pemanfaatan_tanah',$data);
		$this->db->or_like('status_tanah',$data);
		$this->db->or_like('tanggal',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpansptugas($data)
	{
		$this->db->insert('data_surat_tugas_desa', $data);
	}

	public function ambildatasptugasberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_tugas_desa');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasptugas()
	{
		$this->db->select('*');
		$this->db->from('data_surat_tugas_desa');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridatasptugasberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_tugas_desa');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('tempat_lahir',$data);
		$this->db->or_like('tanggal_lahir',$data);
		$this->db->or_like('kewarganegaraan',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pendidikan',$data);
		$this->db->or_like('alamat',$data);
		$this->db->or_like('untuk',$data);
		$this->db->or_like('tanggal_awal',$data);
		$this->db->or_like('tanggal_akhir',$data);
		$this->db->or_like('tempat',$data);
		$this->db->or_like('tanggal',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function simpanspizinkeramaian($data)
	{
		$this->db->insert('data_surat_pengantar_izin_keramaian', $data);
	}

	public function ambildataspizinkeramaianberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_izin_keramaian');
		$this->db->where('nomor_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataspizinkeramaian()
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_izin_keramaian');
		$query = $this->db->get();
		return $query->result();
	}

	public function caridataspizinkeramaianberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_izin_keramaian');
		$this->db->or_like('nomor_surat',$data);
		$this->db->or_like('lampiran',$data);
		$this->db->or_like('perihal',$data);
		$this->db->or_like('kepada',$data);
		$this->db->or_like('penyampai',$data);
		$this->db->or_like('nama',$data);
		$this->db->or_like('umur',$data);
		$this->db->or_like('jenis_kelamin',$data);
		$this->db->or_like('agama',$data);
		$this->db->or_like('pekerjaan',$data);
		$this->db->or_like('acara',$data);
		$this->db->or_like('waktu_pelaksanaan_awal',$data);
		$this->db->or_like('waktu_pelaksanaan_akhir',$data);
		$this->db->or_like('tempat',$data);
		$this->db->or_like('tanggal',$data);
		$query = $this->db->get();
		return $query->result();
	}
}

?>
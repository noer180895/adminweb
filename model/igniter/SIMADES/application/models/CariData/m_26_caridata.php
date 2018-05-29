<?php

/**
* 
*/
class M_26_caridata extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function ambildataasalusul()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_asal_usul');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function ambildataasalusulrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_asal_usul');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatabelummenikah()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_belum_menikah');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function ambildatabelummenikahrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_belum_menikah');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatadomisili()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatadomisilirentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatadomisiliperusahaan()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili_perusahaan');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatadomisiliperusahaanrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_domisili_perusahaan');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatakelahiran()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kelahiran');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatakelahiranrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kelahiran');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatakematian()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kematian');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatakematianrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_kematian');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapembuatanskck()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pembuatan_skck');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapembuatanskckrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pembuatan_skck');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonanimb()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_permohonan_imb');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonanimbrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_permohonan_imb');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapindah()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pindah');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapindahrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_pindah');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatatentangorangtua()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tentang_orang_tua');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatatentangorangtuarentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tentang_orang_tua');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatatidakmampu()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tidak_mampu');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatatidakmampurentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_tidak_mampu');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatauntuknikah()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_untuk_nikah');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatauntuknikahrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_untuk_nikah');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatawali()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_wali');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatawalirentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_wali');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatawarga()
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_warga');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatawargarentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_keterangan_warga');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataizinkeramaian()
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_izin_keramaian');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildataizinkeramaianrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_izin_keramaian');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapengantarpembuatankk()
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_kk');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapengantarpembuatankkrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_kk');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapengantarpembuatanktp()
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_ktp');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapengantarpembuatanktprentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_pengantar_pembuatan_ktp');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonanaktakelahiran()
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_akta_kelahiran_dinas');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonanaktakelahiranrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_akta_kelahiran_dinas');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonankkdinas()
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_kk_dinas');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonankkdinasrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_kk_dinas');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonanktpdinas()
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_ktp_dinas');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapermohonanktpdinasrentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_permohonan_ktp_dinas');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapersetujuanmempelai()
	{
		$this->db->select('*');
		$this->db->from('data_surat_persetujuan_mempelai');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatapersetujuanmempelairentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_persetujuan_mempelai');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatatugasdesa()
	{
		$this->db->select('*');
		$this->db->from('data_surat_tugas_desa');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatatugasdesarentang($dataawal,$dataakhir)
	{
		$this->db->select('*');
		$this->db->from('data_surat_tugas_desa');
		$this->db->where('tanggal >=', $dataawal);
		$this->db->where('tanggal <=', $dataakhir);
		$query = $this->db->get();
		return $query->result();
	}
}

?>
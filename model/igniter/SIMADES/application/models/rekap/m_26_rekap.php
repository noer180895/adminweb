<?php

/**
* 
*/
class M_26_rekap extends CI_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function agamaislam()
	{
		$this->db->where('agama', 'Islam');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamaprotestan()
	{
		$this->db->where('agama', 'Protestan');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamakhatolik()
	{
		$this->db->where('agama', 'Khatolik');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamahindu()
	{
		$this->db->where('agama', 'Hindu');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamabuddha()
	{
		$this->db->where('agama', 'Buddha');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamakhonghucu()
	{
		$this->db->where('agama', 'Khonghucu');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamatidakberagama()
	{
		$this->db->where('agama', 'Tidak Beragama');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function agamalainnya()
	{
		$this->db->where('agama', 'Lainnya');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gda()
	{
		$this->db->where('golongan_darah', 'A');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdamin()
	{
		$this->db->where('golongan_darah', 'A-');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdaplus()
	{
		$this->db->where('golongan_darah', 'A+');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdb()
	{
		$this->db->where('golongan_darah', 'B');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdbmin()
	{
		$this->db->where('golongan_darah', 'B-');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdbplus()
	{
		$this->db->where('golongan_darah', 'B+');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdab()
	{
		$this->db->where('golongan_darah', 'AB');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdabmin()
	{
		$this->db->where('golongan_darah', 'AB-');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdabplus()
	{
		$this->db->where('golongan_darah', 'AB+');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdo()
	{
		$this->db->where('golongan_darah', 'O');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdomin()
	{
		$this->db->where('golongan_darah', 'O-');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdoplus()
	{
		$this->db->where('golongan_darah', 'O+');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function gdtidaktahu()
	{
		$this->db->where('golongan_darah', 'Tidak Tahu');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function jklakilaki()
	{
		$this->db->where('jenis_kelamin', 'Laki - Laki');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function jkperempuan()
	{
		$this->db->where('jenis_kelamin', 'Perempuan');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkkepalakeluarga()
	{
		$this->db->where('hubungan_keluarga', 'Kepala Keluarga');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hksuami()
	{
		$this->db->where('hubungan_keluarga', 'Suami');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkistri()
	{
		$this->db->where('hubungan_keluarga', 'Istri');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkanak()
	{
		$this->db->where('hubungan_keluarga', 'Anak');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkmenantu()
	{
		$this->db->where('hubungan_keluarga', 'Menantu');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkcucu()
	{
		$this->db->where('hubungan_keluarga', 'Cucu');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkorangtua()
	{
		$this->db->where('hubungan_keluarga', 'Orang Tua');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkmertua()
	{
		$this->db->where('hubungan_keluarga', 'Mertua');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hkpembantu()
	{
		$this->db->where('hubungan_keluarga', 'Pembantu');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function hklainnya()
	{
		$this->db->where('hubungan_keluarga', 'Lainnya');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function spbelummenikah()
	{
		$this->db->where('status_perkawinan', 'Belum Menikah');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function spmenikah()
	{
		$this->db->where('status_perkawinan', 'Menikah');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function spceraihidup()
	{
		$this->db->where('status_perkawinan', 'Cerai Hidup');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function spceraimati()
	{
		$this->db->where('status_perkawinan', 'Cerai Mati');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptbelumtidaksekolah()
	{
		$this->db->where('pendidikan_terakhir', 'Belum / Tidak Sekolah');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptbelumtamatsd()
	{
		$this->db->where('pendidikan_terakhir', 'Belum Tamat SD / Sederajat');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function pttamatsd()
	{
		$this->db->where('pendidikan_terakhir', 'Tamat SD / Sederajat');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptsltp()
	{
		$this->db->where('pendidikan_terakhir', 'SLTP / Sederajat');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptslta()
	{
		$this->db->where('pendidikan_terakhir', 'SLTA / Sederajat');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptdiplomaiii()
	{
		$this->db->where('pendidikan_terakhir', 'DIPLOMA I / II');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptakademi()
	{
		$this->db->where('pendidikan_terakhir', 'Akademi / DIPLOMA III / S.MUDA');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptdiplomav()
	{
		$this->db->where('pendidikan_terakhir', 'DIPLOMA IV / STRATA I');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptstrataii()
	{
		$this->db->where('pendidikan_terakhir', 'STRATA II');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ptstrataiii()
	{
		$this->db->where('pendidikan_terakhir', 'STRATA III');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function pbelumtidakbekerja()
	{
		$this->db->where('pekerjaan', 'Belum / Tidak Bekerja');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function pmengurusrumahtangga()
	{
		$this->db->where('pekerjaan', 'Mengurus Rumah Tangga');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ppelajar()
	{
		$this->db->where('pekerjaan', 'Pelajar / Mahasiswa');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function ppensiunan()
	{
		$this->db->where('pekerjaan', 'Pensiunan');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function pbekerja()
	{
		$this->db->like('pekerjaan', 'Bekerja');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function plainnya()
	{
		$this->db->where('pekerjaan', 'Lainnya');
		$this->db->from('data_penduduk');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function usk($namasurat,$data)
	{
		$this->db->where('nama_surat',$namasurat);
		$this->db->update('data_surat', $data);
	}
	public function ambildatasuratkelahiran()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',1);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratpindah()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',2);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratdomisili()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',3);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratpembuatanktp()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',4);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratpembuatankk()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',5);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratwali()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',6);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratnikah()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',7);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratskck()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',8);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasurattidakmampu()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',9);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratkematian()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',10);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratbelummenikah()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',11);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratasalusul()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',12);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratmempelai()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',13);
		$query = $this->db->get();
		return $query->result();
	}
	public function ambildatasuratorangtua()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',14);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratdomisiliperusahaan()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',15);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratpermohonankkuntukdinas()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',16);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratpermohonanktpuntukdinas()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',17);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratpermohonanaktakelahiranuntukdinas()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',18);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratwarga()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',19);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratpermohonanimb()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',20);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasurattugasdesa()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',21);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratpengantarizinkeramaian()
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('id',22);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratmasuk()
	{
		$this->db->select('*');
		$this->db->from('data_surat_masuk');
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasuratmasukberdasarkan($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat_masuk');
		$this->db->where('id',$data);
		$query = $this->db->get();
		return $query->result();
	}

	public function ambildatasurat($data)
	{
		$this->db->select('*');
		$this->db->from('data_surat');
		$this->db->where('nama_surat',$data);
		$query = $this->db->get();
		return $query->result();
	}

}

?>
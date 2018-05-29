<?php

/**
* 
*/
	class M_26_APBDes extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function simpan($data)
		{
			$this->db->insert('apbdes', $data);
		}

		public function simpanPerubahan($data)
		{
			$this->db->insert('apbdes_perubahan', $data);
		}

		public function ambildatarekeningapbdesbelanja($dua)
		{
			$this->db->select('*');
			$this->db->from('rekening');
			$this->db->where('nomor_rekening', '2.'.$dua);
			
			$query = $this->db->get();
			return $query->result();
		}

		public function hitungJumlah($data)
		{
			$this->db->select_sum('jumlah');
			$this->db->from('detail_apbdes_pendapatan');
			$this->db->where('kode_rekening', $data);
			$query = $this->db->get(); 
			return $query->result();
		}

		public function ambildataapbdespendapatanBerdasarkan($ambil)
		{
			$this->db->select('*');
			$this->db->from('apbdes_pendapatan');
			$this->db->where('nomor_rekening', $ambil);
			$query = $this->db->get();
			return $query->result();
		}
		public function ambildataapbdespendapatan()
		{
			$this->db->select('*');
			$this->db->from('anggaran');
			$this->db->join('rekening', 'anggaran.nomor_rekening = rekening.nomor_rekening');
			
			$query = $this->db->get();
			return $query->result();
		}

		public function ambildatadetailberdasarkan($ambil)
		{
			
			$this->db->select('*');
			$this->db->from('detail_apbdes_pendapatan');
			$this->db->where('kode_rekening', $ambil);
			$query = $this->db->get();
			return $query->result();
		}

		public function tambahdataapbdespendapatan($data)
		{
			$this->db->select('*');
			$this->db->from('anggaran');
			$this->db->join('rekening', 'anggaran.nomor_rekening = rekening.nomor_rekening');
			$this->db->where('id', $data);
			$query = $this->db->get();
			return $query->result();
		}

		public function ambildata()
		{
			$this->db->select('*');
			$query = $this->db->get('apbdes');
			return $query->result();
		}

		public function ambildataPerubahan()
		{
			$this->db->select('*');
			$query = $this->db->get('apbdes_perubahan');
			return $query->result();
		}
		public function ambildatarekeningberdasarkan($data)
		{
			$this->db->select('*');
			$this->db->from('rekening');
			$this->db->like('nomor_rekening', $data, 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function ambildatakegiatan()
		{
			$this->db->select('*');
			$this->db->from('rapbdes');
			$this->db->where('grant', 1);
			$query = $this->db->get();
			return $query->result();
		}

		public function ambildataanggaranberdasarkan($data)
		{
			$this->db->select('anggaran');
			$this->db->from('rapbdes');
			$this->db->where('rencana', $data);
			$query = $this->db->get();
			return $query->result();
		}

		public function ambildataberdasarkan($ambil)
		{
			
			$this->db->select('*');
			$this->db->from('apbdes');
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
		
		public function Ubah($id,$Kegiatan,$Anggaran,$Tanggal,$penanggungjawab,$tahun,$keterangan)
		{
			$data = array(
				'kegiatan' => $Kegiatan,
				'anggaran' => $Anggaran,
				'tanggal' => $Tanggal,
				'penanggung_jawab' => $penanggungjawab,
				'tahun' => $tahun,
				'keterangan' => $keterangan
			);

			$this->db->where('id', $id);
			$this->db->update('apbdes', $data);
		}

		public function hapus($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('apbdes');
		}

		public function hapusPerubahan($data)
		{
			$this->db->where($data);
			$this->db->delete('apbdes_perubahan');
		}


	}
?>
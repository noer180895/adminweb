<?php
	/**
	* 
	*/
	class M_23_rekening extends CI_Model
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		public function lihat()
		{
			$this->db->select('*');
			$this->db->from('rekening');
			$query = $this->db->get();
			return $result = $query->result();
		}


		public function ambilSumAnggaranBerdasarkanRekening($data)
		{


			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->like('nomor_rekening', $data, 'after');
			$query = $this->db->get();
			$result = $query->result();
			return $result;
		}

		public function ambilSumAnggaranBerdasarkanRekeningTahunan($data)
		{

			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->like('nomor_rekening', $data, 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function sumPendapatan()
		{
			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->like('nomor_rekening', '1', 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function sumBelanja()
		{
			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->like('nomor_rekening', '2', 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function sumPembiayaan()
		{
			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->like('nomor_rekening', '3', 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function ambilSumAnggaranBerdasarkanRekeningPoin2($data)
		{
			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->like('nomor_rekening', $data, 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function ambilSumAnggaranBerdasarkanRekeningPoin3($data)
		{

			$this->db->select_sum('anggaran');
			$this->db->from('item_rekening');
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->where('nomor_rekening', $data);
			$query = $this->db->get();
			return $query->result();
		}

		public function ambilSumAnggaranBerdasarkanRekeningTahunanPoin2($data)
		{
			$this->db->select_sum('anggaran');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->like('nomor_rekening', $data, 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function rekeningDefault($tahun)
		{
			$query = $this->db->query(
				' INSERT INTO `rekening_tahunan` (`nomor_rekening`, `k1`, `k2`, `k3`, `k4`, `k5`, `uraian`, `anggaran`, `tahun`) VALUES
					("1", 	 	"1", 	"", 	"", 	"", 	"", 	"PENDAPATAN DESA" , 							"", '.$tahun.' ), 
					("1.1", 	"1", 	"1",	"",		"", 	"", 	"Pendapatan Asli Desa" , 						"", '.$tahun.' ), 
					("1.1.1", 	"1", 	"1",	"1",		"", 	"", "Hasil Usaha" ,	 								"", '.$tahun.' ), 
					("1.1.2", 	"1", 	"1",	"2",		"", 	"", "Swadaya Partisipasi dan Gotong Royong" ,		"", '.$tahun.' ),
					("1.1.3", 	"1", 	"1",	"3",		"", 	"", "Lain - Lain Pendapatan Asli Desa Yang Sah" ,	"", '.$tahun.' ),

					("1.2", 	"1", 	"2", 	"", 	"", 	"", 	"Pendapatan Transfer" ,							"", '.$tahun.' ),
					("1.2.1", 	"1", 	"2", 	"1", 	"", 	"", 	"Dana Desa" ,									"", '.$tahun.' ),
					("1.2.2", 	"1", 	"2", 	"2", 	"", 	"", 	"Bagian dari Hasil Pajak & retribusi daerah kabupaten/kota" ,				"", '.$tahun.' ),
					("1.2.3", 	"1", 	"2", 	"3", 	"", 	"", 	"Alokasi Dana Desa" ,							"", '.$tahun.' ),
					("1.2.4", 	"1", 	"2", 	"4", 	"", 	"", 	"Bantuan Keuangan" ,							"", '.$tahun.' ),
					("1.2.4.1",	"1", 	"2", 	"4", 	"1", 	"", 	"Bantuan Provinsi" ,							"", '.$tahun.' ),
					("1.2.4.2",	"1", 	"2", 	"4", 	"2", 	"", 	"Bantuan Kabupaten / Kota" ,					"", '.$tahun.' ),

					("1.3", 	"1", 	"3", 	"", 	"", 	"", 	"Pendapatan Lain Lain" ,						"", '.$tahun.' ), 
					("1.3.1", 	"1", 	"3", 	"1", 	"", 	"", 	"Hibah dan Sumbangan dari pihak ke-3 yang tidak mengikat" ,					"", '.$tahun.' ), 
					("1.3.2", 	"1", 	"3", 	"2", 	"", 	"", 	"Lain - Lain pendapatan desa yang sah" ,		"", '.$tahun.' ), 

					("2", 	 	"2", 	"", 	"", 	"", 	"", 	"BELANJA" , 									"", '.$tahun.' ), 
					("2.1", 	"2", 	"1", 	"", 	"", 	"", 	"Bidang Penyelenggaraan Pemerintahan Desa " , 	"", '.$tahun.' ), 
					("2.2", 	"2", 	"2", 	"", 	"", 	"", 	"Bidang Pelaksanaan Pembangunan Desa" ,			"", '.$tahun.' ), 
					("2.3", 	"2", 	"3", 	"", 	"", 	"", 	"Bidang Pembinaan Kemasyarakatan" ,				"", '.$tahun.' ), 
					("2.4", 	"2", 	"4", 	"", 	"", 	"", 	"Bidang Pemberdayaan Masyarakat" ,				"", '.$tahun.' ), 
					("2.5", 	"2", 	"5", 	"", 	"", 	"", 	"Bidang Tak Terduga" , 							"", '.$tahun.' ),

					("3", 		"3", 	"", 	"", 	"", 	"", 	"PEMBIAYAAN" ,									"", '.$tahun.' ),
					("3.1", 	"3", 	"1", 	"", 	"", 	"", 	"Penerimaan Pembiayaan" , 						"", '.$tahun.' ),
					("3.1.1", 	"3", 	"1", 	"1", 	"", 	"", 	"SILVA" ,				 						"", '.$tahun.' ),
					("3.1.2", 	"3", 	"1", 	"2", 	"", 	"", 	"Pencairan Dana Cadangan" , 					"", '.$tahun.' ),
					("3.1.3", 	"3", 	"1", 	"3", 	"", 	"", 	"Hasil Kekayaan Desa yang Di Pisahkan" ,		"", '.$tahun.' ),
					("3.2", 	"3", 	"2", 	"", 	"", 	"", 	"Pengeluaran Pembiayaan" ,						"", '.$tahun.' ),
					("3.2.1", 	"3", 	"2", 	"1", 	"", 	"", 	"Pembentukan Dana Cadangan" ,					"", '.$tahun.' ),
					("3.2.2", 	"3", 	"2", 	"2", 	"", 	"", 	"Pernyataan Modal Desa" ,						"", '.$tahun.' );
				'
				);
		}

		public function tambah($data)
		{
			$this->db->insert('rekening', $data);
		}

		public function tambahRekeningTahunan($data)
		{
			$this->db->insert('rekening_tahunan', $data);
		}


		public function tambahItemRekening($data)
		{
			$this->db->insert('item_rekening', $data);
		}

		public function cekRekening($where)
		{
			$query = $this->db->get_where('rekening', $where);
			return $result = $query->num_rows();
		}

		public function cekRekeningTahunan($where)
		{
			$query = $this->db->get_where('rekening_tahunan', $where);
			return $result = $query->result();
		}

		public function ambilDataItemRekeningBerdasarkan($data)
		{
			$this->db->select('*');
			$this->db->from('rekening_tahunan');
			$this->db->join('item_rekening', 'item_rekening.nomor_rekening = rekening_tahunan.nomor_rekening');
			$this->db->where('rekening_tahunan.nomor_rekening', $data);
			$this->db->where('item_rekening.tahun', $_SESSION['tahun']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function ambilDataItemRekeningBerdasarkan2($data)
		{
			$this->db->select('*');
			$this->db->from('item_rekening');
			$this->db->join('rekening_tahunan', 'item_rekening.nomor_rekening = rekening_tahunan.nomor_rekening');
			$this->db->where('rekening_tahunan.nomor_rekening', $data);
			$this->db->where('item_rekening.tahun', $_SESSION['tahun']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function ambilDataItemRekeningBerdasarkanTahunApbdes($data)
		{
			$this->db->select('*');
			$this->db->from('rekening_tahunan');
			$this->db->join('item_rekening', 'item_rekening.nomor_rekening = rekening_tahunan.nomor_rekening');
			$this->db->where('rekening_tahunan.nomor_rekening', $data);
			$this->db->where('item_rekening.tahun', $_SESSION['tahunApbdes']);
			$query = $this->db->get();
			return $result = $query->result();
		}

		public function hitungDataItemRekeningBerdasarkan($data)
		{
			$this->db->select('*');
			$this->db->from('rekening_tahunan');
			$this->db->join('item_rekening', 'item_rekening.nomor_rekening = rekening_tahunan.nomor_rekening');
			$this->db->where('rekening_tahunan.nomor_rekening', $data);
			$query = $this->db->get();
			return $result = $query->num_rows();
		}

		public function cekRekeningUbah($where, $id)
		{
			$query = $this->db->get_where('rekening', $where);
			$result = $query->num_rows();
			$hasil = $query->result();
			if ($result == 1) {
				if ($hasil[0]->nomor_rekening == $id ) {
					return 0;
				}else{
					return 1;
				}
			}else{
				return 0;
			}
		}

		public function cariRekening($where)
		{
			$query = $this->db->get_where('rekening', $where);
			return $result = $query->result();
		}

		public function cariRekeningTahunan($where)
		{
			$query = $this->db->get_where('rekening_tahunan', $where);
			return $result = $query->result();
		}

		public function cariRekeningTahunanLike($data)
		{
			$this->db->select('*');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->like('nomor_rekening', $data, 'after');
			$query = $this->db->get();
			return $query->result();
		}

		public function cariRekeningBuatRAB($data, $leng)
		{
			$this->db->select('*');
			$this->db->from('rekening_tahunan');
			$this->db->where('tahun', $_SESSION['tahunApbdes']);
			$this->db->like('nomor_rekening', $data, 'after');
			$this->db->where('LENGTH(nomor_rekening)=',$leng );
			$query = $this->db->get();
			return $query->result();
		}

		public function cariItemRekening($where)
		{
			$query = $this->db->get_where('item_rekening', $where);
			return $result = $query->result();
		}

		public function ubah($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('rekening');
		}

		public function updateSUM($data, $anggaran)
		{
			$this->db->set('anggaran', $anggaran);
			$this->db->where('tahun', $_SESSION['tahun']);
			$this->db->where('nomor_rekening', $data);
			$this->db->update('rekening_tahunan');
		}

		public function updateAnggaran($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('rekening_tahunan');
		}

		public function ubahItemRekening($data, $where)
		{
			$this->db->set($data);
			$this->db->where($where);
			$this->db->update('item_rekening');
		}
		
		public function hapus($data)
		{
			$this->db->where('nomor_rekening', $data);
			$this->db->delete('rekening');
			return 1;
		}

		public function hapusItemRekening($data)
		{
			$this->db->where('id_item', $data);
			$this->db->delete('item_rekening');
		}
	}
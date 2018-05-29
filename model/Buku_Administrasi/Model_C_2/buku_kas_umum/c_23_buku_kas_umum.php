<?php 
	/**
	* 
	*/
	class C_23_buku_kas_umum extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('buku_administrasi/model_c_2/buku_kas_umum/m_23_buku_kas_umum');
			$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
			$this->load->model('Buku_Administrasi/Model_C_1_a/buku_anggaran_pendapatan_dan_belanja_desa/m_23_APBDes');
		}

		public function index()
		{
			$tabel = 'bukades_buku_kas_umum';
			$buku_kas_umum = $this->m_23_buku_kas_umum->template_select($tabel);
			$data = array(
				'view' => 'main_page/buku_administrasi/model_c_2/buku_kas_umum/v_23_buku_kas_umum.php',
				'bukamu' => $buku_kas_umum,
				);
			// $this->load->view('v_23_index',$data);
			$this->load->view('v_23_index', $data);
		}
		public function pdfNya()
		{
			$a = date('H')+5;
			$nama_dokumen='Buku Kas Umum '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-l'); // Create new mPDF Document
			 
			ob_start();
			$jumlahPenerimaanBulanLalu   = $this->m_23_buku_kas_umum->SumBulanLalu('penerimaan');
			$jumlahPenerimaanBulanIni    = $this->m_23_buku_kas_umum->SumBulanIni('penerimaan');
			$jumlahPenerimaanSemuaBulan  = $this->m_23_buku_kas_umum->SumSemuaBulan('penerimaan');
			
			$jumlahPengeluaranBulanLalu   = $this->m_23_buku_kas_umum->SumBulanLalu('pengeluaran');
			$jumlahPengeluaranBulanIni    = $this->m_23_buku_kas_umum->SumBulanIni('pengeluaran');
			$jumlahPengeluaranSemuaBulan  = $this->m_23_buku_kas_umum->SumSemuaBulan('pengeluaran');
			
			$sisaKas = $jumlahPenerimaanSemuaBulan[0]->penerimaan - $jumlahPengeluaranSemuaBulan[0]->pengeluaran;

			$tabel = 'bukades_buku_kas_umum';
			// var_dump($jumlahPengeluaranBulanIni[0]->pengeluaran);
			// exit();
			$buku_kas_umum = $this->m_23_buku_kas_umum->template_select($tabel);
			$perdes = $this->m_26_Perangkat_Desa->ambildata();
			$data = array(
				'bukamu' => $buku_kas_umum,
				'perdes'=> $perdes[0],
				'jumlahPenerimaanBulanLalu' => $jumlahPenerimaanBulanLalu ,
				'jumlahPenerimaanBulanIni' => $jumlahPenerimaanBulanIni ,
				'jumlahPenerimaanSemuaBulan' => $jumlahPenerimaanSemuaBulan ,
				'jumlahPengeluaranBulanLalu' => $jumlahPengeluaranBulanLalu ,
				'jumlahPengeluaranBulanIni' => $jumlahPengeluaranBulanIni ,				
				'jumlahPengeluaranSemuaBulan' => $jumlahPengeluaranSemuaBulan ,
				'sisaKas' => $sisaKas , 
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),

				);
			// $this->load->view('v_23_index',$data);
			$this->load->view('main_page/buku_administrasi/model_c_2/buku_kas_umum/pdf/v_23_pdf_buku_kas_umum.php', $data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}
		public function hiding($data)
		{
			if ($data == 'bidang') {
				$this->load->view('main_page/buku_administrasi/model_c_2/buku_kas_umum/include/'.$data);
			}else if ($data == 'kegiatan') {
				$this->load->view('main_page/buku_administrasi/model_c_2/buku_kas_umum/include/'.$data);
			}else if ($data == 'item') {
				$this->load->view('main_page/buku_administrasi/model_c_2/buku_kas_umum/include/'.$data);
			}
		}
		public function hapusItem($id)
		{
			$dataWhere = array(
				'id' => $id , 
				);
			$tabel="bukades_buku_kas_umum";
			$this->m_23_buku_kas_umum->template_hapus($tabel, $dataWhere);
			?>
				<script type="text/javascript">
					alert('Data berhasil di hapus');
					window.location="<?php echo base_url() ?>buku_administrasi/model_c_2/buku_kas_umum/C_23_buku_kas_umum";
				</script>
			<?php
		}

		public function fungsiSimpan()
		{
			$nomor_rekening 	= $_POST['txtNomorRekening'];
			$uraian 			= $_POST['txtUraian'];
			$k1 				= $_POST['txtk1'];
			$k2 				= $_POST['txtk2'];
			$k3 				= $_POST['txtk3'];
			$k4 				= $_POST['txtk4'];
			$penerimaan 		= $_POST['txtPenerimaan'];
			$pengeluaran	 	= $_POST['txtPengeluaran'];
			$tanggal 			= $_POST['txtDate'];

			$dataSimpan = array(
				'nomor_rekening' => $nomor_rekening , 
				'uraian' => $uraian,
				'k1' => $k1,
				'k2' => $k2,
				'k3' => $k3,
				'k4' => $k4,
				'penerimaan' => $penerimaan,
				'pengeluaran' => $pengeluaran,
				'tanggal' => $tanggal,
				);
			// var_dump($dataSimpan);
			// exit();	
			$tabel = "bukades_buku_kas_umum";
			$this->m_23_buku_kas_umum->template_simpan($tabel, $dataSimpan);
			?>
				<script type="text/javascript">
					alert('Berhasil menyimpan data');
					window.location="<?php echo base_url() ?>buku_administrasi/model_c_2/buku_kas_umum/c_23_buku_kas_umum";
				</script>
			<?php
		}
		public function tambahItemRekening()
		{
			$nomor_rekening = $this->uri->segment(10);
			$uraian = $this->uri->segment(11);
			$k1 = $this->uri->segment(6);
			$k2 = $this->uri->segment(7);
			$k3 = $this->uri->segment(8);
			$k4 = $this->uri->segment(9);
			$keterangan = $this->uri->segment(12);
			$tahun_sebelumnya = $this->uri->segment(14);
			$tahun_berjalan = $this->uri->segment(13);

			$uraian = rawurldecode($uraian);
			$keterangan = rawurldecode($keterangan);

			$dataSimpan = array(
				'nomor_rekening' => $nomor_rekening , 
				'uraian' => $uraian,
				'k1' => $k1,
				'k2' => $k2,
				'k3' => $k3,
				'k4' => $k4,
				'keterangan' => $keterangan,
				'tahun_sebelumnya' => $tahun_sebelumnya,
				'tahun_berjalan' => $tahun_berjalan,
				);
			// var_dump($dataSimpan);
			// exit();	
			$tabel = "buku_kas_umum";
			$this->m_23_buku_kas_umum->template_simpan($tabel, $dataSimpan);

		}
		public function cekRekening($nomorRekening)
		{
			$rekening_ori = $nomorRekening;
			// penambahan nomor rekening
				for ($r=1; $r <10 ; $r++) { 
					$this->db->select('*');
					$this->db->from('buku_kas_umum');
					$this->db->where('nomor_rekening' ,$nomorRekening.".".$r);
					$query = $this->db->get();
					$hitung = $query->num_rows();
					if ($hitung == 0) {
						$nomorRekening = $nomorRekening.".".$r;
						$k = $r;
						break;
					}
				}
			// #penambahan nomor rekening
				// var_dump($nomorRekening);
			// mengambil data k1 k2 k3 k4 
				$tabel = "buku_kas_umum";
				$where = array(
					'nomor_rekening' => $rekening_ori , );
				$result = $this->m_23_buku_kas_umum->template_select_where($tabel, $where);
			// # mengambil data k1 k2 k3 k4
			?>
				<label class="control-label" for="basicinput">
					Nomor Rekening
				</label>
				<div class="controls">
					<input type="hidden" name="txtNorek" id="nomor_rekening" value="<?php echo $nomorRekening ?>" class="span4" readonly>
					<?php
						if (strlen($nomorRekening) == 3) {
							?>
								<input type="text" name="txtKorek" id="k1"  value="<?php echo $result[0]->k1 ?>" class="span4" readonly>
								<input type="text" name="txtKorek" id="k2" value="<?php echo $k ?>" class="span4" readonly>
							<?php
						}else if (strlen($nomorRekening) == 5) {
							?>
								<input type="text" name="txtKorek" id="k1"  value="<?php echo $result[0]->k1 ?>" class="span4" readonly>
								<input type="text" name="txtKorek" id="k2" value="<?php echo $result[0]->k2 ?>" class="span4" readonly>
								<input type="text" name="txtKorek" id="k3" value="<?php echo $k ?>" class="span4" readonly>
							<?php
						}else if (strlen($nomorRekening) == 7) {
							?>
								<input type="text" name="txtKorek" id="k1"  value="<?php echo $result[0]->k1 ?>" class="span4" readonly>
								<input type="text" name="txtKorek" id="k2" value="<?php echo $result[0]->k2 ?>" class="span4" readonly>
								<input type="text" name="txtKorek" id="k3" value="<?php echo $result[0]->k3 ?>" class="span4" readonly>
								<input type="text" name="txtKorek" id="k4" value="<?php echo $k ?>" class="span4" readonly>
							<?php
						}
					?>
					<!-- <input type="text" onclick="tambah()" readonly="" style="cursor: pointer;" name="cmdCek" class="btn btn-info span2" value="Ambil Rekening"> -->
				</div>
			<?php
		}


    public function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

    public function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 3);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
}
?>
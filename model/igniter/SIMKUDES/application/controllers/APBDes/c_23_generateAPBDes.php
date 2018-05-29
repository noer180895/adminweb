<?php
	/**
	* 
	*/
	class C_23_generateAPBDes extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('m_log');
			$this->load->model('APBDes/m_26_APBDes');
			$this->load->model('RAPBDes/m_26_RAPBDes');
			$this->load->model('rekening/m_23_rekening');
			$this->load->model('RAB/m_23_RAB');
			$this->load->model('buku_bank_desa/m_23_bukubankdesa');
			$this->load->model('buku_kas_pajak/m_23_bukuKasPajak');
			$this->load->model('buku_kas_umum/m_23_bukuKasUmum');
			$this->load->model('buku_tanggung_jawab/m_23_tanggungJawab');
			$this->load->model('buku_kas_bantu_kegiatan/m_23_bantuKegiatan');
			$this->load->model('buku_SPP/m_23_SPP');
			$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		}

		public function index()
		{
			if (isset($_SESSION['tahunApbdes'])) {
				// pengecekan data apakah status grant pada apbdes sudah 1 atau masih 0
					$tahun = $_SESSION['tahunApbdes'];
					$dataWhere = array(
						'tahun' => $tahun,
						'grant' => 1, 
						 );
					$hasil = $this->m_26_RAPBDes->cekGrant($dataWhere);

				//jika hasil dari pencarian ada ( == 1 ) maka buku akan ditampilkan
					if ($hasil == 1) {
						$data = array(
							'view' => 'main_page/APBDes/v_23_Buku_APBDes.php' , 
							);
						$this->load->view('v_23_index',$data);
					}else{
						?>
							<script type="text/javascript">
								alert('Data APBdes tidak ditemukan pada tahun '.$_SESSION['tahun']);
								window.location="<?php echo base_url() ?>";
							</script>
						<?php
					}// tutup else if ($hasil == 1)
			}else{
				?>
							<script type="text/javascript">
								window.location="<?php echo base_url() ?>";
							</script>
						<?php
			}
		}

		public function TanggalIndo($date){
	        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	        $tahun = substr($date, -4);
	        $bulan = substr($date, 3, 2);
	        $tgl   = substr($date, 0, 2);
	        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
	        return($result);
	    }
		public function pdf()
		{
			$R = date('H')-1;
			$nama_dokumen='Anggaran Pembangunan dan Belanja Desa '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$tahun = $_SESSION['tahunApbdes'];	
			$data = array(
				'view' => 'main_page/RAPBDes/v_23_pdf_RAPBDes.php' , 
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilRekening' => $this->m_26_RAPBDes->ambilDataRekeningBerdasarkanTahun($tahun), 
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_APBDes.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfBantuKegiatan()
		{	
			$R = date('H')-1;
			$nama_dokumen='Buku Kas Bantu Kegiatan '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$tahun = $_SESSION['tahunApbdes'];	
			$dataWhereItemTahunan = array(
					'tahun' => $_SESSION['tahunApbdes'] ,
					'kegiatan' => $_SESSION['kegiatan'], 
					);
			$itemTahun = $this->m_23_bantuKegiatan->selectWhere($dataWhereItemTahunan);
			$data = array(
				'view' => 'main_page/buku/v_23_buku_bantu_kegiatan.php' ,
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(), 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $itemTahun ,
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_bantuKegiatan.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfSPP()
		{
			$R = date('H')-1;
			$nama_dokumen='Surat Permintaan Pembayaran '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$tahun = $_SESSION['tahunApbdes'];	
			$dataWhereItemTahunan = array(
					'tahun' => $_SESSION['tahunApbdes'] ,
					'kegiatan' => $_SESSION['kegiatan'], 
					);
			$itemTahun = $this->m_23_SPP->selectWhere($dataWhereItemTahunan);
			$data = array(
				'view' => 'main_page/buku/v_23_buku_bantu_kegiatan.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $itemTahun ,
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_SPP.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfBBD()
		{
			$R = date('H')-1;
			$nama_dokumen='Laporan Buku Bank Desa '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$tahun = $_SESSION['tahunApbdes'];	
			$data = array(
				'view' => 'main_page/buku/v_23_Buku_Bank_Desa.php' ,
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $this->m_23_bukubankdesa->select(), 
				'sum_setoran' => $this->m_23_bukubankdesa->selectSum('setoran'),
				'sum_bungaBank' => $this->m_23_bukubankdesa->selectSum('bunga_bank'),
				'sum_penarikan' => $this->m_23_bukubankdesa->selectSum('penarikan'),
				'sum_pajak' => $this->m_23_bukubankdesa->selectSum('pajak'),
				'sum_biayaAdm' => $this->m_23_bukubankdesa->selectSum('biaya_adm'), 
				);
			$this->load->view('main_page/buku/pdf/v_23_Bank.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfkasUmum()
		{
			$R = date('H')-1;
			$nama_dokumen='Buku Bank Desa '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$tahun = $_SESSION['tahunApbdes'];	
			$data = array(
				'view' => 'main_page/buku/v_23_Buku_kasUmum.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $this->m_23_bukuKasUmum->select(), 
				'sum_penerimaan' => $this->m_23_bukuKasUmum->selectSum('penerimaan'),
				'sum_pengeluaran' => $this->m_23_bukuKasUmum->selectSum('pengeluaran'),
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_kasUmum.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfkasPajak()
		{
			$R = date('H')-1;
			$nama_dokumen='Laporan Buku Kas Bantu Pajak '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$tahun = $_SESSION['tahunApbdes'];	
			$data = array(
				'view' => 'main_page/buku/v_23_Buku_kasPajak.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $this->m_23_bukuKasPajak->select(), 
				'sum_pemotongan' => $this->m_23_bukuKasPajak->selectSum('pemotongan'),
				'sum_penyetoran' => $this->m_23_bukuKasPajak->selectSum('penyetoran'),
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_kasPajak.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfTanggungJawab()
		{
			$R = date('H')-1;
			$nama_dokumen='Laporan Buku Pernyataan Tanggung Jawab '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();
			$dataWhere = array(
				'kegiatan' => $_SESSION['kegiatan'] , 
				'tahun' => $_SESSION['tahunApbdes'] , 
				);
			$field = 'jumlah';
			$jumlahAnggaran = $this->m_23_tanggungJawab->selectJumlahTahunKegiatan($field, $dataWhere);
			$dataWhereItemTahunan = array(
					'tahun' => $_SESSION['tahunApbdes'] ,
					'kegiatan' => $_SESSION['kegiatan'], 
					);
			$itemTahun = $this->m_23_tanggungJawab->selectWhere($dataWhereItemTahunan);
			$tahun = $_SESSION['tahunApbdes'];	
			$data = array(
				'view' => 'main_page/buku/v_23_Buku_tanggungJawab.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $itemTahun ,
				'jumlah' => $jumlahAnggaran
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_tanggungJawab.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function pdfRAB()
		{
			$R = date('H')-1;
			$nama_dokumen='Laporan Rencana Anggaran Belanja '.$this->TanggalIndo(date('d m Y'))."_".date($R.':i:s'); //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$dataWhere = array(
				'tahun' => $_SESSION['tahunApbdes'] ,  
				);
			$dataLike = '2';
			$data = array(
				'view' => 'main_page/RAPBDes/v_23_pdf_RAPBDes.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilRekening' => $this->m_26_RAPBDes->ambilDataRekeningBerdasarkanapa($dataWhere, $dataLike), 
				'join' => $this->m_26_RAPBDes->ambilJoinPdfRab(),
				);
			$this->load->view('main_page/buku/pdf/v_23_pdf_RAB.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}


		public function APBDesTahunan()
		{
			$tahun = $_SESSION['tahunApbdes'];
			$data = array(
				'view' => 'main_page/buku/v_23_APBDes.php' ,
				'ambilRekening' => $this->m_26_RAPBDes->ambilDataRekeningBerdasarkanTahun($tahun),
				);
			$this->load->view('v_23_index',$data);
		}

		public function RAB()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$dataWhere = array(
					'nomor_rekening' => $id ,
					'tahun' => $_SESSION['tahunApbdes'] ,
					 );
				$hasil = $this->m_23_rekening->cariRekeningTahunan($dataWhere);
				if (strlen($id) == 5) {
					$kegiatan = $hasil[0]->uraian;
				}
				if (strlen($id) == 3) {
					$bidang = $hasil[0]->uraian;
					$this->session->set_userdata('bidang', $bidang);
				}
				$leng = strlen($id) + 2;
			}else{
				$id = "2";
				$leng = "3";
			}
			$tahun = $_SESSION['tahunApbdes'];

			if (isset($bidang)) {
				$data = array(
					'view' => 'main_page/buku/v_23_RAB.php' ,
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'leng' => $leng,
					'bidang' => $bidang,
					);
			}else if (isset($kegiatan)) {
				$dataAmbil =  $_SESSION['tahunApbdes'];
				$itemTahunan 	= $this->m_23_RAB->ambilRekening($dataAmbil);
				$dataWhereItemRekening = $_SESSION['tahunApbdes'];
				$itemRekening 	= $this->m_23_RAB->ambilItemRekening($dataWhereItemRekening);
				//pengecekan pada table RAB, cek tahun dimana tahun = tahun anggaran
				$cek = $this->m_23_RAB->cekRABpertahun($_SESSION['tahunApbdes']);
				if ($cek == 0) {
					
					//penyimpanan otomatis saat pengecekan tahun tidak ditemukan
					$this->insertRAB($itemRekening, $kegiatan);
					//Selesai menyimpan
					$dataWhere = array(
						'nomor_rekening' => $itemRekening[0]->nomor_rekening , 
						);
					$jumlahAnggaran = $this->m_23_RAB->hitungJumlahAnggaran($dataWhere);
				// tutup $cek == 0
				}else{
					$dataWhere = array(
						'nomor_rekening' => $itemRekening[0]->nomor_rekening , 
						'tahun' => $_SESSION['tahunApbdes'] , 
						);
					$jumlahAnggaran = $this->m_23_RAB->hitungJumlahAnggaran($dataWhere);
				}// tutup else $cek == 0

				$data = array(
					'view' => 'main_page/buku/v_23_RAB.php' ,
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'item' => $itemTahunan,
					'itemRekening'=>$itemRekening,
					'leng' => $leng,
					'bidang' => $_SESSION['bidang'],
					'id'=> $id,
					'kegiatan' => $kegiatan,
					'jumlah' => $jumlahAnggaran,
					);
			}else{
				$data = array(
				'view' => 'main_page/buku/v_23_RAB.php' ,
				'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
				'leng' => $leng,
				);	
			}
			
			$this->load->view('v_23_index',$data);
		}

		public function insertRAB($itemRekening, $kegiatan)
		{
			foreach ($itemRekening as $row) {
				$dataSimpan = array(
					'nomor_rekening'	 	=> $row->nomor_rekening ,
					'uraian' 				=> $row->uraian ,
					'jumlah'				=> $row->anggaran ,
					'tahun' 				=> $row->tahun ,
					'bidang' 				=> $_SESSION['bidang'],
					'kegiatan' 				=> $kegiatan,
					);
				$this->m_23_RAB->insert($dataSimpan);
			}// tutup foreach $item as $row
		}

		public function updateRAB()
		{
			if (isset($_GET['waktuPelaksanaan'])) {
				$dataUpdate = array(
					'waktu_pelaksanaan' => $_GET['waktuPelaksanaan'] , 
					);
			}elseif (isset($_GET['pelaksanaKegiatan'])) {
				$dataUpdate = array(
					'pelaksana_kegiatan' => $_GET['pelaksanaKegiatan'] ,
					);
			}elseif (isset($_GET['tanggal'])) {
				$dataUpdate = array(
					'tanggal' => $_GET['tanggal'] ,
					);
			}elseif (isset($_GET['uraian'])) {
				$volume = $this->uri->segment(6);
				$harga  = $this->uri->segment(5);
				$dataUpdate = array(
					'harga_satuan' => $harga ,
					'volume' => $volume,
					);
			}
				$this->fungsiUpdateRAB($dataUpdate);
			
		}
		public function fungsiUpdateRAB($dataUpdate)
		{
			if (isset($_GET['uraian'])) {
				$dataWhere = array(
					'uraian' => $_GET['uraian'] , 
					'tahun' => $_SESSION['tahunApbdes'] , 
					);
				$this->m_23_RAB->updateHeadRAB($dataUpdate, $dataWhere);
			}else{
				$norek = $this->uri->segment(4);
				$dataWhere = array(
					'nomor_rekening' => $norek , 
					'tahun' => $_SESSION['tahunApbdes'] , 
					);
				$this->m_23_RAB->updateHeadRAB($dataUpdate, $dataWhere);
			}
		}

		public function bukuBankDesa()
		{

			$data = array(
				'view' => 'main_page/buku/v_23_Buku_Bank_Desa.php' ,
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $this->m_23_bukubankdesa->select(), 
				'sum_setoran' => $this->m_23_bukubankdesa->selectSum('setoran'),
				'sum_bungaBank' => $this->m_23_bukubankdesa->selectSum('bunga_bank'),
				'sum_penarikan' => $this->m_23_bukubankdesa->selectSum('penarikan'),
				'sum_pajak' => $this->m_23_bukubankdesa->selectSum('pajak'),
				'sum_biayaAdm' => $this->m_23_bukubankdesa->selectSum('biaya_adm'), 
				);
			$this->load->view('v_23_index',$data);		
		}

		public function simpanBukuBankDesa()
		{
			if (isset($_POST['cmdSimpan'])) {
				$tanggalTransaksi 	= $_POST['dtmDate'];
				$uraian				= $_POST['txtUraian'];
				$buktiTransaksi		= $_POST['txtBukti'];
				$setoran			= $_POST['txtSetoran'];
				$bungaBank			= $_POST['txtBunga'];
				$penarikan			= $_POST['txtPenarikan'];
				$pajak				= $_POST['txtPajak'];
				$biayaADM			= $_POST['txtBiayaADM'];

				$ambil = $this->m_23_bukubankdesa->selectDesc();

				if (isset($ambil[0]->saldo)) {
					$saldo = $ambil[0]->saldo + $setoran + $bungaBank - $penarikan - $pajak - $biayaADM;
				}else{
					$saldo = $setoran + $bungaBank - $penarikan - $pajak - $biayaADM;
				}
				$dataSimpan = array(
					'tanggal_transaksi' => $tanggalTransaksi , 
					'uraian_transaksi' => $uraian , 
					'bukti_transaksi' => $buktiTransaksi , 
					'setoran' => $setoran , 
					'bunga_bank' => $bungaBank , 
					'penarikan' => $penarikan , 
					'pajak' => $pajak , 
					'biaya_ADM' => $biayaADM , 
					'saldo' => $saldo , 
					'tahun' => $_SESSION['tahunApbdes'], 
					);
				$this->m_23_bukubankdesa->insert($dataSimpan);
				?>
					<script type="text/javascript">
						alert('Data berhasil di tambahkan');
						window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuBankDesa";
					</script>
				<?php
			}
		}
		public function Hapus()
		{
			$dataDelete = array(
				'id' => $_GET['id'] , 
				);
			$this->m_23_bukubankdesa->delete($dataDelete);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Hapus ');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuBankDesa";
				</script>
			<?php			
		}


		public function FungsiUbah()
		{
			$id = $_GET['id'];
			$idMinSatu = $id - 1;
			$dataWhere = array(
				'id' => $id , 
				);

			$dataWhere2 = array(
				'id' => $idMinSatu , 
				);
			// var_dump($dataWhere);
			// exit();
			
			$tanggalTransaksi 	= $_POST['dtmDate'];
			$uraian				= $_POST['txtUraian'];
			$buktiTransaksi		= $_POST['txtBukti'];
			$setoran			= $_POST['txtSetoran'];
			$bungaBank			= $_POST['txtBunga'];
			$penarikan			= $_POST['txtPenarikan'];
			$pajak				= $_POST['txtPajak'];
			$biayaADM			= $_POST['txtBiayaADM'];

			$ambil = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere2);
			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $setoran + $bungaBank - $penarikan - $pajak - $biayaADM;
			}

			$dataUpdate = array(
				'tanggal_transaksi' => $tanggalTransaksi , 
				'uraian_transaksi' => $uraian , 
				'bukti_transaksi' => $buktiTransaksi , 
				'setoran' => $setoran , 
				'bunga_bank' => $bungaBank , 
				'penarikan' => $penarikan , 
				'pajak' => $pajak , 
				'biaya_ADM' => $biayaADM , 
				'saldo' => $saldo , 
				'tahun' => $_SESSION['tahunApbdes'], 
				);

			
			$this->m_23_bukubankdesa->update($dataUpdate, $dataWhere);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Update ');
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuBankDesa/";
				</script>
			<?php
		}

		/*
		=====================
			  KAS PAJAK
		=====================
		*/

		public function bukuKasPajak()
		{
			$data = array(
				'view' => 'main_page/buku/v_23_Buku_kasPajak.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $this->m_23_bukuKasPajak->select(), 
				'sum_pemotongan' => $this->m_23_bukuKasPajak->selectSum('pemotongan'),
				'sum_penyetoran' => $this->m_23_bukuKasPajak->selectSum('penyetoran'),
				);
			$this->load->view('v_23_index',$data);		
		}

		public function simpanPajak()
		{
			if (isset($_POST['cmdSimpan'])) {
				$tanggal	= $_POST['dtmDate'];
				$uraian				= $_POST['txtUraian'];
				$pemotongan	    	= $_POST['txtPemotongan'];
				$penyetoran			= $_POST['txtPenyetoran'];

				$ambil = $this->m_23_bukuKasPajak->selectDesc();

				if (isset($ambil[0]->saldo)) {
					$saldo = $ambil[0]->saldo + $pemotongan - $penyetoran;
				}else{
					$saldo = $pemotongan - $penyetoran;
				}
				$dataSimpan = array(
					'tanggal' => $tanggal , 
					'uraian' => $uraian , 
					'pemotongan' => $pemotongan , 
					'penyetoran' => $penyetoran , 
					'saldo' => $saldo , 
					'tahun' => $_SESSION['tahunApbdes'], 
					);
				$tabel = "buku_kas_pajak";
				$this->templateSimpan($tabel, $dataSimpan);
				?>
					<script type="text/javascript">
						alert('Data berhasil di tambahkan');
						window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasPajak";
					</script>
				<?php
			} //tutup isset cmdSimpan
		}

		public function hapusPajak()
		{
			$dataDelete = array(
				'id' => $_GET['id'] , 
				);
			$tabel = "buku_kas_pajak";
			$this->templateHapus($tabel, $dataDelete);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Hapus ');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasPajak";
				</script>
			<?php		
		}

		public function ubahPajak()
		{
			$id = $_GET['id'];
			$idMinSatu = $id - 1;
			$dataWhere = array(
				'id' => $id , 
				);

			$dataWhere2 = array(
				'id' => $idMinSatu , 
				);
			// var_dump($dataWhere);
			// exit();
			
			$tanggal			= $_POST['dtmDate'];
			$uraian				= $_POST['txtUraian'];
			$pemotongan	    	= $_POST['txtPemotongan'];
			$penyetoran			= $_POST['txtPenyetoran'];

			$ambil = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere2);
			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $pemotongan - $penyetoran;
			}
			$dataUpdate = array(
				'tanggal' => $tanggal , 
				'uraian' => $uraian , 
				'pemotongan' => $pemotongan , 
				'penyetoran' => $penyetoran , 
				
				);
			$tabel = "buku_kas_pajak";
			$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			
			?>
				<script type="text/javascript">
					alert('Data berhasil di Update ');
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasPajak/";
				</script>
			<?php
		}

		/*
		=====================
		#	  KAS PAJAK 	#
		=====================
		*/

		/*
		=====================
			  Kas Umum
		=====================
		*/

		public function bukuKasUmum()
		{
			$data = array(
				'view' => 'main_page/buku/v_23_Buku_kasUmum.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'item' => $this->m_23_bukuKasUmum->select(), 
				'sum_penerimaan' => $this->m_23_bukuKasUmum->selectSum('penerimaan'),
				'sum_pengeluaran' => $this->m_23_bukuKasUmum->selectSum('pengeluaran'),
				);
			$this->load->view('v_23_index',$data);
		}

		public function simpanKasUmum()
		{
			$tanggal			= $_POST['dtmDate'];
			$k1 = $_POST['txtK1'];
			$k2 = $_POST['txtK2'];
			$k3 = $_POST['txtK3'];
			$k4 = $_POST['txtK4'];
			$k5 = $_POST['txtK5'];
			
			$uraian							= $_POST['txtUraian'];
			$penerimaan	    				= $_POST['txtPenerimaan'];
			$pengeluaran					= $_POST['txtPengeluaran'];
			$no_bukti					= $_POST['txtNoBukti'];
			$jumlah_pengeluaran_komulatif 	= $pengeluaran;

			$ambil = $this->m_23_bukuKasUmum->selectDesc();

			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $penerimaan - $pengeluaran;
			}else{
				$saldo = $penerimaan - $pengeluaran;
			}
			$dataSimpan = array(
				'tanggal' => $tanggal , 
				'k1' => $k1,
				'k2' => $k2,
				'k3' => $k3,
				'k4' => $k4,
				'k5' => $k5,
				'uraian' => $uraian , 
				'no_bukti' => $no_bukti ,
				'penerimaan' => $penerimaan , 
				'pengeluaran' => $pengeluaran , 
				'saldo' => $saldo , 
				'tahun' => $_SESSION['tahunApbdes'], 
				);
			$tabel = "buku_kas_umum";
			$this->templateSimpan($tabel, $dataSimpan);
			?>
				<script type="text/javascript">
					alert('Data berhasil di tambahkan');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasUmum";
				</script>
			<?php
		}

		public function hapusKasUmum()
		{
			$dataDelete = array(
				'id' => $_GET['id'] , 
				);
			$tabel = "buku_kas_umum";
			$this->templateHapus($tabel, $dataDelete);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Hapus ');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasUmum";
				</script>
			<?php		
		}

		public function ubahKasUmum()
		{
			$id = $_GET['id'];
			$idMinSatu = $id - 1;
			$dataWhere = array(
				'id' => $id , 
				);

			$dataWhere2 = array(
				'id' => $idMinSatu , 
				);
			// var_dump($dataWhere);
			// exit();
			
			$tanggal			= $_POST['dtmDate'];
			$uraian				= $_POST['txtUraian'];
			$pemotongan	    	= $_POST['txtPemotongan'];
			$penyetoran			= $_POST['txtPenyetoran'];

			$ambil = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere2);
			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $pemotongan - $penyetoran;
			}
			$dataUpdate = array(
				'tanggal' => $tanggal , 
				'uraian' => $uraian , 
				'pemotongan' => $pemotongan , 
				'penyetoran' => $penyetoran , 
				
				);
			$tabel = "buku_kas_pajak";
			$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			
			?>
				<script type="text/javascript">
					alert('Data berhasil di Update ');
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasPajak/";
				</script>
			<?php
		}

		/*
		=====================
		#	  Kas Umum 	    #
		=====================
		*/

		/*
		=====================
			  Kas Bantu
		=====================
		*/

		public function bukuKasBantuKegiatan()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$dataWhere = array(
					'nomor_rekening' => $id ,
					'tahun' => $_SESSION['tahunApbdes'] ,
					 );
				$hasil = $this->m_23_rekening->cariRekeningTahunan($dataWhere);
				if (strlen($id) == 5) {
					$kegiatan = $hasil[0]->uraian;
				}
				if (strlen($id) == 3) {
					$bidang = $hasil[0]->uraian;
					$this->session->set_userdata('bidang', $bidang);
				}
				$leng = strlen($id) + 2;
			}else{
				$id = "2";
				$leng = "3";
			}
			$tahun = $_SESSION['tahunApbdes'];

			if (isset($bidang)) {
				$data = array(
					'view' => 'main_page/buku/v_23_Buku_kasBantuKegiatan.php' ,
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'leng' => $leng,
					'bidang' => $bidang,
					);
			}else if (isset($kegiatan)) {
				$dataAmbil =  $_SESSION['tahunApbdes'];
				$itemTahunan 	= $this->m_23_RAB->ambilRekening($dataAmbil);
				$dataWhereItemRekening = $_SESSION['tahunApbdes'];
				$itemRekening 	= $this->m_23_RAB->ambilItemRekening($dataWhereItemRekening);
				
				$dataWhereItemTahunan = array(
					'tahun' => $_SESSION['tahunApbdes'] ,
					'kegiatan' => $kegiatan, 
					);
				$itemTahun = $this->m_23_bantuKegiatan->selectWhere($dataWhereItemTahunan);
				// var_dump($_SESSION['tahunApbdes']);
				// exit();
				$data = array(
					'view' => 'main_page/buku/v_23_Buku_kasBantuKegiatan.php' , 
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'item' => $itemTahun,
					'itemRekening'=>$itemRekening,
					'leng' => $leng,
					'bidang' => $_SESSION['bidang'],
					'id'=> $id,
					'kegiatan' => $kegiatan,
					);
			}else{
				$data = array(
				'view' => 'main_page/buku/v_23_Buku_kasBantuKegiatan.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
				'leng' => $leng,
				);	
			}
			$this->load->view('v_23_index',$data);
		}

		public function simpanBantuKegiatan()
		{
			$tanggal						= $_POST['txtDtm'];		
			$uraian							= $_POST['txtUraian'];
			$dariBendahara	    			= $_POST['txtDariBendahara'];
			$dariSwadaya					= $_POST['txtDariSwadaya'];
			$no_bukti						= $_POST['txtNomorBukti'];
			$belanjaBarang	    			= $_POST['txtBelanjaBarang'];
			$belanjaModal	    			= $_POST['txtBelanjaModal'];
			$pengembalianBendahara			= $_POST['txtPengembalianBendahara'];		

			$ambil = $this->m_23_bantuKegiatan->selectDesc();

			if (isset($ambil[0]->saldo_kas)) {
				$saldo = $ambil[0]->saldo_kas + $dariBendahara +$dariSwadaya - $belanjaBarang - $belanjaModal;
			}else{
				$saldo = $dariBendahara +$dariSwadaya - $belanjaBarang - $belanjaModal;
			}
			$dataSimpan = array(
				'tanggal' => $tanggal , 
				'uraian' => $uraian ,
				'kegiatan' => $_SESSION['kegiatan'],
				'bidang'=>$_SESSION['bidang'],
				'nomor_bukti' => $no_bukti ,
				'penerimaan_bendahara' => $dariBendahara , 
				'penerimaan_swadaya_masyarakat' => $dariSwadaya , 
				'pengeluaran_belanja_modal' => $belanjaModal , 
				'pengeluaran_belanja_barang_dan_jasa' => $belanjaBarang , 
				'jumlah_pengembalian_ke_bendahara	' => $pengembalianBendahara , 
				'saldo_kas' => $saldo , 				
				'tahun' => $_SESSION['tahunApbdes'], 
				);
			$tabel = "buku_bantu_kegiatan";
			$this->templateSimpan($tabel, $dataSimpan);
			?>
				<script type="text/javascript">
					alert('Data berhasil di tambahkan');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasBantuKegiatan";
				</script>
			<?php
		}

		public function updateBantuKegiatan()
		{
			if (isset($_GET['kegiatan'])) {
				$kegiatan = $_GET['kegiatan'];
				$tahun = $_SESSION['tahunApbdes'];
				$tanggal = $this->uri->segment(4);
				$dataUpdate = array(
					'tanggal_ttd' => $tanggal , 
					);
				$dataWhere = array(
					'kegiatan' => $kegiatan , 
					'tahun' => $tahun , 
					);
				$tabel = "buku_bantu_kegiatan";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}else if (isset($_GET['pelaksanaKegiatan'])) {
				$pelaksana = $_GET['pelaksanaKegiatan'];
				$tahun = $_SESSION['tahunApbdes'];
				$id = $this->uri->segment(4);
				$dataUpdate = array(
					'pelaksana_kegiatan' => $pelaksana , 
					);
				$dataWhere = array(
					'tahun' => $tahun , 
					);
				$tabel = "buku_bantu_kegiatan";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}
		}

		public function hapusKasBantuKegiatan()
		{
			$dataDelete = array(
				'id' => $_GET['id'] , 
				);
			$tabel = "buku_bantu_kegiatan";
			$this->templateHapus($tabel, $dataDelete);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Hapus ');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasBantuKegiatan";
				</script>
			<?php		
		}

		public function ubahKasBantuKegiatan()
		{
			$id = $_GET['id'];
			$idMinSatu = $id - 1;
			$dataWhere = array(
				'id' => $id , 
				);

			$dataWhere2 = array(
				'id' => $idMinSatu , 
				);
			// var_dump($dataWhere);
			// exit();
			
			$tanggal			= $_POST['dtmDate'];
			$uraian				= $_POST['txtUraian'];
			$pemotongan	    	= $_POST['txtPemotongan'];
			$penyetoran			= $_POST['txtPenyetoran'];

			$ambil = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere2);
			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $pemotongan - $penyetoran;
			}
			$dataUpdate = array(
				'tanggal' => $tanggal , 
				'uraian' => $uraian , 
				'pemotongan' => $pemotongan , 
				'penyetoran' => $penyetoran , 
				
				);
			$tabel = "buku_kas_pajak";
			$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			
			?>
				<script type="text/javascript">
					alert('Data berhasil di Update ');
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasPajak/";
				</script>
			<?php
		}

		/*
		=====================
		#	  Kas Bantu	    #
		=====================
		*/

		/*
		=====================
			  SPP
		=====================
		*/

		public function bukuSPP()
		{
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$dataWhere = array(
					'nomor_rekening' => $id ,
					'tahun' => $_SESSION['tahunApbdes'] ,
					 );
				$hasil = $this->m_23_rekening->cariRekeningTahunan($dataWhere);
				if (strlen($id) == 5) {
					$kegiatan = $hasil[0]->uraian;
				}
				if (strlen($id) == 3) {
					$bidang = $hasil[0]->uraian;
					$this->session->set_userdata('bidang', $bidang);
				}
				$leng = strlen($id) + 2;
			}else{
				$id = "2";
				$leng = "3";
			}
			$tahun = $_SESSION['tahunApbdes'];

			if (isset($bidang)) {
				$data = array(
					'view' => 'main_page/buku/v_23_Buku_kasSPP.php' ,
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'leng' => $leng,
					'bidang' => $bidang,
					);
			}else if (isset($kegiatan)) {
				$dataAmbil =  $_SESSION['tahunApbdes'];
				$itemTahunan 	= $this->m_23_RAB->ambilRekening($dataAmbil);
				$dataWhereItemRekening = $_SESSION['tahunApbdes'];
				$itemRekening 	= $this->m_23_RAB->ambilItemRekening($dataWhereItemRekening);
				
				$dataWhereItemTahunan = array(
					'tahun' => $_SESSION['tahunApbdes'] ,
					'kegiatan' => $kegiatan, 
					);
				$itemTahun = $this->m_23_SPP->selectWhere($dataWhereItemTahunan);

				// $cek = $this->m_23_SPP->cekTanggungJawabpertahun($_SESSION['tahunApbdes']);
				// if ($cek == 0) {
				// 	$datasimpanSPP = array(
				// 		'tahun' => $_SESSION['tahunApbdes'] , 
				// 		'kegiatan' => $kegiatan , 
				// 		'bidang' => $_SESSION['bidang'] ,
				// 		);
				// 	$tabel = "SPP";
				// 	$this->templateSimpan($tabel, $datasimpanSPP);
				// }else{

				// }
				$data = array(
					'view' => 'main_page/buku/v_23_Buku_kasSPP.php' , 
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'item' => $itemTahun,
					'itemRekening'=>$itemRekening,
					'leng' => $leng,
					'bidang' => $_SESSION['bidang'],
					'id'=> $id,
					'kegiatan' => $kegiatan,
					'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
					);
				$this->session->set_userdata('kegiatan', $kegiatan);
			}else{
				$data = array(
				'view' => 'main_page/buku/v_23_Buku_kasSPP.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(), 
				'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
				'leng' => $leng,
				);	
			}
			$this->load->view('v_23_index',$data);
		}

		public function simpanSPP()
		{
			$uraian							= $_POST['txtUraian'];
			$paguAnggaran	    			= $_POST['txtPaguAnggaran'];
			$permintaan_sekarang			= $_POST['txtPermintaanSekarang'];
			$ambil = $this->m_23_SPP->selectDesc();

			if (isset($ambil[0]->sisa_dana)) {
				$dataWhereSum = array(
					'tahun' => $_SESSION['tahunApbdes'] , 
					'kegiatan' => $_SESSION['kegiatan'] , 
					);
				$field = "permintaan_sekarang";
				$jumlah = $this->m_23_SPP->selectJumlahTahunKegiatan($field, $dataWhereSum);
				$pencairan 						=  $ambil[0]->permintaan_sekarang;
				$jumlahSampaiSaatIni   			=  $jumlah[0]->permintaan_sekarang + $permintaan_sekarang;
				$sisa 							=  $paguAnggaran - $jumlahSampaiSaatIni;
			}else{
				$pencairan 						=  0;
				$jumlahSampaiSaatIni   			=  0 + $permintaan_sekarang;
				$sisa 							=  $paguAnggaran - $jumlahSampaiSaatIni;
			}

			$dataSimpan = array(
				'uraian' => $uraian ,
				'kegiatan' => $_SESSION['kegiatan'],
				'bidang'=>$_SESSION['bidang'],
				'pagu_anggaran' => $paguAnggaran ,
				'permintaan_sekarang' => $permintaan_sekarang , 
				'pencairan' => $pencairan , 
				'jumlah_sampai_saat_ini' => $jumlahSampaiSaatIni , 
				'sisa_dana' => $sisa , 
				'tahun' => $_SESSION['tahunApbdes'], 
				);
			$tabel = "SPP";
			$this->templateSimpan($tabel, $dataSimpan);
			?>
				<script type="text/javascript">
					alert('Data berhasil di tambahkan');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuSPP";
				</script>
			<?php
		}

		public function cekSPP()
		{
			$paguAnggaran	    			= $this->uri->segment(4);
			$permintaan_sekarang			= $this->uri->segment(5);
			$ambil = $this->m_23_SPP->selectDesc();

			if (isset($ambil[0]->sisa_dana)) {
				$dataWhereSum = array(
					'tahun' => $_SESSION['tahunApbdes'] , 
					'kegiatan' => $_SESSION['kegiatan'] , 
					);
				$field = "permintaan_sekarang";
				$jumlah = $this->m_23_SPP->selectJumlahTahunKegiatan($field, $dataWhereSum);
				$pencairan 						=  $ambil[0]->permintaan_sekarang;
				$jumlahSampaiSaatIni   			=  $jumlah[0]->permintaan_sekarang + $permintaan_sekarang;
				$sisa 							=  $paguAnggaran - $jumlahSampaiSaatIni;
			}else{
				$pencairan 						=  0;
				$jumlahSampaiSaatIni   			=  0 + $permintaan_sekarang;
				$sisa 							=  $paguAnggaran - $jumlahSampaiSaatIni;
			}

			echo $sisa;
		}

		public function updateSPP()
		{
			if (isset($_GET['kegiatan'])) {
				$kegiatan = $_GET['kegiatan'];
				$tahun = $_SESSION['tahunApbdes'];
				$tanggal = $this->uri->segment(4);
				$dataUpdate = array(
					'waktu_pelaksanaan' => rawurldecode($tanggal) , 
					);
				$dataWhere = array(
					'kegiatan' => $kegiatan , 
					'tahun' => $tahun , 
					);
				$tabel = "SPP";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}else if (isset($_GET['pelaksanaKegiatan'])) {
				$pelaksana = $_GET['pelaksanaKegiatan'];
				$tahun = $_SESSION['tahunApbdes'];
				$id = $this->uri->segment(4);
				$dataUpdate = array(
					'pelaksana_kegiatan' => $pelaksana , 
					);
				$dataWhere = array(
					'tahun' => $tahun , 
					);
				$tabel = "SPP";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}else if (isset($_GET['tanggal'])) {
				$tanggal = $_GET['tanggal'];
				$tahun = $_SESSION['tahunApbdes'];
				$kegiatan = $this->uri->segment(4);
				$dataUpdate = array(
					'tanggal_ttd' => $tanggal , 
					);
				$dataWhere = array(
					'kegiatan' => rawurldecode($kegiatan) , 
					'tahun' => $tahun , 
					);
				$tabel = "SPP";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}
		}

		public function hapusKasSPP()
		{
			$dataDelete = array(
				'id' => $_GET['id'] , 
				);
			$tabel = "SPP";
			$this->templateHapus($tabel, $dataDelete);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Hapus ');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuSPP";
				</script>
			<?php		
		}

		public function ubahKasSPP()
		{
			$id = $_GET['id'];
			$idMinSatu = $id - 1;
			$dataWhere = array(
				'id' => $id , 
				);

			$dataWhere2 = array(
				'id' => $idMinSatu , 
				);
			// var_dump($dataWhere);
			// exit();
			
			$tanggal			= $_POST['dtmDate'];
			$uraian				= $_POST['txtUraian'];
			$pemotongan	    	= $_POST['txtPemotongan'];
			$penyetoran			= $_POST['txtPenyetoran'];

			$ambil = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere2);
			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $pemotongan - $penyetoran;
			}
			$dataUpdate = array(
				'tanggal' => $tanggal , 
				'uraian' => $uraian , 
				'pemotongan' => $pemotongan , 
				'penyetoran' => $penyetoran , 
				
				);
			$tabel = "buku_kas_pajak";
			$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			
			?>
				<script type="text/javascript">
					alert('Data berhasil di Update ');
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasPajak/";
				</script>
			<?php
		}

		/*
		=====================
		#	  SPP	    #
		=====================
		*/

		/*
		=====================
			  Kas TanggungJawab
		=====================
		*/

		public function insertTanggungJawab($itemRekening, $kegiatan)
		{
			foreach ($itemRekening as $row) {
				$dataSimpan = array(
					'nomor_rekening'	 	=> $row->nomor_rekening ,
					'tahun' 				=> $row->tahun ,
					'bidang' 				=> $_SESSION['bidang'],
					'kegiatan' 				=> $kegiatan,
					);
				$this->m_23_tanggungJawab->insert($dataSimpan);
			}// tutup foreach $item as $row
		}

		public function bukuTangungJawab()
		{

			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$dataWhere = array(
					'nomor_rekening' => $id ,
					'tahun' => $_SESSION['tahunApbdes'] ,
					 );
				$hasil = $this->m_23_rekening->cariRekeningTahunan($dataWhere);
				if (strlen($id) == 5) {
					$kegiatan = $hasil[0]->uraian;
				}
				if (strlen($id) == 3) {
					$bidang = $hasil[0]->uraian;
					$this->session->set_userdata('bidang', $bidang);
				}
				$leng = strlen($id) + 2;
			}else{
				$id = "2";
				$leng = "3";
			}
			$tahun = $_SESSION['tahunApbdes'];

			if (isset($bidang)) {
				$data = array(
					'view' => 'main_page/buku/v_23_buku_tanggung_jawab.php' ,
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'leng' => $leng,
					'bidang' => $bidang,
					);
			}else if (isset($kegiatan)) {
				$dataAmbil =  $_SESSION['tahunApbdes'];
				$itemTahunan 	= $this->m_23_RAB->ambilRekening($dataAmbil);
				$dataWhereItemRekening = $_SESSION['tahunApbdes'];
				$itemRekening 	= $this->m_23_RAB->ambilItemRekening($dataWhereItemRekening);
				//pengecekan pada table RAB, cek tahun dimana tahun = tahun anggaran
				$cek = $this->m_23_tanggungJawab->cekTanggungJawabpertahun($_SESSION['tahunApbdes']);
				if ($cek == 0) {
					
					//penyimpanan otomatis saat pengecekan tahun tidak ditemukan
					// $this->insertTanggungJawab($itemRekening, $kegiatan);
					//Selesai menyimpan
					$dataWhere = array(
						'kegiatan' => $kegiatan ,
						'tahun' => $_SESSION['tahunApbdes'] , 
						);
					$field = 'jumlah';
					$jumlahAnggaran = $this->m_23_tanggungJawab->selectJumlahTahunKegiatan($field, $dataWhere);
				// tutup $cek == 0
				}else{
					$dataWhere = array(
						'kegiatan' => $kegiatan , 
						'tahun' => $_SESSION['tahunApbdes'] , 
						);
					$field = 'jumlah';
					$jumlahAnggaran = $this->m_23_tanggungJawab->selectJumlahTahunKegiatan($field, $dataWhere);
				}// tutup else $cek == 0

				$dataWhereItemTahunan = array(
					'tahun' => $_SESSION['tahunApbdes'] ,
					'kegiatan' => $kegiatan, 
					);
				$itemTahun = $this->m_23_tanggungJawab->selectWhere($dataWhereItemTahunan);
				// var_dump($_SESSION['tahunApbdes']);
				// exit();
				$data = array(
					'view' => 'main_page/buku/v_23_buku_tanggung_jawab.php' ,
					'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
					'item' => $itemTahun,
					'itemRekening'=>$itemRekening,
					'leng' => $leng,
					'bidang' => $_SESSION['bidang'],
					'id'=> $id,
					'kegiatan' => $kegiatan,
					'jumlah' => $jumlahAnggaran,
					);
				$this->session->set_userdata('kegiatan', $kegiatan);
			}else{
				$data = array(
				'view' => 'main_page/buku/v_23_buku_tanggung_jawab.php' , 
				'data' => $this->m_23_rekening->cariRekeningBuatRAB($id, $leng),
				'leng' => $leng,
				);	
			}
			$this->load->view('v_23_index',$data);
		}

		public function simpanTanggungJawab()
		{
			// $dataWhere = array(
			// 	'kegiatan' => $_POST['txtKegiatan'] , 
			// 	'tahun' => $_SESSION['tahunApbdes'] , 
			// 	);
			// $field = 'jumlah';
			// $jumlahTotal = $this->m_23_tanggungJawab->selectJumlahTahunKegiatan($field, $dataWhere);
			// $dataWhereRekening = array(
			// 	'uraian' => $_POST['txtKegiatan'] ,
			// 	'tahun' => $_SESSION['tahunApbdes'] ,
			// 	);
			// $cariRekening = $this->m_23_rekening->cariRekeningTahunan($dataWhereRekening);
			// $jumelah = $_POST['txtJumlah'];
			// $jumlahSemua = $jumelah + $jumlahTotal[0]->jumlah;
			
			// if ($jumlahSemua <= $cariRekening[0]->anggaran) {
				$dataSimpan = array(
					'uraian' => $_POST['txtUraian'] , 
					'penerima' => $_POST['txtPenerima'] ,
					'jumlah' => $_POST['txtJumlah'] ,
					'kegiatan' => $_POST['txtKegiatan']  ,
					'bidang' => $_POST['txtBidang']  ,
					'tahun' => $_SESSION['tahunApbdes'] ,
					);
				$tabel = "buku_tanggung_jawab";
				$this->templateSimpan($tabel, $dataSimpan);
				?>
					<script type="text/javascript">
						alert('Data berhasil di tambahkan');
						window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuTangungJawab";
					</script>
				<?php
		}

		public function updateTanggungJawab()
		{
			if (isset($_GET['kegiatan'])) {
				$kegiatan = $_GET['kegiatan'];
				$tahun = $_SESSION['tahunApbdes'];
				$tanggal = $this->uri->segment(4);
				$dataUpdate = array(
					'tanggal' => $tanggal , 
					);
				$dataWhere = array(
					'kegiatan' => $kegiatan , 
					'tahun' => $tahun , 
					);
				$tabel = "buku_tanggung_jawab";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}else if (isset($_GET['pelaksanaKegiatan'])) {
				$pelaksana = $_GET['pelaksanaKegiatan'];
				$tahun = $_SESSION['tahunApbdes'];
				$id = $this->uri->segment(4);
				$dataUpdate = array(
					'pelaksana_kegiatan' => $pelaksana , 
					);
				$dataWhere = array(
					'tahun' => $tahun , 
					);
				$tabel = "buku_tanggung_jawab";
				$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			}
		}

		public function hapusTanggungJawab()
		{
			$dataDelete = array(
				'id' => $_GET['id'] , 
				);
			$tabel = "buku_kas_umum";
			$this->templateHapus($tabel, $dataDelete);
			?>
				<script type="text/javascript">
					alert('Data berhasil di Hapus ');
					window.location="<?php echo base_url() ?>APBDes/C_23_generateAPBDes/bukuKasUmum";
				</script>
			<?php		
		}

		public function ubahTanggungJawab()
		{
			$id = $_GET['id'];
			$idMinSatu = $id - 1;
			$dataWhere = array(
				'id' => $id , 
				);

			$dataWhere2 = array(
				'id' => $idMinSatu , 
				);
			// var_dump($dataWhere);
			// exit();
			
			$tanggal			= $_POST['dtmDate'];
			$uraian				= $_POST['txtUraian'];
			$pemotongan	    	= $_POST['txtPemotongan'];
			$penyetoran			= $_POST['txtPenyetoran'];

			$ambil = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere2);
			if (isset($ambil[0]->saldo)) {
				$saldo = $ambil[0]->saldo + $pemotongan - $penyetoran;
			}
			$dataUpdate = array(
				'tanggal' => $tanggal , 
				'uraian' => $uraian , 
				'pemotongan' => $pemotongan , 
				'penyetoran' => $penyetoran , 
				
				);
			$tabel = "buku_kas_pajak";
			$this->templateUpdate($tabel, $dataWhere, $dataUpdate);
			
			?>
				<script type="text/javascript">
					alert('Data berhasil di Update ');
					window.location="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/bukuKasPajak/";
				</script>
			<?php
		}

		/*
		=====================
		#	  Kas Bantu	    #
		=====================
		*/
		public function bukuBantuKegiatan($value='')
		{
			# code...
		}
		/*
		=====================
			  Template
		=====================
		*/

		public function templateSimpan($tabel, $data)
		{
			$this->m_23_bukuKasPajak->templateSimpan($tabel, $data);
		}

		public function templateHapus($tabel, $data)
		{
			$this->m_23_bukuKasPajak->templateHapus($tabel, $data);
		}

		public function templateUpdate($tabel, $where, $dataUpdate)
		{
			$this->m_23_bukuKasPajak->templateUpdate($tabel, $where, $dataUpdate);
		}

		/*
		=====================
		#	  Template 	    #
		=====================
		*/

		/*
		=====================
			    Modal
		=====================
		*/

		public function modalUbah()
		{
	        $dataWhere = array(
	          'id' => $_GET['id'] , );
	        $dataModal = $this->m_23_bukubankdesa->selectWhereTahun($dataWhere);
			?>
				<div class="modal-body" id="berubah">
					<form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/FungsiUbah?id=<?php echo $_GET['id'] ?>" class="form-horizontal row-fluid" method="POST" >
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Tanggal</label>
			            <div class="controls">
			                <input type="date" id="inputDate" name="dtmDate" class="span8" value="<?php echo $dataModal[0]->tanggal_transaksi ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Uraian</label>
			            <div class="controls">
			                <input type="text" id="inputUraian"    name="txtUraian" class="span8" value="<?php echo $dataModal[0]->uraian_transaksi ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Bukti</label>
			            <div class="controls">
			                <input type="text" id="inputBukti"     name="txtBukti" class="span8" value="<?php echo $dataModal[0]->bukti_transaksi ?>" >
			            </div>
			          </div>
			          
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Setoran</label>
			            <div class="controls">
			                <input type="text" id="inputSetoran"   name="txtSetoran" class="span8" value="<?php echo $dataModal[0]->setoran ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Bunga</label>
			            <div class="controls">
			                <input type="text" id="inputBunga"     name="txtBunga" class="span8" value="<?php echo $dataModal[0]->bunga_bank ?>" > 
			            </div>
			          </div>
			           
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Penarikan</label>
			            <div class="controls">
			                <input type="text" id="inputPenarikan" name="txtPenarikan" class="span8" value="<?php echo $dataModal[0]->penarikan ?>" >
			            </div>
			          </div> 

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Pajak</label>
			            <div class="controls">
			                <input type="text" id="inputPajak"     name="txtPajak" class="span8" value="<?php echo $dataModal[0]->pajak ?>" >
			            </div>
			          </div> 

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Biaya ADM</label>
			            <div class="controls">
			                <input type="text" id="inputBiayaADM"  name="txtBiayaADM" class="span8" value="<?php echo $dataModal[0]->biaya_adm ?>" >
			            </div>
			          </div>
		    	<div class="modal-footer" style="margin-top: 5%">
			        <input type="SUBMIT"  id="tombol-aji" name="tombolTambah" class="btn btn-default" value="Ubah Uraian">
			    </div> <!-- # modal-footer -->
			        </form>
		    	</div> <!-- # modal-body -->
			<?php
		}

		public function modalUbahPajak()
		{
			$dataWhere = array(
	          'id' => $_GET['id'] , );
	        $dataModal = $this->m_23_bukuKasPajak->selectWhereTahun($dataWhere);
			?>
				<div class="modal-body" id="berubah">
					<form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/ubahPajak?id=<?php echo $_GET['id'] ?>" class="form-horizontal row-fluid" method="POST" >
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Tanggal</label>
			            <div class="controls">
			                <input type="date" id="inputDate" name="dtmDate" class="span8" value="<?php echo $dataModal[0]->tanggal ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Uraian</label>
			            <div class="controls">
			                <input type="text" id="inputUraian"    name="txtUraian" class="span8" value="<?php echo $dataModal[0]->uraian ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Pemotongan</label>
			            <div class="controls">
			                <input type="text" id="inputBukti"     name="txtPemotongan" class="span8" value="<?php echo $dataModal[0]->pemotongan ?>" >
			            </div>
			          </div>
			          
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Penyetoran</label>
			            <div class="controls">
			                <input type="text" id="inputSetoran"   name="txtPenyetoran" class="span8" value="<?php echo $dataModal[0]->penyetoran ?>" > 
			            </div>
			          </div>
		    	<div class="modal-footer" style="margin-top: 5%">
			        <input type="SUBMIT"  id="tombol-aji" name="tombolTambah" class="btn btn-default" value="Ubah Uraian">
			    </div> <!-- # modal-footer -->
			        </form>
		    	</div> <!-- # modal-body -->
			<?php
		}

		public function modalUbahUmum()
		{
			$dataWhere = array(
	          'id' => $_GET['id'] , );
	        $dataModal = $this->m_23_bukuKasUmum->selectWhereTahun($dataWhere);
			?>
				<div class="modal-body" id="berubah">
					<form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/ubahUmum?id=<?php echo $_GET['id'] ?>" class="form-horizontal row-fluid" method="POST" >
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Tanggal</label>
			            <div class="controls">
			                <input type="date" id="inputDate" name="dtmDate" class="span8" value="<?php echo $dataModal[0]->tanggal ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Uraian</label>
			            <div class="controls">
			                <input type="text" id="inputUraian"    name="txtUraian" class="span8" value="<?php echo $dataModal[0]->uraian ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Penerimaan</label>
			            <div class="controls">
			                <input type="text" id="inputPenerimaan"     name="txtPenerimaan" class="span8" value="<?php echo $dataModal[0]->penerimaan ?>" >
			            </div>
			          </div>
			          
			          <div class="control-group">
			            <label class="control-label" for="basicinput">Pengeluaran</label>
			            <div class="controls">
			                <input type="text" id="inputPengeluaran"   name="txtPengeluaran" class="span8" value="<?php echo $dataModal[0]->pengeluaran ?>" > 
			            </div>
			          </div>

			          <div class="control-group">
			            <label class="control-label" for="basicinput">Nomor Bukti</label>
			            <div class="controls">
			                <input type="text" id="inputNomorBukti"   name="txtNomorBukti" class="span8" value="<?php echo $dataModal[0]->no_bukti ?>" > 
			            </div>
			          </div>

		    	<div class="modal-footer" style="margin-top: 5%">
			        <input type="SUBMIT"  id="tombol-aji" name="tombolTambah" class="btn btn-default" value="Ubah Uraian">
			    </div> <!-- # modal-footer -->
			        </form>
		    	</div> <!-- # modal-body -->
			<?php
		}

		/*
		=====================
		#	    Modal  		#
		=====================
		*/
	}
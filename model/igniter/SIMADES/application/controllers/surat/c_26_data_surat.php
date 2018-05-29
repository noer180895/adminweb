<?php 
	

/**
* 
*/
class C_26_data_surat extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('surat/m_26_data_surat');
		$this->load->model('Data_Penduduk/m_26_data_penduduk');
		$this->load->model('Data_Perusahaan/m_26_data_perusahaan');
		$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		$this->load->model('Penanda_Tangan/m_26_penanda_tangan');
		$this->load->model('rekap/m_26_rekap');
		$this->load->model('m_log');
	}


	public function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

	public function databuat()
	{
		if(isset($_POST['cari'])){
		$nama = $_POST['nama'];
		$id = $_GET['id'];
		$data = array(
			'nama' => $nama,
			'view' => 'main_page/surat/v_26_pilih_data',
			'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->caridatapendudukberdasarkan($nama),
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambilsuratberdasarkan' => $this->m_26_data_surat->ambildataberdasarkan($id),
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index',$data);
		}else{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/v_26_pilih_data',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambilsuratberdasarkan' => $this->m_26_data_surat->ambildataberdasarkan($id),
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index',$data);
		}

	}
	public function databuatcari()
	{
		$id=$_GET['id'];
		if(isset($_GET['nama'])){
		if ($_GET['nama']!="") {

		$id = $_GET['id'];
				$nama = $_GET['nama'];
				$data = array(
			'view' => 'main_page/surat/v_26_pilih_data',
			'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->caridatapendudukberdasarkan($nama),
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambilsuratberdasarkan' => $this->m_26_data_surat->ambildataberdasarkan($id),
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
					);
				$this->load->view('v_23_index',$data);
			}else{

				$nama = $_GET['nama'];
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/v_26_pilih_data',
			'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->caridatapendudukberdasarkan($nama),
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambilsuratberdasarkan' => $this->m_26_data_surat->ambildataberdasarkan($id),
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index',$data);
			}	
		}else{
			
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/v_26_pilih_data',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambilsuratberdasarkan' => $this->m_26_data_surat->ambildataberdasarkan($id),
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
			'ambildata' => $this->m_26_Perangkat_Desa->ambildata(),
			);
		$this->load->view('v_23_index',$data);
		}
	}
	public function scansurat()
	{
		$data = array(
			'view' => 'main_page/surat/surat_masuk/v_26_scan_surat_masuk', 
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpanscansurat()
	{
		if(isset($_POST['simpan'])){
		$foto               = $_FILES['pindaisurat']['name'];
		$foldergambar 		= "assets/suratMasuk/";
		$alamatgambar 		= $foldergambar.$foto;
    
		$suratmasuk	= $alamatgambar;
		$namapengirim = $_POST['namapengirim'];
		$nomorsurat = $_POST['nomorsurat'];
		$namasurat = $_POST['namasurat'];
		$tanggalsurat = $_POST['tanggalsurat'];
		$data = array(
			'id' => '',
			'nomor_surat' => $nomorsurat,
			'tanggal_surat' => $tanggalsurat,
			'dari_surat_masuk' => $namapengirim,
			'nama_surat' => $namasurat,
			'file_surat_masuk'	=> 		$suratmasuk ,
			'tanggal'	=> 		date('d m Y') ,
			);
		$this->m_26_data_surat->simpandatascansurat($data);
		
		$upload= move_uploaded_file($_FILES['pindaisurat']['tmp_name'], $alamatgambar);
		$aksi 	= 'Menyimpan file surat masuk';
				$this->m_log->log($aksi);
		?>
			<script type="text/javascript">
				alert('Data Surat Masuk berhasil di simpan');
				window.location="<?php echo base_url() ?>surat/c_26_data_surat/scansurat"
			</script>	
		<?php
		}
	}

	public function index()
	{
		$data = array(
			'view' => 'main_page/surat/v_26_nomor_surat',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function link()
	{
		$id=$_GET['surat'];
		$data = array(
			'view' => 'main_page/surat/v_26_ubah_nomor',
			'ambilsurat' => $this->m_26_data_surat->ambilsuratberdasarkan($id),
			);
		$this->load->view('v_23_index',$data);
	}

	public function buatsurat()
	{

		$data = array(
			'view' => 'main_page/surat/v_26_buat_surat',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function pilihjenissurat()
	{
		$idpenduduk = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/v_26_pilih_jenis_surat',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
			);
		$this->load->view('v_23_index',$data);
	}

	public function simpanskketerangankelahiran()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_kelahiran" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    
	    $kodeauto ++;
	    $maxstring = $kodeauto;
	    $id = $nosurat;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$namaibu = $_POST['namaibu'];
		$alamat = $_POST['alamat'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$namaanak = $_POST['namaanak'];
		$jk = $_POST['jk'];
		$harilahir = $_POST['harilahir'];
		$tanggal = $_POST['tgl'];
		$panjang = $_POST['panjang'];
		$berat = $_POST['berat'];
		$anakke = $_POST['anakke'];
		$terbilang = $this->terbilang($anakke);
		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama_ibu_kandung' => $namaibu,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'nama_anak' => $namaanak,
			'jenis_kelamin' => $jk,
			'hari_lahir' => $harilahir,
			'tanggal_lahir' => $tanggal,
			'panjang' => $panjang,
			'berat' => $berat,
			'anak_ke' => $anakke,
			'terbilang' => $terbilang,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskkelahiran($datasurat);
		$aksi 	= 'Menyimpan surat keterangan kelahiran';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilsuratketerangankelahiran?id=$nomorsurat';
						</script>
					";
	}

	public function hasilsuratketerangankelahiran()
	{

		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kelahiran/v_26_hasil_surat_keterangan_kelahiran',
			);

		$this->load->view('v_23_index',$data);
		
	}

	public function pdfsuratketerangankelahiran()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Kelahiran '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kelahiran/v_26_surat_keterangan_kelahiran.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskkelahiranberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_kelahiran/v_26_surat_keterangan_kelahiran.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskkelahiran()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kelahiran/v_26_word_skkelahiran',

			'ambildata' => $this->m_26_data_surat->ambildataskkelahiranberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_kelahiran/v_26_word_skkelahiran',$data);
	}

	public function excelskkelahiran()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kelahiran/v_26_excel_skkelahiran',

			'ambildata' => $this->m_26_data_surat->ambildataskkelahiranberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_kelahiran/v_26_excel_skkelahiran',$data);
	}

	public function simpanskpindah()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_pindah" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nokk = $_POST['nokk'];
		$nonik = $_POST['nonik'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$pekerjaan = $_POST['pekerjaan'];
		$agama = $_POST['agama'];
		$alamatbaru = $_POST['alamatbaru'];
		$desabaru = $_POST['desabaru'];
		$kecamatanbaru = $_POST['kecamatanbaru'];
		$kabupatenbaru = $_POST['kabupatenbaru'];
		$alasanpindah = $_POST['alasanpindah'];
		$jumlahpengikut = $_POST['jumlahpengikut'];
		$terbilang = $this->terbilang($jumlahpengikut);

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama_lengkap' => $nama,
			'nomor_kk' => $nokk,
			'nomor_nik' => $nonik,
			'jenis_kelamin' => $jk,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'agama' => $agama,
			'kewarganegaraan' => $kewarganegaraan,
			'status_perkawinan' => $statusperkawinan,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'pindah_ke' => $alamatbaru,
			'nama_desa_baru' => $desabaru,
			'nama_kecamatan_baru' => $kecamatanbaru,
			'nama_kabupaten_baru' => $kabupatenbaru,
			'alasan_pindah' => $alasanpindah,
			'jumlah_pengikut' => $jumlahpengikut,
			'terbilang' => $terbilang,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskpindah($datasurat);
		$aksi 	= 'Menyimpan surat keterangan pindah';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskpindah?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskpindah()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pindah/v_26_hasil_surat_keterangan_pindah',
			);

		$this->load->view('v_23_index',$data);
		
	}

	public function pdfskpindah()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Pindah '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pindah/v_26_surat_keterangan_pindah.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskpindahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_pindah/v_26_surat_keterangan_pindah.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskpindah()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pindah/v_26_word_skpindah',

			'ambildata' => $this->m_26_data_surat->ambildataskpindahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_pindah/v_26_word_skpindah',$data);
	}

	public function excelskpindah()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pindah/v_26_excel_skpindah',

			'ambildata' => $this->m_26_data_surat->ambildataskpindahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_pindah/v_26_excel_skpindah',$data);
	}

	public function simpanskdomisili()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_domisili" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$agama = $_POST['agama'];
		$tujuan = $_POST['tujuan'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'pekerjaan' => $pekerjaan,
			'agama' => $agama,
			'status_perkawinan' => $statusperkawinan,
			'kewarganegaraan' => $kewarganegaraan,
			'alamat' => $alamat,
			'tujuan' => $tujuan,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskdomisili($datasurat);
		$aksi 	= 'Menyimpan surat keterangan domisili';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskdomisili?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskdomisili()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili/v_26_hasil_surat_keterangan_domisili',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskdomisili()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Domisili '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili/v_26_surat_keterangan_domisili.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskdomisiliberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_domisili/v_26_surat_keterangan_domisili.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskdomisili()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili/v_26_word_skdomisili',

			'ambildata' => $this->m_26_data_surat->ambildataskdomisiliberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_domisili/v_26_word_skdomisili',$data);
	}

	public function excelskdomisili()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili/v_26_excel_skdomisili',

			'ambildata' => $this->m_26_data_surat->ambildataskdomisiliberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_domisili/v_26_excel_skdomisili',$data);
	}

	public function simpanskpembuatanktp()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_pengantar_pembuatan_ktp" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$agama = $_POST['agama'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'pekerjaan' => $pekerjaan,
			'agama' => $agama,
			'status_perkawinan' => $statusperkawinan,
			'kewarganegaraan' => $kewarganegaraan,
			'alamat' => $alamat,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskpembuatanktp($datasurat);
		$aksi 	= 'Menyimpan surat keterangan pembuatan ktp';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskpembuatanktp?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskpembuatanktp()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_ktp/v_26_hasil_surat_keterangan_pembuatan_ktp',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskpembuatanktp()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Pengantar Pembuatan KTP '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_ktp/v_26_surat_keterangan_pembuatan_ktp.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskpembuatanktpberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_pembuatan_ktp/v_26_surat_keterangan_pembuatan_ktp.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskpembuatanktp()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_ktp/v_26_word_skpembuatanktp',

			'ambildata' => $this->m_26_data_surat->ambildataskpembuatanktpberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_pembuatan_ktp/v_26_word_skpembuatanktp',$data);
	}

	public function excelskpembuatanktp()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_ktp/v_26_excel_skpembuatanktp',

			'ambildata' => $this->m_26_data_surat->ambildataskpembuatanktpberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_pembuatan_ktp/v_26_excel_skpembuatanktp',$data);
	}

	public function simpanskpembuatankk()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_pengantar_pembuatan_kk" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$agama = $_POST['agama'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'pekerjaan' => $pekerjaan,
			'agama' => $agama,
			'status_perkawinan' => $statusperkawinan,
			'kewarganegaraan' => $kewarganegaraan,
			'alamat' => $alamat,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskpembuatankk($datasurat);
		$aksi 	= 'Menyimpan surat keterangan pembuatan kk';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskpembuatankk?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskpembuatankk()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_kk/v_26_hasil_surat_keterangan_pembuatan_kk',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskpembuatankk()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Pengantar Pembuatan KK '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_kk/v_26_surat_keterangan_pembuatan_kk.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskpembuatankkberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_pembuatan_kk/v_26_surat_keterangan_pembuatan_kk.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskpembuatankk()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_kk/v_26_word_skpembuatankk',

			'ambildata' => $this->m_26_data_surat->ambildataskpembuatankkberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_pembuatan_kk/v_26_word_skpembuatankk',$data);
	}

	public function excelskpembuatankk()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_pembuatan_kk/v_26_excel_skpembuatankk',

			'ambildata' => $this->m_26_data_surat->ambildataskpembuatankkberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_pembuatan_kk/v_26_excel_skpembuatankk',$data);
	}

	public function simpanskwali()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_wali" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$umur = $_POST['umur'];
		$terbilang = $this->terbilang($umur);
		$agama = $_POST['agama'];

		$namacalonlakilaki = $_POST['namacalonlakilaki'];
		$alamatcalonlakilaki = $_POST['alamatcalonlakilaki'];
		$umurcalonlakilaki = $_POST['umurcalonlakilaki'];
		$terbilangdua = $this->terbilang($umurcalonlakilaki);
		$agamacalonlakilaki = $_POST['agamacalonlakilaki'];

		$namacalonperempuan = $_POST['namacalonperempuan'];
		$alamatcalonperempuan = $_POST['alamatcalonperempuan'];
		$umurcalonperempuan = $_POST['umurcalonperempuan'];
		$terbilangtiga = $this->terbilang($umurcalonperempuan);
		$agamacalonperempuan = $_POST['agamacalonperempuan'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'umur' => $umur,
			'terbilang' => $terbilang,
			'agama' => $agama,
			'alamat' => $alamat,
			'nama_dua' => $namacalonlakilaki,
			'umur_dua' => $umurcalonlakilaki,
			'terbilang_dua' => $terbilangdua,
			'agama_dua' => $agamacalonlakilaki,
			'alamat_dua' => $alamatcalonlakilaki,
			'nama_tiga' => $namacalonperempuan,
			'umur_tiga' => $umurcalonperempuan,
			'terbilang_tiga' => $terbilangtiga,
			'agama_tiga' => $agamacalonperempuan,
			'alamat_tiga' => $alamatcalonperempuan,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskwali($datasurat);
		$aksi 	= 'Menyimpan surat keterangan wali';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskwali?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskwali()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_wali/v_26_hasil_surat_keterangan_wali',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskwali()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Wali '.$this->TanggalIndo(date('d m Y'))." _ ".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_wali/v_26_surat_keterangan_wali.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskwaliberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_wali/v_26_surat_keterangan_wali.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskwali()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_wali/v_26_word_skwali',

			'ambildata' => $this->m_26_data_surat->ambildataskwaliberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_wali/v_26_word_skwali',$data);
	}

	public function excelskwali()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_wali/v_26_excel_skwali',

			'ambildata' => $this->m_26_data_surat->ambildataskwaliberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_wali/v_26_excel_skwali',$data);
	}

	public function simpanskskck()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_pembuatan_skck" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$agama = $_POST['agama'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'pekerjaan' => $pekerjaan,
			'agama' => $agama,
			'alamat' => $alamat,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskskck($datasurat);
		$aksi 	= 'Menyimpan surat keterangan skck';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskskck?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskskck()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_skck/v_26_hasil_surat_keterangan_skck',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskskck()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan SKCK '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_skck/v_26_surat_keterangan_skck.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskskckberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_skck/v_26_surat_keterangan_skck.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskskck()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_skck/v_26_word_skskck',

			'ambildata' => $this->m_26_data_surat->ambildataskskckberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_skck/v_26_word_skskck',$data);
	}

	public function excelskskck()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_skck/v_26_excel_skskck',

			'ambildata' => $this->m_26_data_surat->ambildataskskckberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_skck/v_26_excel_skskck',$data);
	}

	public function simpansknikah()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_untuk_nikah" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$agama = $_POST['agama'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$binbinti = $_POST['binbinti'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$namaistrisuamidulu = $_POST['namaistrisuamidulu'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'jenis_kelamin' => $jk,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'kewarganegaraan' => $kewarganegaraan,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'bin_binti' => $binbinti,
			'status_perkawinan' => $statusperkawinan,
			'nama_istri_suami_dulu' => $namaistrisuamidulu,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpansknikah($datasurat);
		$aksi 	= 'Menyimpan surat keterangan untuk nikah';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilsknikah?id=$nomorsurat';
						</script>
					";
	}

	public function hasilsknikah()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_nikah/v_26_hasil_surat_keterangan_nikah',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfsknikah()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan untuk Nikah '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_nikah/v_26_surat_keterangan_nikah.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildatasknikahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_nikah/v_26_surat_keterangan_nikah.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordsknikah()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_nikah/v_26_word_sknikah',

			'ambildata' => $this->m_26_data_surat->ambildatasknikahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_nikah/v_26_word_sknikah',$data);
	}

	public function excelsknikah()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_nikah/v_26_excel_sknikah',

			'ambildata' => $this->m_26_data_surat->ambildatasknikahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_nikah/v_26_excel_sknikah',$data);
	}

	public function simpansktidakmampu()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_tidak_mampu" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$statusperkawinan = $_POST['statusperkawinan'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'pekerjaan' => $pekerjaan,
			'status_perkawinan' => $statusperkawinan,
			'alamat' => $alamat,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpansktidakmampu($datasurat);
		$aksi 	= 'Menyimpan surat keterangan tidak mampu';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilsktidakmampu?id=$nomorsurat';
						</script>
					";
	}

	public function hasilsktidakmampu()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tidak_mampu/v_26_hasil_surat_keterangan_tidak_mampu',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfsktidakmampu()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Tidak Mampu '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tidak_mampu/v_26_surat_keterangan_tidak_mampu.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildatasktidakmampuberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_tidak_mampu/v_26_surat_keterangan_tidak_mampu.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordsktidakmampu()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tidak_mampu/v_26_word_sktidakmampu',

			'ambildata' => $this->m_26_data_surat->ambildatasktidakmampuberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_tidak_mampu/v_26_word_sktidakmampu',$data);
	}

	public function excelsktidakmampu()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tidak_mampu/v_26_excel_sktidakmampu',

			'ambildata' => $this->m_26_data_surat->ambildatasktidakmampuberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_tidak_mampu/v_26_excel_sktidakmampu',$data);
	}

	public function simpanskkematian()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_kematian" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$agama = $_POST['agama'];
		$haritgl = $_POST['haritgl'];
		$tgl = $_POST['tgl'];
		$jam = $_POST['jam'];
		$usia = $_POST['usia'];
		$terbilang = $this->terbilang($usia);
		$dikarenakan = $_POST['dikarenakan'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'agama' => $agama,
			'alamat' => $alamat,
			'hari_mati' => $haritgl,
			'tanggal_mati' => $tgl,
			'jam' => $jam,
			'pada_usia' => $usia,
			'terbilang' => $terbilang,
			'dikarenakan' => $dikarenakan,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskkematian($datasurat);
		$aksi 	= 'Menyimpan surat keterangan kematian';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskkematian?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskkematian()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kematian/v_26_hasil_surat_keterangan_kematian',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskkematian()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Kematian '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kematian/v_26_surat_keterangan_kematian.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskkematianberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_kematian/v_26_surat_keterangan_kematian.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskkematian()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kematian/v_26_word_skkematian',

			'ambildata' => $this->m_26_data_surat->ambildataskkematianberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_kematian/v_26_word_skkematian',$data);
	}

	public function excelskkematian()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_kematian/v_26_excel_skkematian',

			'ambildata' => $this->m_26_data_surat->ambildataskkematianberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_kematian/v_26_excel_skkematian',$data);
	}

	public function simpanskbelummenikah()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_belum_menikah" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$keperluan = $_POST['keperluan'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'jenis_kelamin' => $jk,
			'pekerjaan' => $pekerjaan,
			'agama' => $agama,
			'alamat' => $alamat,
			'tujuan' => $keperluan,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskbelummenikah($datasurat);
		$aksi 	= 'Menyimpan surat keterangan belum menikah';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskbelummenikah?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskbelummenikah()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_belum_menikah/v_26_hasil_surat_keterangan_belum_menikah',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskbelummenikah()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Belum Menikah '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_belum_menikah/v_26_surat_keterangan_belum_menikah.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskbelummenikahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_belum_menikah/v_26_surat_keterangan_belum_menikah.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskbelummenikah()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_belum_menikah/v_26_word_skbelummenikah',

			'ambildata' => $this->m_26_data_surat->ambildataskbelummenikahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_belum_menikah/v_26_word_skbelummenikah',$data);
	}

	public function excelskbelummenikah()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_belum_menikah/v_26_excel_skbelummenikah',

			'ambildata' => $this->m_26_data_surat->ambildataskbelummenikahberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_belum_menikah/v_26_excel_skbelummenikah',$data);
	}

	public function simpanskasalusul()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_asal_usul" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];

		$namaayah = $_POST['namaayah'];
		$alamatayah = $_POST['alamatayah'];
		$tempatlahirayah = $_POST['tmptlahirayah'];
		$tgllahirayah = $_POST['tgllahirayah'];
		$agamaayah = $_POST['agamaayah'];
		$pekerjaanayah = $_POST['pekerjaanayah'];
		$kewarganegaraanayah = $_POST['kewarganegaraanayah'];

		$namaibu = $_POST['namaibu'];
		$alamatibu = $_POST['alamatibu'];
		$tempatlahiribu = $_POST['tmptlahiribu'];
		$tgllahiribu = $_POST['tgllahiribu'];
		$agamaibu = $_POST['agamaibu'];
		$pekerjaanibu = $_POST['pekerjaanibu'];
		$kewarganegaraanibu = $_POST['kewarganegaraanibu'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);
		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'rt' => $rt,
			'rw' => $rw,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'kewarganegaraan' => $kewarganegaraan,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'nama_pria' => $namaayah,
			'tempat_lahir_pria' => $tempatlahirayah,
			'tanggal_lahir_pria' => $tgllahirayah,
			'kewarganegaraan_pria' => $kewarganegaraanayah,
			'agama_pria' => $agamaayah,
			'pekerjaan_pria' => $pekerjaanayah,
			'alamat_pria' => $alamatayah,
			'nama_wanita' => $namaibu,
			'tempat_lahir_wanita' => $tempatlahiribu,
			'tanggal_lahir_wanita' => $tgllahiribu,
			'kewarganegaraan_wanita' => $kewarganegaraanibu,
			'agama_wanita' => $agamaibu,
			'pekerjaan_wanita' => $pekerjaanibu,
			'alamat_wanita' => $alamatibu,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);
		$this->m_26_data_surat->simpanskasalusul($datasurat);
		$aksi 	= 'Menyimpan surat keterangan asal usul';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskasalusul?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskasalusul()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_asal_usul/v_26_hasil_surat_keterangan_asal_usul',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskasalusul()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Asal Usul '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_asal_usul/v_26_surat_keterangan_asal_usul.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskasalusulberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_asal_usul/v_26_surat_keterangan_asal_usul.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskasalusul()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_asal_usul/v_26_word_skasalusul',

			'ambildata' => $this->m_26_data_surat->ambildataskasalusulberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_asal_usul/v_26_word_skasalusul',$data);
	}

	public function excelskasalusul()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_asal_usul/v_26_excel_skasalusul',

			'ambildata' => $this->m_26_data_surat->ambildataskasalusulberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_asal_usul/v_26_excel_skasalusul',$data);
	}

	public function simpanspmempelai()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_persetujuan_mempelai" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nama = $_POST['nama'];
		$bin = $_POST['bin'];
		$alamat = $_POST['alamat'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$kewarganegaraan = $_POST['kewarganegaraan'];

		$namaistri = $_POST['namaistri'];
		$binti = $_POST['binti'];
		$alamatistri = $_POST['alamatistri'];
		$tempatlahiristri = $_POST['tmptlahiristri'];
		$tgllahiristri = $_POST['tgllahiristri'];
		$agamaistri = $_POST['agamaistri'];
		$pekerjaanistri = $_POST['pekerjaanistri'];
		$kewarganegaraanistri = $_POST['kewarganegaraanistri'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'nama_suami' => $nama,
			'bin' => $bin,
			'tempat_lahir_suami' => $tempatlahir,
			'tanggal_lahir_suami' => $tgllahir,
			'kewarganegaraan_suami' => $kewarganegaraan,
			'agama_suami' => $agama,
			'pekerjaan_suami' => $pekerjaan,
			'alamat_suami' => $alamat,
			'nama_istri' => $namaistri,
			'binti' => $binti,
			'tempat_lahir_istri' => $tempatlahiristri,
			'tanggal_lahir_istri' => $tgllahiristri,
			'kewarganegaraan_istri' => $kewarganegaraanistri,
			'agama_istri' => $agamaistri,
			'pekerjaan_istri' => $pekerjaanistri,
			'alamat_istri' => $alamatistri,
			'tanggal' => date('d m Y'),
			'penanda_tangan_suami' => $nama,
			'penanda_tangan_istri' => $namaistri,
			);

		$this->m_26_data_surat->simpanspmempelai($datasurat);
		$aksi 	= 'Menyimpan surat persetujuan mempelai';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilspmempelai?id=$nomorsurat';
						</script>
					";
	}

	public function hasilspmempelai()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_persetujuan_mempelai/v_26_hasil_surat_persetujuan_mempelai',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfspmempelai()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Persetujuan Mempelai '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_persetujuan_mempelai/v_26_surat_persetujuan_mempelai.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataspmempelaiberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_persetujuan_mempelai/v_26_surat_persetujuan_mempelai.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordspmempelai()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_persetujuan_mempelai/v_26_word_spmempelai',

			'ambildata' => $this->m_26_data_surat->ambildataspmempelaiberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_persetujuan_mempelai/v_26_word_spmempelai',$data);
	}

	public function excelspmempelai()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_persetujuan_mempelai/v_26_excel_spmempelai',

			'ambildata' => $this->m_26_data_surat->ambildataspmempelaiberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_persetujuan_mempelai/v_26_excel_spmempelai',$data);
	}

	public function simpansktorangtua()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_tentang_orang_tua" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$namabapa = $_POST['nama'];
		$tempatlahirbapa = $_POST['tmptlahir'];
		$tgllahirbapa = $_POST['tgllahir'];
		$kewarganegaraanbapa = $_POST['kewarganegaraan'];
		$agamabapa = $_POST['agama'];
		$pekerjaanbapa = $_POST['pekerjaan'];
		$alamatbapa = $_POST['alamat'];


		$namaibu = $_POST['namaibu'];
		$tempatlahiribu = $_POST['tmptlahiribu'];
		$tgllahiribu = $_POST['tgllahiribu'];
		$kewarganegaraanibu = $_POST['kewarganegaraanibu'];
		$agamaibu = $_POST['agamaibu'];
		$pekerjaanibu = $_POST['pekerjaanibu'];
		$alamatibu = $_POST['alamatibu'];


		$namaanak = $_POST['namaanak'];
		$jkanak = $_POST['jk'];
		$tempatlahiranak = $_POST['tmptlahiranak'];
		$tgllahiranak = $_POST['tgllahiranak'];
		$kewarganegaraananak = $_POST['kewarganegaraananak'];
		$agamaanak = $_POST['agamaanak'];
		$pekerjaananak = $_POST['pekerjaananak'];
		$alamatanak = $_POST['alamatanak'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'nama_ayah' => $namabapa,
			'tempat_lahir_ayah' => $tempatlahirbapa,
			'tanggal_lahir_ayah' => $tgllahirbapa,
			'kewarganegaraan_ayah' => $kewarganegaraanbapa,
			'agama_ayah' => $agamabapa,
			'pekerjaan_ayah' => $pekerjaanbapa,
			'alamat_ayah' => $alamatbapa,
			'nama_ibu' => $namaibu,
			'tempat_lahir_ibu' => $tempatlahiribu,
			'tanggal_lahir_ibu' => $tgllahiribu,
			'kewarganegaraan_ibu' => $kewarganegaraanibu,
			'agama_ibu' => $agamaibu,
			'pekerjaan_ibu' => $pekerjaanibu,
			'alamat_ibu' => $alamatibu,
			'nama' => $namaanak,
			'jenis_kelamin' => $jkanak,
			'tempat_lahir' => $tempatlahiranak,
			'tanggal_lahir' => $tgllahiranak,
			'kewarganegaraan' => $kewarganegaraananak,
			'agama' => $agamaanak,
			'pekerjaan' => $pekerjaananak,
			'alamat' => $alamatanak,
			'tanggal' => date('d m Y'),
			'penanda_tangan' => '',
			);

		$this->m_26_data_surat->simpansktorangtua($datasurat);
		$aksi 	= 'Menyimpan surat keterangan tentang orang tua';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilsktorangtua?id=$nomorsurat';
						</script>
					";
	}

	public function hasilsktorangtua()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tentang_orang_tua/v_26_hasil_surat_keterangan_tentang_orang_tua',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfsktorangtua()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Tentang Orang Tua '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tentang_orang_tua/v_26_surat_keterangan_tentang_orang_tua.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildatasktorangtuaberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_tentang_orang_tua/v_26_surat_keterangan_tentang_orang_tua.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordsktorangtua()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tentang_orang_tua/v_26_word_sktorangtua',

			'ambildata' => $this->m_26_data_surat->ambildatasktorangtuaberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_tentang_orang_tua/v_26_word_sktorangtua',$data);
	}

	public function excelsktorangtua()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_tentang_orang_tua/v_26_excel_sktorangtua',

			'ambildata' => $this->m_26_data_surat->ambildatasktorangtuaberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_tentang_orang_tua/v_26_excel_sktorangtua',$data);
	}

	public function simpanskdomisiliperusahaan()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_domisili_perusahaan" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$namasurat = $_POST['namasurat'];
		$nonik = $_POST['nonik'];
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tmptlahir'];
		$tgllahir = $_POST['tgllahir'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$statusperkawinan = $_POST['statuspernikahan'];

		$jabatan = $_POST['jabatan'];
		$namaperusahaan = $_POST['namaperusahaan'];
		$alamatperusahaan = $_POST['alamatperusahaan'];
		$nomortelepon = $_POST['nomortelepon'];
		$jenisusaha = $_POST['jenisusaha'];
		$notarispendirian = $_POST['notarispendirian'];
		$nomorpendirian = $_POST['nomorpendirian'];
		$tanggalpendirian = $_POST['tanggalpendirian'];
		$jamkerja = $_POST['jamkerja'];
		$jamkerjasampai = $_POST['jamkerjasampai'];
		$jumlahkaryawan = $_POST['jumlahkaryawan'];
		$terbilang =  $this->terbilang($jumlahkaryawan);
		$luastanah = $_POST['luastanah'];
		$luasbangunan = $_POST['luasbangunan'];


		$berlaku = $_POST['berlaku'];

		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'nama' => $nama,
			'no_ktp' => $nonik,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tgllahir,
			'kewarganegaraan' => $kewarganegaraan,
			'status_perkawinan' => $statusperkawinan,
			'jenis_kelamin' => $jk,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'jabatan' => $jabatan,
			'nama_perusahaan' => $namaperusahaan,
			'alamat_perusahaan' => $alamatperusahaan,
			'nomor_telepon' => $nomortelepon,
			'jenis_usaha' => $jenisusaha,
			'notaris_pendirian' => $notarispendirian,
			'nomor_pendirian' => $nomorpendirian,
			'tanggal_pendirian' => $tanggalpendirian,
			'jam_kerja' => $jamkerja,
			'jam_kerja_sampai' => $jamkerjasampai,
			'jumlah_karyawan' => $jumlahkaryawan,
			'terbilang' => $terbilang,
			'luas_tanah' => $luastanah,
			'luas_bangunan' => $luasbangunan,
			'berlaku' => $berlaku,
			'tanggal' => date('d m Y'),
			'penanda_tangan_kecamatan' => '',
			'penanda_tangan_kelurahan' => '',
			);
		$dataperusahaan = array(
			'id' => "",
			'nama_perusahaan' => $namaperusahaan,
			'alamat_perusahaan' => $alamatperusahaan,
			'nomor_telepon' => $nomortelepon,
			'bidang' => $jenisusaha,
			'notaris_pendirian' => $notarispendirian,
			'nomor_pendirian' => $nomorpendirian,
			'tanggal_pendirian' => $tanggalpendirian,
			'jam_kerja' => $jamkerja,
			'jam_kerja_sampai' => $jamkerjasampai,
			'jumlah_karyawan' => $jumlahkaryawan,
			'luas_tanah' => $luastanah,
			'luas_bangunan' => $luasbangunan,
			'terbilang' => $terbilang,
			);

		$this->m_26_data_perusahaan->simpan($dataperusahaan);
		
		$this->m_26_data_surat->simpanskdomisiliperusahaan($datasurat);
		$aksi 	= 'Menyimpan surat keterangan domisili perusahaan';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskdomisiliperusahaan?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskdomisiliperusahaan()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili_perusahaan/v_26_hasil_surat_keterangan_domisili_perusahaan',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskdomisiliperusahaan()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Domisili Perusahaan '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili_perusahaan/v_26_surat_keterangan_domisili_perusahaan.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskdomisiliperusahaanberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_domisili_perusahaan/v_26_surat_keterangan_domisili_perusahaan.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskdomisiliperusahaan()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili_perusahaan/v_26_word_skdomisiliperusahaan',

			'ambildata' => $this->m_26_data_surat->ambildataskdomisiliperusahaanberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_domisili_perusahaan/v_26_word_skdomisiliperusahaan',$data);
	}

	public function excelskdomisiliperusahaan()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_domisili_perusahaan/v_26_excel_skdomisiliperusahaan',

			'ambildata' => $this->m_26_data_surat->ambildataskdomisiliperusahaanberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_domisili_perusahaan/v_26_excel_skdomisiliperusahaan',$data);
	}

	public function simpanspermohonankkdinas()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_permohonan_kk_dinas" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$lampiran = $_POST['lampiran'];
		$perihal = $_POST['namasurat'];
		$kepada = $_POST['kepada'];
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$statusperkawinan = $_POST['statusperkawinan'];
		$noktp = $_POST['noktp'];
		$alamat = $_POST['alamat'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($perihal,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'lampiran' => $lampiran,
			'perihal' => $perihal,
			'tanggal' => date('d m Y'),
			'kepada' => $kepada,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jeniskelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'status_perkawinan' => $statusperkawinan,
			'no_ktp' => $noktp,
			'alamat' => $alamat,
			);

		$this->m_26_data_surat->simpanspermohonankk($datasurat);
		$aksi 	= 'Menyimpan surat Permohonan KK untuk Dinas';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilspermohonankkdinas?id=$nomorsurat';
						</script>
					";
	}

	public function hasilspermohonankkdinas()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_hasil_surat_permohonan_kk_untuk_dinas',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfspermohonankkdinas()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Permohonan KK untuk Dinas '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_surat_permohonan_kk_untuk_dinas.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataspermohonankkberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_surat_permohonan_kk_untuk_dinas.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordspermohonankkdinas()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_word_surat_permohonan_kk_untuk_dinas',

			'ambildata' => $this->m_26_data_surat->ambildataspermohonankkberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_word_surat_permohonan_kk_untuk_dinas',$data);
	}

	public function simpanspermohonanktpdinas()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_permohonan_ktp_dinas" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$lampiran = $_POST['lampiran'];
		$perihal = $_POST['namasurat'];
		$kepada = $_POST['kepada'];
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$golongandarah = $_POST['golongandarah'];
		$alamat = $_POST['alamat'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($perihal,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'lampiran' => $lampiran,
			'perihal' => $perihal,
			'kepada' => $kepada,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jeniskelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'golongan_darah' => $golongandarah,
			'tanggal' => date('d m Y'),
			);

		$this->m_26_data_surat->simpanspermohonanktp($datasurat);
		$aksi 	= 'Menyimpan surat Permohonan KTP untuk Dinas';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilspermohonanktpdinas?id=$nomorsurat';
						</script>
					";
	}

	public function hasilspermohonanktpdinas()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_hasil_surat_permohonan_ktp_untuk_dinas',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfspermohonanktpdinas()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Permohonan KTP untuk Dinas '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_surat_permohonan_ktp_untuk_dinas.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataspermohonanktpberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_surat_permohonan_ktp_untuk_dinas.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordspermohonanktpdinas()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_word_surat_permohonan_ktp_untuk_dinas',

			'ambildata' => $this->m_26_data_surat->ambildataspermohonanktpberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_word_surat_permohonan_ktp_untuk_dinas',$data);
	}

	public function simpanspermohonanaktakelahirandinas()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_permohonan_akta_kelahiran_dinas" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$lampiran = $_POST['lampiran'];
		$perihal = $_POST['namasurat'];
		$kepada = $_POST['kepada'];
		$namaanak = $_POST['namaanak'];
		$agamaanak = $_POST['agamaanak'];
		$jeniskelaminanak = $_POST['jeniskelaminanak'];
		$namaayah = $_POST['namaayah'];
		$tempatlahirayah = $_POST['tempatlahirayah'];
		$tanggallahirayah = $_POST['tanggallahirayah'];
		$agamaayah = $_POST['agamaayah'];
		$pekerjaanayah = $_POST['pekerjaanayah'];
		$alamatayah = $_POST['alamatayah'];
		$namaibu = $_POST['namaibu'];
		$tempatlahiribu = $_POST['tempatlahiribu'];
		$tanggallahiribu = $_POST['tanggallahiribu'];
		$agamaibu = $_POST['agamaibu'];
		$pekerjaanibu = $_POST['pekerjaanibu'];
		$alamatibu = $_POST['alamatibu'];
		$dibantu = $_POST['dibantu'];
		$jam = $_POST['jam'];
		$tanggal = $_POST['tanggal'];
		$tempat = $_POST['tempat'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($perihal,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'lampiran' => $lampiran,
			'perihal' => $perihal,
			'kepada' => $kepada,
			'nama_anak' => $namaanak,
			'agama_anak' => $agamaanak,
			'jenis_kelamin_anak' => $jeniskelaminanak,
			'nama_ayah' => $namaayah,
			'tempat_lahir_ayah' => $tempatlahirayah,
			'tanggal_lahir_ayah' => $tanggallahirayah,
			'agama_ayah' => $agamaayah,
			'pekerjaan_ayah' => $pekerjaanayah,
			'alamat_ayah' => $alamatayah,
			'nama_ibu' => $namaibu,
			'tempat_lahir_ibu' => $tempatlahiribu,
			'tanggal_lahir_ibu' => $tanggallahiribu,
			'agama_ibu' => $agamaibu,
			'pekerjaan_ibu' => $pekerjaanibu,
			'alamat_ibu' => $alamatibu,
			'dibantu' => $dibantu,
			'jam' => $jam,
			'tanggal' => $tanggal,
			'tempat' => $tempat,
			'tanggal_surat' => date('d m Y'),
			);

		$this->m_26_data_surat->simpanspermohonanaktakelahiran($datasurat);
		$aksi 	= 'Menyimpan surat Permohonan Akta Kelahiran untuk Dinas';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilspermohonanaktakelahirandinas?id=$nomorsurat';
						</script>
					";
	}

	public function hasilspermohonanaktakelahirandinas()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_hasil_surat_permohonan_akta_kelahiran_untuk_dinas',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfspermohonanaktakelahirandinas()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Permohonan Akta Kelahiran untuk Dinas '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_surat_permohonan_akta_kelahiran_untuk_dinas.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataspermohonanaktakelahiranberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_surat_permohonan_akta_kelahiran_untuk_dinas.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordspermohonanaktakelahirandinas()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_word_surat_permohonan_akta_kelahiran_untuk_dinas',

			'ambildata' => $this->m_26_data_surat->ambildataspermohonanaktakelahiranberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_word_surat_permohonan_akta_kelahiran_untuk_dinas',$data);
	}

	public function simpanskwarga()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_warga" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$namasurat = $_POST['namasurat'];
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'tanggal' => date('d m Y'),
			);

		$this->m_26_data_surat->simpanskwarga($datasurat);
		$aksi 	= 'Menyimpan surat Keterangan Warga';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskwarga?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskwarga()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_warga/v_26_hasil_surat_keterangan_warga',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskwarga()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Warga '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_warga/v_26_surat_keterangan_warga.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskwargaberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_warga/v_26_surat_keterangan_warga.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskwarga()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_warga/v_26_word_surat_keterangan_warga',

			'ambildata' => $this->m_26_data_surat->ambildataskwargaberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_warga/v_26_word_surat_keterangan_warga',$data);
	}

	public function simpanskpimb()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_keterangan_permohonan_imb" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$namasurat = $_POST['namasurat'];
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$namakades = $_POST['namakades'];
		$jabatankades = $_POST['jabatankades'];
		$nama = $_POST['nama'];
		$pekerjaan = $_POST['pekerjaan'];
		$alamat = $_POST['alamat'];
		$persilnomor = $_POST['persilnomor'];
		$persilnamapemilik = $_POST['persilnamapemilik'];
		$persilalamatbidang = $_POST['persilalamatbidang'];
		$persilpenggunaantanah = $_POST['persilpenggunaantanah'];
		$pemanfaatantanah = $_POST['pemanfaatantanah'];
		$statustanah = $_POST['statustanah'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'nama_kades' => $namakades,
			'jabatan_kades' => $jabatankades,
			'nama' => $nama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'persil_nomor' => $persilnomor,
			'persil_nama_pemilik' => $persilnamapemilik,
			'persil_alamat_bidang' => $persilalamatbidang,
			'persil_penggunaan_tanah' => $persilpenggunaantanah,
			'pemanfaatan_tanah' => $pemanfaatantanah,
			'status_tanah' => $statustanah,
			'tanggal' => date('d m Y'),
			);

		$this->m_26_data_surat->simpanskpimb($datasurat);
		$aksi 	= 'Menyimpan Surat Keterangan Permohonan IMB';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilskpimb?id=$nomorsurat';
						</script>
					";
	}

	public function hasilskpimb()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_permohonan_imb/v_26_hasil_surat_keterangan_permohonan_imb',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfskpimb()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Keterangan Permohonan Izin Mendirikan Bangunan '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_permohonan_imb/v_26_surat_keterangan_permohonan_imb.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataskpimbberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_keterangan_permohonan_imb/v_26_surat_keterangan_permohonan_imb.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordskpimb()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_keterangan_permohonan_imb/v_26_word_surat_keterangan_permohonan_imb',

			'ambildata' => $this->m_26_data_surat->ambildataskpimbberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_keterangan_permohonan_imb/v_26_word_surat_keterangan_permohonan_imb',$data);
	}

	public function simpansptugas()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_tugas_desa" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$namasurat = $_POST['namasurat'];
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$kewarganegaraan = $_POST['kewarganegaraan'];
		$agama = $_POST['agama'];
		$pendidikan = $_POST['pendidikan'];
		$alamat = $_POST['alamat'];
		$untuk = $_POST['untuk'];
		$tanggalawal = $_POST['tanggalawal'];
		$tanggalakhir = $_POST['tanggalakhir'];
		$tempat = $_POST['tempat'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'nama' => $nama,
			'tempat_lahir' => $tempatlahir,
			'tanggal_lahir' => $tanggallahir,
			'kewarganegaraan' => $kewarganegaraan,
			'agama' => $agama,
			'pendidikan' => $pendidikan,
			'alamat' => $alamat,
			'untuk' => $untuk,
			'tanggal_awal' => $tanggalawal,
			'tanggal_akhir' => $tanggalakhir,
			'tempat' => $tempat,
			'tanggal' => date('d m Y'),
			);

		$this->m_26_data_surat->simpansptugas($datasurat);
		$aksi 	= 'Menyimpan Surat Perintah Tugas';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilsptugas?id=$nomorsurat';
						</script>
					";
	}

	public function hasilsptugas()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_perintah_tugas/v_26_hasil_surat_perintah_tugas',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfsptugas()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Perintah Tugas '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_perintah_tugas/v_26_surat_perintah_tugas.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildatasptugasberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_perintah_tugas/v_26_surat_perintah_tugas.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordsptugas()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_perintah_tugas/v_26_word_surat_perintah_tugas',

			'ambildata' => $this->m_26_data_surat->ambildatasptugasberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_perintah_tugas/v_26_word_surat_perintah_tugas',$data);
	}

	public function simpanspizinkeramaian()
	{

		$nosurat = $_POST['nomorsurat'];

		$query = "select max(nomor_surat) as maxKode from data_surat_pengantar_izin_keramaian" ;
	    $sql = $this->db->query($query);
	    $data = $sql->result();
	    $Kode = $data[0]->maxKode;
	    $kodeauto = (int)substr($Kode, 0, 4);
	    
	    $kodeauto ++;
	    $id = $nosurat;
	    
	    $maxstring = $kodeauto;
	    if (strlen($maxstring)==1) {
	        $id = "00".$maxstring.$id;
	    }elseif (strlen($maxstring)==2) {
	        $id = "0".$maxstring.$id;
	    }elseif (strlen($maxstring)==3) {
	        $id = "".$maxstring.$id;
	    }else{
	        $id = "".$maxstring.$id;
	    }
	    $newID =$id;

		$nomorsurat = $newID;
		$namasurat = $_POST['namasurat'];
		$desa = $_POST['namadesa'];
		$kecamatan = $_POST['namakecamatan'];
		$kabupaten = $_POST['namakabupaten'];
		$lampiran = $_POST['lampiran'];
		$perihal = $_POST['namasurat'];
		$kepada = $_POST['kepada'];
		$penyampai = $_POST['penyampai'];
		$nama = $_POST['nama'];
		$a = $_POST['tanggallahir'];
		$umur = date('Y')-$a;
		$terbilang = $this->terbilang($umur);
		$jeniskelamin = $_POST['jeniskelamin'];
		$agama = $_POST['agama'];
		$pekerjaan = $_POST['pekerjaan'];
		$acara = $_POST['acara'];
		$waktupelaksanaanawal = $_POST['waktupelaksanaanawal'];
		$waktupelaksanaanakhir = $_POST['waktupelaksanaanakhir'];
		$tempat = $_POST['tempat'];


		$jumlah = $_POST['jumlah'];
		$a = $jumlah+1;
		$data = array(
			'jumlah_keluar' => $a, 
			);
		$this->m_26_rekap->usk($namasurat,$data);

		$datasurat = array(
			'id' => "",
			'nomor_surat' => $nomorsurat,
			'nama_desa' => $desa,
			'nama_kecamatan' => $kecamatan,
			'nama_kabupaten' => $kabupaten,
			'lampiran' => $lampiran,
			'perihal' => $perihal,
			'kepada' => $kepada,
			'penyampai' => $penyampai,
			'nama' => $nama,
			'umur' => $umur,
			'terbilang' => $terbilang,
			'jenis_kelamin' => $jeniskelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'acara' => $acara,
			'waktu_pelaksanaan_awal' => $waktupelaksanaanawal,
			'waktu_pelaksanaan_akhir' => $waktupelaksanaanakhir,
			'tempat' => $tempat,
			'tanggal' => date('d m Y'),
			);

		$this->m_26_data_surat->simpanspizinkeramaian($datasurat);
		$aksi 	= 'Menyimpan Surat Pengantar Izin Keramaian';
				$this->m_log->log($aksi);
		echo 
					"
						<script>
							alert('Data Surat Berhasil di Simpan');
							window.location='".base_url()."surat/c_26_data_surat/hasilspizinkeramaian?id=$nomorsurat';
						</script>
					";
	}

	public function hasilspizinkeramaian()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_pengantar_izin_keramaian/v_26_hasil_surat_pengantar_izin_keramaian',
			);

		$this->load->view('v_23_index',$data);
	}

	public function pdfspizinkeramaian()
	{
		$a = date('H')+5;
		$nama_dokumen='Surat Pengantar Izin Keramaian '.$this->TanggalIndo(date('d m Y'))."_".date($a.':i:s a'); //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
		 
		ob_start();

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_pengantar_izin_keramaian/v_26_surat_pengantar_izin_keramaian.php' , 
			
			'ambildata' => $this->m_26_data_surat->ambildataspizinkeramaianberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		
		$this->load->view('main_page/surat/surat_pengantar_izin_keramaian/v_26_surat_pengantar_izin_keramaian.php',$data);
		
	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function wordspizinkeramaian()
	{

		$nosurat = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/surat_pengantar_izin_keramaian/v_26_word_surat_pengantar_izin_keramaian',

			'ambildata' => $this->m_26_data_surat->ambildataspizinkeramaianberdasarkan($nosurat),
			'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
			'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
			);
		$this->load->view('main_page/surat/surat_pengantar_izin_keramaian/v_26_word_surat_pengantar_izin_keramaian',$data);
	}

	public function formisi()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/surat/v_26_pilih_data',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			'ambilsuratberdasarkan' => $this->m_26_data_surat->ambildataberdasarkan($id),
			'ambildatapenduduk' => $this->m_26_data_penduduk->ambildata(),
			);
		$this->load->view('v_23_index',$data);
	}

	public function tampilpilihandata()
	{
		$idpenduduk = $_GET['iddata'];
		$surat = $_GET['surat'];
		if($surat=="Surat Keterangan Kelahiran")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_kelahiran/v_26_form_surat_keterangan_kelahiran',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="surat Keterangan Pindah")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_pindah/v_26_form_surat_keterangan_pindah',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Domisili")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_domisili/v_26_form_surat_keterangan_domisili',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Pembuatan KTP")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_pembuatan_ktp/v_26_form_surat_keterangan_pembuatan_ktp',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Pembuatan KK")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_pembuatan_kk/v_26_form_surat_keterangan_pembuatan_kk',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Wali")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_wali/v_26_form_surat_keterangan_wali',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan untuk Nikah")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_nikah/v_26_form_surat_keterangan_nikah',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Pembuatan SKCK")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_skck/v_26_form_surat_keterangan_skck',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Tidak Mampu")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_tidak_mampu/v_26_form_surat_keterangan_tidak_mampu',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Kematian")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_kematian/v_26_form_surat_keterangan_kematian',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Belum Menikah")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_belum_menikah/v_26_form_surat_keterangan_belum_menikah',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Asal Usul")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_asal_usul/v_26_form_surat_keterangan_asal_usul',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Persetujuan Mempelai")
		{
			$data = array(
				'view' => 'main_page/surat/surat_persetujuan_mempelai/v_26_form_surat_persetujuan_mempelai',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan tentang Orang Tua")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_tentang_orang_tua/v_26_form_surat_keterangan_tentang_orang_tua',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Keterangan Domisili Perusahaan")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_domisili_perusahaan/v_26_form_surat_keterangan_domisili_perusahaan',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Permohonan KK untuk Dinas")
		{
			$data = array(
				'view' => 'main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_form_surat_permohonan_kk_untuk_dinas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Permohonan KTP untuk Dinas")
		{
			$data = array(
				'view' => 'main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_form_surat_permohonan_ktp_untuk_dinas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Permohonan Akta Kelahiran untuk Dinas")
		{
			$data = array(
				'view' => 'main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_form_surat_permohonan_akta_kelahiran_untuk_dinas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Keterangan Warga")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_warga/v_26_form_surat_keterangan_warga',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Keterangan Permohonan IMB")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_permohonan_imb/v_26_form_surat_keterangan_permohonan_imb',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Tugas Desa")
		{
			$data = array(
				'view' => 'main_page/surat/surat_perintah_tugas/v_26_form_surat_perintah_tugas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Pengantar Izin Keramaian")
		{
			$data = array(
				'view' => 'main_page/surat/surat_pengantar_izin_keramaian/v_26_form_surat_pengantar_izin_keramaian',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambildatapendudukberdasarkan' => $this->m_26_data_penduduk->ambildataberdasarkan($idpenduduk),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
	}

	public function tampilpilihandatakosong()
	{
		$surat = $_GET['surat'];
		if($surat=="Surat Keterangan Kelahiran")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_kelahiran/v_26_form_kosong_surat_keterangan_kelahiran',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="surat Keterangan Pindah")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_pindah/v_26_form_kosong_surat_keterangan_pindah',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Domisili")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_domisili/v_26_form_kosong_surat_keterangan_domisili',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Pembuatan KTP")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_pembuatan_ktp/v_26_form_kosong_surat_keterangan_pembuatan_ktp',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Pembuatan KK")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_pembuatan_kk/v_26_form_kosong_surat_keterangan_pembuatan_kk',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Wali")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_wali/v_26_form_kosong_surat_keterangan_wali',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan untuk Nikah")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_nikah/v_26_form_kosong_surat_keterangan_nikah',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Pembuatan SKCK")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_skck/v_26_form_kosong_surat_keterangan_skck',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Tidak Mampu")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_tidak_mampu/v_26_form_kosong_surat_keterangan_tidak_mampu',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Kematian")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_kematian/v_26_form_kosong_surat_keterangan_kematian',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Belum Menikah")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_belum_menikah/v_26_form_kosong_surat_keterangan_belum_menikah',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan Asal Usul")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_asal_usul/v_26_form_kosong_surat_keterangan_asal_usul',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Persetujuan Mempelai")
		{
			$data = array(
				'view' => 'main_page/surat/surat_persetujuan_mempelai/v_26_form_kosong_surat_persetujuan_mempelai',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
		elseif ($surat=="Surat Keterangan tentang Orang Tua")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_tentang_orang_tua/v_26_form_kosong_surat_keterangan_tentang_orang_tua',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Keterangan Domisili Perusahaan")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_domisili_perusahaan/v_26_form_kosong_surat_keterangan_domisili_perusahaan',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Permohonan KK untuk Dinas")
		{
			$data = array(
				'view' => 'main_page/surat/surat_permohonan_kk_untuk_dinas/v_26_form_kosong_surat_permohonan_kk_untuk_dinas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Permohonan KTP untuk Dinas")
		{
			$data = array(
				'view' => 'main_page/surat/surat_permohonan_ktp_untuk_dinas/v_26_form_kosong_surat_permohonan_ktp_untuk_dinas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Permohonan Akta Kelahiran untuk Dinas")
		{
			$data = array(
				'view' => 'main_page/surat/surat_permohonan_akta_kelahiran_untuk_dinas/v_26_form_kosong_surat_permohonan_akta_kelahiran_untuk_dinas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Keterangan Warga")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_warga/v_26_form_kosong_surat_keterangan_warga',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Keterangan Permohonan IMB")
		{
			$data = array(
				'view' => 'main_page/surat/surat_keterangan_permohonan_imb/v_26_form_kosong_surat_keterangan_permohonan_imb',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Tugas Desa")
		{
			$data = array(
				'view' => 'main_page/surat/surat_perintah_tugas/v_26_form_kosong_surat_perintah_tugas',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}elseif ($surat=="Surat Pengantar Izin Keramaian")
		{
			$data = array(
				'view' => 'main_page/surat/surat_pengantar_izin_keramaian/v_26_form_kosong_surat_pengantar_izin_keramaian',
				'ambilsuratberdasarkan' => $this->m_26_data_surat->ambilsuratberdasarkan($surat),
				'ambilperangkatdesa' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambilpenandatangan' => $this->m_26_penanda_tangan->ambildata(),
				'ambiljumlahsurat' => $this->m_26_rekap->ambildatasurat($surat),
				);
			$this->load->view('v_23_index',$data);
		}
	}


	public function kosong()
	{
		$a = $_POST['textasd'];
		$data = array(
			'ambildata' => $a,
			'view' => 'main_page/surat/v_26_kosong',
			'ambilsurat' => $this->m_26_data_surat->ambildata(),
			);
		$this->load->view('main_page/surat/v_26_kosong',$data);
	}

	public function ubahnomor()
	{
		$id=$_POST['id'];
		$slash = $_POST['slash'];
		$nomorsurat = $_POST['nomorsurat'];
		$nomorsuratbulan = $_POST['nomorsuratbulan'];
		$nomorsurattahun = $_POST['nomorsurattahun'];
		$campur = $slash.$nomorsurat.$nomorsuratbulan.$nomorsurattahun;
		$data = array(
			'nomor_surat' => $campur,
			);
		$this->m_26_data_surat->ubahnomor($data,$id);
		$aksi 	= 'Mengubah nomor surat '.$campur;
				$this->m_log->log($aksi);
		?>
			<script type="text/javascript">
				alert('Nomor Surat berhasil di ubah');
				window.location="<?php echo base_url() ?>surat/c_26_data_surat"
			</script>	
		<?php
	}
	public function konversi($x)
	{
		$x = abs($x);
		$angka = array ("","satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";

		if($x < 12){
		$temp = " ".$angka[$x];
		}else if($x<20){
		$temp = $this->konversi($x - 10)." belas";
		}else if ($x<100){
		$temp = $this->konversi($x/10)." puluh". $this->konversi($x%10);
		}else if($x<200){
		$temp = " seratus".$this->konversi($x-100);
		}else if($x<1000){
		$temp = $this->konversi($x/100)." ratus".$this->konversi($x%100);   
		}else if($x<2000){
		$temp = " seribu".$this->konversi($x-1000);
		}else if($x<1000000){
		$temp = $this->konversi($x/1000)." ribu".$this->konversi($x%1000);   
		}else if($x<1000000000){
		$temp = $this->konversi($x/1000000)." juta".$this->konversi($x%1000000);
		}else if($x<1000000000000){
		$temp = $this->konversi($x/1000000000)." milyar".$this->konversi($x%1000000000);
		}

		return $temp;
	}
   
	public function tkoma($x)
	{
		  $str = stristr($x,",");
		  $ex = explode(',',$x);
		   $a = '';
		  if(($ex[0]/10) >= 1){
		   $a = abs($ex[0]);
		  }
		  $string = array("nol", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan",   "sembilan","sepuluh", "sebelas");
		  $temp = "";
		  
		  $a2 = $ex[0]/10;
		  $pjg = strlen($str);
		  $i =1;
		     
		   
		  if($a>=1 && $a< 12){   
		   $temp .= " ".$string[$a];
		  }else if($a>12 && $a < 20){   
		   $temp .= $this->konversi($a - 10)." belas";
		  }else if ($a>20 && $a<100){   
		   $temp .= $this->konversi($a / 10)." puluh". $this->konversi($a % 10);
		  }else{
			   if($a2<1){
			     
				    while ($i<$pjg){     
				     $char = substr($str,$i,1);     
				     $i++;
				     $temp .= " ".$string[$char];
				    }
				}
		 }  
		  return $temp;
	}
		  
	public function terbilang($x)
	{
		  if($x<0){
		   $hasil = "minus ".trim($this->konversi(x));
		  }else{
		   $poin = trim($this->tkoma($x));
		   $hasil = trim($this->konversi($x));
		  }
		   
		if($poin){
		   $hasil = $hasil;
		  }else{
		   $hasil = $hasil;
		  }
		  return $hasil;  
	}
 	
	
}


?>
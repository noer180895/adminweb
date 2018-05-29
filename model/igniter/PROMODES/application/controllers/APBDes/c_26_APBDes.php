<?php

/**
* 
*/
class C_26_APBDes extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('APBDes/m_26_APBDes');
		$this->load->model('auth/m_23_log');
		$this->load->model('auth/m_23_auth');
		$this->load->model('m_log');
	}
	
	public function index()
	{
		$data = array(
			'view' => 'main_page/APBDes/v_26_Data_APBDes.php' , 

			'ambil' => $this->m_26_APBDes->ambildata(), 
			);
		
		$this->load->view('v_23_index',$data);
	}

	public function tambahapbdespendapatan()
	{
		$id=$_GET['id'];
		$data = array(
			'view' => 'main_page/APBDes/v_26_Buat_APBDes_Pendapatan.php' , 
 			'ambildata' => $this->m_26_APBDes->tambahdataapbdespendapatan($id),

			);
		
		$this->load->view('v_23_index',$data);
	}

	public function tambahDetail()
	{ 

		$noRek = $this->uri->segment(4);
		$uraian = $this->uri->segment(5);
		$volume = $this->uri->segment(6);
		$satuan = $this->uri->segment(7);
		$hargaset = $this->uri->segment(8);
		$jumlah = $this->uri->segment(9);
		$sumberdana = $this->uri->segment(10);
		$alokasi = $this->uri->segment(11);

		//menghitung jumlah dengan memanggil fungsi hitungJumlah() pada model m_26_apbdes
		$hasil = $this->m_26_APBDes->hitungJumlah($noRek);
		$hitung = $hasil[0]->jumlah + $jumlah;

		//mengambil data apbdes_pendapatan pada model m_26_apbdes
		$apbdes_pendapatan = $this->m_26_APBDes->ambildataapbdespendapatanBerdasarkan($noRek);
		$anggaran = $apbdes_pendapatan[0]->anggaran;

		$hitung_lebih = $hitung - $anggaran;
		// menghitung apakah jumlah yang di hitung akan melebihi total anggaran atau tidak
		if ($hitung > $anggaran ) {
			?>
			<tr>
				<td colspan="7">	
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Peringatan!</strong> Jumlah yang dimasukan (<?php echo $hitung ?>) tidak boleh melebihi jumlah anggaran
					</div>
				</td>
			</tr>
			<?php
		}else{
			$dataSimpan = array(
				'kode_rekening' => $noRek , 
				'uraian' => $uraian, 
				'volume' => $volume, 
				'satuan' => $satuan, 
				'harga_set' => $hargaset, 
				'jumlah' => $jumlah, 
				'sumber_dana' => $sumberdana, 
				'Alokasi_dana' => $alokasi, 
				);
			

				//$simpan = $this->m_26_APBDes->simpanDetail($dataSimpan);
				$this->db->insert('detail_apbdes_pendapatan', $dataSimpan);
			}// tutup else $hitung > $anggaran
			
			$hasil = $this->m_26_APBDes->ambildatadetailberdasarkan($noRek);
			if (isset($hasil[0])) {
				foreach ($hasil as $row) {
					?>
					<tr>
			            <td>
			                <input readonly type="text" value="<?php echo $row->uraian ?>" style="width:115px;height: 30px;">
			            </td>
			            <td>
			                <input readonly onkeyup="hitung()" type="number" value="<?php echo $row->volume ?>" style="width:50px;height: 30px;">
			            </td>
			            <td>
			                <input readonly type="text" value="<?php echo $row->satuan ?>" style="width:70px">
			            </td>
			            <td>
			                <input readonly onkeyup="hitung()" type="number" value="<?php echo $row->harga_set ?>" style="width:100px;height: 30px;">
			            </td>
			            <td>
			                <input readonly type="text" value="<?php echo $row->jumlah ?>" style="width:100px;height: 30px;">
			            </td>
			            <td>
			                <?php
		                        if ($row->sumber_dana == "Sumbangan") {
		                            ?>
		                            <select name="sumber" style="width:80px">
		                                <option value="APBN">APBN</option>
		                                <option selected value="Sumbangan">Sumbangan</option>
		                            </select>
		                            <?php
		                        }else{
		                            ?>
		                            <select name="sumber" style="width:80px">
		                                <option selected value="APBN">APBN</option>
		                                <option value="Sumbangan">Sumbangan</option>
		                            </select>
		                            <?php
		                        }
		                        ?>
			            </td>
			            <td>
			                <select name="alokasi" style="width:80px">- Pilih -
			                    <option value="kosong">kosong</option>
			                    <option value="kosong">kosong</option>
			                </select>
			            </td>
			        </tr>
			        <?php	
				 }
	                ?>
	                <tr>
	                    <td>
	                        <input id= "txtUraian" name="txtajah" type="text" value="" style="width:115px;height: 30px;">
	                    </td>
	                    <td>
	                        <input onkeyup="hitung()" id= "txtVolume" type="number" value="" style="width:50px;height: 30px;">
	                    </td>
	                    <td>
	                        <input id= "txtSatuan" type="text" value="" style="width:70px">
	                    </td>
	                    <td>
	                        <input onkeyup="hitung()" id= "txtHargaSet" type="number" value="" style="width:100px;height: 30px;">
	                    </td>
	                    <td>
	                        <input id= "txtJumlah"type="text" readonly value="" style="width:100px;height: 30px;">
	                    </td>
	                    <td>
	                        <select id ="sumber" name="sumber" style="width:80px">
	                            <option value="APBN">APBN</option>
	                            <option value="Sumbangan">Sumbangan</option>
	                        </select>
	                    </td>
	                    <td>
	                        <select id ="alokasi" name="alokasi" style="width:80px">- Pilih -
	                            <option value="kosong">kosong</option>
	                            <option value="kosong">kosong</option>
	                        </select>
	                    </td>
	                </tr>
	                <?php
	            }else{
	                ?>
	                 <tr>
	                    <td>
	                        <input id= "txtUraian" name="txtajah" type="text" value="" style="width:115px;height: 30px;">
	                    </td>
	                    <td>
	                        <input onkeyup="hitung()" id= "txtVolume" type="number" value="" style="width:50px;height: 30px;">
	                    </td>
	                    <td>
	                        <input id= "txtSatuan" type="text" value="" style="width:70px">
	                    </td>
	                    <td>
	                        <input onkeyup="hitung()" id= "txtHargaSet" type="number" value="" style="width:100px;height: 30px;">
	                    </td>
	                    <td>
	                        <input id= "txtJumlah"type="text" value="<?php echo $row->anggaran ?>" readonly style="width:100px;height: 30px;">
	                    </td>
	                    <td>
	                        <select id ="sumber" name="sumber" style="width:80px">
	                            <option value="APBN">APBN</option>
	                            <option value="Sumbangan">Sumbangan</option>
	                        </select>
	                    </td>
	                    <td>
	                        <select id ="alokasi" name="alokasi" style="width:80px">- Pilih -
	                            <option value="kosong">kosong</option>
	                            <option value="kosong">kosong</option>
	                        </select>
	                    </td>
	                </tr>
	                <?php
	            }
	}// tutup fungsi tambahDetail()

	public function hitungJumlah()
	{
		//memanggil kode rekening pada url menggunakan uri segment lalu memasukannya kedalam variable $korek
		$korek = $this->uri->segment(4);

		//query untuk menjumlahkan seluruh value di tabel detail_apbdes_pendapatan pada field jumlah
		$hasil = $this->m_26_APBDes->hitungJumlah($korek);

		// memanggil kembali inputnya
		?>
			<input type="text" id="jumlahTotal" value="<?php echo $hasil[0]->jumlah ?>" class="span4">
		<?php
	}
	public function tampilKegiatanBelanja()
	{
		$korek = $this->uri->segment(4);
		if ($korek != "null") {
			$ambil = $this->m_26_APBDes->ambildatarekeningberdasarkan($korek);
			?>
		    	<select onchange="tampilData(this.value)" required >
		    		<option value="null">-Pilih Kegiatan-</option>
		    		<?php
		    			foreach ($ambil as $row) {
		    				if ($row->nomor_rekening == $korek) {
		    					
		    				}else{
		                		?>
		                			<option value="<?php echo $row->nomor_rekening ?>"><?php echo $row->nomor_rekening.".".$row->uraian ?></option>
		                		<?php
		    				}
		    			}
		    		?>
	            </select>
		    <?php
		}else{
			?>
		    	<select required disabled>
	                		<option value="null" selected>Tidak ada kegiatan</option>
	            </select>
		    <?php
		}// tutup else $korek!=null
	}// tutup fungsi tampil kegiatan belanja

	public function tampilKegiatanBelanjaTabel()
	{
		$korek = $this->uri->segment(4);
		if ($korek != "null") {
			$ambil = $this->m_26_APBDes->ambildatarekeningberdasarkan($korek);
			foreach ($ambil as $row ) {
				?>
					<tr>
	                    <td>
	                        <?php echo $row->nomor_rekening ?>
	                    </td>
	                    <td>
	                        <?php echo $row->uraian ?>
	                    </td>
	                    <td>
	                        <?php echo 'apawe' ?>
	                    </td>
	                    <td>
	                        <?php echo 'apawe' ?>
	                    </td>
	                </tr>
				<?php
			}
		}else{
			?>
				<tr>
	                <td>
	                    Tidak ada data
	                </td>
	                <td>
	                    Tidak ada data
	                </td>
	                <td>
	                    Tidak ada data
	                </td>
	                <td>
	                    Tidak ada data
	                </td>
	            </tr>
            <?php
		}// tutup else $korek!=null
	}
	public function apbdesbelanja()
	{

		$data = array(
			'view' => 'main_page/APBDes/v_26_APBDes_Belanja.php' , 
			);
		
		$this->load->view('v_23_index',$data);
	}

	public function dataapbdespendapatan()
	{
		$data = array(
			'view' => 'main_page/APBDes/v_26_APBDes_Pendapatan.php' , 

			'ambil' => $this->m_26_APBDes->ambildataapbdespendapatan(), 
			);
		
		$this->load->view('v_23_index',$data);
	}
	
	public function pdf()
	{
		
		$nama_dokumen='Tabel Data APBDes'; //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A5zz'); // Create new mPDF Document
		 
		ob_start();
		$data = array(
			'view' => 'main_page/APBDes/v_26_PDF_APBDes.php' , 

			'ambil' => $this->m_26_APBDes->ambildata(), 
			);
		$this->load->view('main_page/APBDes/v_26_PDF_APBDes.php',$data);

	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/APBDes/v_26_Excel_APBDes.php' , 

			'ambil' => $this->m_26_APBDes->ambildata(), 
			);
		$this->load->view('main_page/APBDes/v_26_Excel_APBDes.php',$data);
	}

	public function tambah()
	{
		$penanggungjawab = $_SESSION['email'];
		$cari = array(
			'email' => $penanggungjawab,
			);
		$datapj = $this->m_26_APBDes->ambilpenanggungjawab($cari);
		$ambilkegiatan = $this->m_26_APBDes->ambildatakegiatan();
		$data = array(
			'view' => 'main_page/APBDes/v_26_APBDes.php' ,
			 'datapj' => $datapj,
			 'ambilkegiatan' => $ambilkegiatan,
			 
		);
		
		$this->load->view('v_23_index',$data);
	}



	public function hapus()
	{
		$id = $_GET['id'];
		$this->m_26_APBDes->hapus($id);

		$modelData = array(
			'email' => $_SESSION['email'] , 
			);

		$tampil = $this->m_23_auth->tampil($modelData);

		$aksi 	= "Menghapus Data APBDes ".$tampil[0]->email;
		$nip 	= $tampil[0]->nip;
		$modelData = array(
			'id' => '' ,
			'aksi' => $aksi , 
			'nip' => $nip ,
			'waktu' => date('y-m-d H:i:s'),
			);
			$this->m_23_log->insert($modelData);
		
			$modelData = array(
				'last_log' => $aksi ,
				);
			$modelWhere = array(
				'nip' => $nip ,
				);
			$modelTabel = 'auth';
			$this->m_23_log->update($modelData, $modelWhere, $modelTabel);

			echo "<script>
				  alert('Data APBDes Berhasil dihapus');
				  window.location='".base_url()."index.php/APBDes/c_26_APBDes';
				  </script>";	
	}

	public function Ubah()
	{
		$id = $_GET['id'];
		$data = array(
				'view' => 'main_page/APBDes/v_26_Ubah_APBDes.php',
				'ambildata' => $this->m_26_APBDes->ambildataberdasarkan($id),
			
				);
		$this->load->view('v_23_index',$data);
	}

	public function UbahData()
	{
		$kegiatan = $_POST['kegiatan'];
		$Angka = trim($_POST['anggaran']);
		$tanggal = $_POST['tanggal'];
		$penanggungjawab = $_POST['penanggungjawab'];
		$Tahun = $_POST['tahun'];
		$keterangan = $_POST['keterangan'];

			if(is_numeric($Angka) == False){
						echo "<script>
								alert('Anggaran Harus Berisi Angka !')
							 	window.location='".base_url()."index.php/APBDes/c_26_APBDes';
					  			</script>";
			}else{

						$idambil = $_GET['id'];
						
						$modelData = array(
							'email' => $_SESSION['email'] , 
							);

						$tampil = $this->m_23_auth->tampil($modelData);

						$aksi 	= "Mengubah Data APBDes ".$tampil[0]->email;
						$nip 	= $tampil[0]->nip;
						$modelData = array(
							'id' => '' ,
							'aksi' => $aksi , 
							'nip' => $nip ,
							'waktu' => date('y-m-d H:i:s'),
							);
							$this->m_23_log->insert($modelData);
						
							$modelData = array(
								'last_log' => $aksi ,
								);
							$modelWhere = array(
								'nip' => $nip ,
								);
							$modelTabel = 'auth';
							$this->m_23_log->update($modelData, $modelWhere, $modelTabel);

						$this->m_26_APBDes->ubah($idambil,$kegiatan,$Angka,$tanggal,$penanggungjawab,$Tahun,$keterangan);

						echo "<script>
							  alert('Data APBDes Berhasil Diubah');
							  window.location='".base_url()."index.php/APBDes/c_26_APBDes';
							  </script>";
			}

	}

	public function lihat()
	{
		$id = $_GET['id'];
		$data = array(
			'view' => 'main_page/APBDes/v_26_Lihat_APBDes.php',
			
			'ambildata' => $this->m_26_APBDes->ambildataberdasarkan($id),

			);
		$this->load->view('v_23_index',$data);
	}



	public function simpan()
		{
			if(isset($_POST['simpan'])){
				$Angka = trim($_POST['anggaran']);
				if(is_numeric($Angka) == False){
					echo "<script>
							alert('Anggaran Harus Berisi Angka !')
						 	window.location='".base_url()."index.php/APBDes/c_26_APBDes/tambah';
				  			</script>";
				}else{

					
					$kegiatan = $_POST['kegiatan'];
					$anggaran = $_POST['anggaran'];
					$tanggal = $_POST['tanggal'];
					$penanggungjawab = $_POST['penanggungjawab'];
					$tahun = $_POST['tahun'];
					$keterangan = $_POST['keterangan'];




					$data = array(
				        'id' => '',
				        'kegiatan' => $kegiatan,
				        'anggaran' => $anggaran,
						'tanggal' => $tanggal,
				        'penanggung_jawab' => $penanggungjawab,
				        'tahun' => $tahun,
				        'keterangan' => $keterangan,
				        
					);
					
					$lihat = $this->m_26_APBDes->ambildataanggaranberdasarkan($kegiatan);
					$anggarandb = $lihat[0]->anggaran;
					
					if($anggaran > $anggarandb){
							echo "<script>
							alert('anggaran Tidak boleh melebihi anggaran RAPBDes yang dipilih, sebesar : Rp. $anggarandb')
						 	window.location='".base_url()."index.php/APBDes/c_26_APBDes/tambah';
				  			</script>";

					}else{




					$this->m_26_APBDes->simpan($data);

					$modelData = array(
						'email' => $_SESSION['email'] , 
						);

					$tampil = $this->m_23_auth->tampil($modelData);

					$aksi 	= "Menyimpan Data APBDes ".$tampil[0]->email;
					$this->m_log->log($aksi);
					echo "<script>
						  alert('Data APBDes Berhasil Disimpan');
						  window.location='".base_url()."index.php/APBDes/c_26_APBDes';
						  </script>
							";
					}
				}
			}
		}
}
?>
<?php

/**
* 
*/
class C_26_Anggaran extends CI_Controller
{
	
	function __construct()
	{
		Parent:: __construct();
		$this->load->model("Anggaran/m_26_Anggaran");
		$this->load->model('auth/m_23_log');
		$this->load->model('auth/m_23_auth');
	}

	public function pdf()
	{
		
		$nama_dokumen='Tabel Data Anggaran'; //Beri nama file PDF hasil.
		define('_MPDF_PATH','MPDF60/');
		include(_MPDF_PATH . "mpdf.php");
		$mpdf=new mPDF('utf-8', 'A5zz'); // Create new mPDF Document
		 
		ob_start();
		$data = array(
			'view' => 'main_page/Anggaran/v_26_PDF_Anggaran.php' , 

			'ambil' => $this->m_26_Anggaran->ambildata(), 
			);
		$this->load->view('main_page/Anggaran/v_26_PDF_Anggaran.php',$data);

	
		$html = ob_get_contents();
		ob_end_clean();
		
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output($nama_dokumen.".pdf" ,'I');
		exit;
	}

	public function excel()
	{
		$data = array(
			'view' => 'main_page/Anggaran/v_26_Excel_Anggaran.php' , 

			'ambil' => $this->m_26_Anggaran->ambildata(), 
			);
		$this->load->view('main_page/Anggaran/v_26_Excel_Anggaran.php',$data);
	}
	public function index()
	{
		$data = array(
			'view' => 'main_page/Anggaran/v_26_Data_Anggaran.php' , 

			'ambil' => $this->m_26_Anggaran->ambildata(), 
			);
		
		$this->load->view('v_23_index',$data);
	}

	public function hapus()
	{
		$id = $_GET['id'];
		$this->m_26_Anggaran->hapus($id);

		$modelData = array(
			'email' => $_SESSION['email'] , 
			);

		$tampil = $this->m_23_auth->tampil($modelData);

		$aksi 	= "Menghapus Data Anggaran ".$tampil[0]->email;
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
				  alert('Data Anggaran Berhasil dihapus');
				  window.location='".base_url()."index.php/Anggaran/c_26_Anggaran';
				  </script>";	
	}
	

	public function tambah()
	{
		$penanggungjawab = $_SESSION['email'];
		$cari = array(
			'email' => $penanggungjawab,
			);
		$datapj = $this->m_26_Anggaran->ambilpenanggungjawab($cari);
		$ambilrekening = $this->m_26_Anggaran->ambilnomorrekening();
		$data = array(
				'view' => 'main_page/Anggaran/v_26_Anggaran.php',
				'datapj' => $datapj,
				'ambilrekening' => $ambilrekening,
				);
		$this->load->view('v_23_index',$data);
	}

	public function lihat()
	{
		$id = $_GET['id'];
		$data = array(
				'view' => 'main_page/Anggaran/v_26_Lihat_Anggaran.php',
				
				'ambildata' => $this->m_26_Anggaran->ambildataberdasarkan($id),
			
				);
			$this->load->view('v_23_index',$data);
	}

	public function Ubah()
	{
		$id = $_GET['id'];
		$data = array(
				'view' => 'main_page/Anggaran/v_26_Ubah_Anggaran.php',
				'ambildata' => $this->m_26_Anggaran->ambildataberdasarkan($id),
			
				);
		$this->load->view('v_23_index',$data);
	}

	public function UbahData()
	{
		$Angka = trim($_POST['anggaran']);
		$TahunSekarang = date('Y');
		$TahunUbah = $_POST['tahun'];
		if($TahunUbah == $TahunSekarang){
			if(is_numeric($Angka) == False){
						echo "<script>
								alert('Anggaran Harus Berisi Angka !')
							 	window.location='".base_url()."index.php/Anggaran/c_26_Anggaran/';
					  			</script>";
			}else{

						$idambil = $_GET['id'];
						$Tahun = $_POST['tahun'];
						$Anggaran = $_POST['anggaran'];
						$tanggalubah = $_POST['tanggalubah'];
						
						$this->m_26_Anggaran->ubah($idambil,$Tahun,$Anggaran,$tanggalubah);

						$modelData = array(
							'email' => $_SESSION['email'] , 
							);

						$tampil = $this->m_23_auth->tampil($modelData);

						$aksi 	= "Mengubah Data Anggaran ".$tampil[0]->email;
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
							  alert('Data Anggaran Berhasil Diubah');
							  window.location='".base_url()."index.php/Anggaran/c_26_Anggaran';
							  </script>";
			}

		}else{
						echo "<script>
							  alert('Hanya Anggaran Tahun yang Berlaku yang dapat diubah');
							  window.location='".base_url()."index.php/Anggaran/c_26_Anggaran';
							  </script>";
			
		}
	}
	// 			}
	// 		}
	// }
	

	public function simpan()
		{
			if(isset($_POST['simpan'])){

				$Angka = trim($_POST['anggaran']);
				$Tahun = $_POST['tahun'];
				if($Tahun == "Tahun"){
					echo "<script>
							alert('Mohon untuk mengisi Tahun Anggaran ')
						 	window.location='".base_url()."index.php/Anggaran/c_26_Anggaran/tambah';
				  			</script>";
				}else{


					if(is_numeric($Angka) == False){
						echo "<script>
								alert('Anggaran Harus Berisi Angka !')
							 	window.location='".base_url()."index.php/Anggaran/c_26_Anggaran/tambah';
					  			</script>";
					}else{

						$tahun = $_POST['tahun'];
						$anggaran = $_POST['anggaran'];
						$tanggalinput = date('y-m-d h:i:s');
						$penanggungjawab = $_POST['penanggungjawab'];
						$tanggalubah = $_POST['tanggalubah'];
						$nomorrekening = $_POST['nomorrekening'];
						
						$data = array(
					        'id' => '',
					        'tahun' => $tahun,
					        'anggaran' => $anggaran,
							'tanggal_input' => $tanggalinput,
					        'penanggung_jawab' => $penanggungjawab,
					        'tanggal_update' => $tanggalubah,
					        'nomor_rekening' => $nomorrekening,
					        
						);
						$this->m_26_Anggaran->simpan($data);
						$this->m_26_Anggaran->ubahanggaran($nomorrekening,$anggaran);

						$modelData = array(
							'email' => $_SESSION['email'] , 
							);

						$tampil = $this->m_23_auth->tampil($modelData);

						$aksi 	= "Menyimpan Data Anggaran ".$tampil[0]->email;
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
							  alert('Data Anggaran Berhasil Disimpan');
							  window.location='".base_url()."index.php/Anggaran/c_26_Anggaran';
							  </script>";
					}
				}
			}
		}
}
?>
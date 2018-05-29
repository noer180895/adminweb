<?php
	/**
	* 
	*/
	class C_26_RAPBDes extends Ci_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('RAPBDes/m_26_RAPBDes');
			$this->load->model('auth/m_23_log');
			$this->load->model('auth/m_23_auth');
		}

		public function acc()
		{
			$id = $_GET['id'];

			$this->m_26_RAPBDes->acc($id);

			$modelData = array(
				'email' => $_SESSION['email'] , 
				);

			$tampil = $this->m_23_auth->tampil($modelData);

			$aksi 	= "Meng-acc Data RAPBDes ".$tampil[0]->email;
			$nip 	= $tampil[0]->nip;
			$modelData = array(
				'id' => '' ,
				'aksi' => $aksi , 
				'nip' => $nip ,
				'waktu' => date('y-m-d h:i:s'),
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
				  alert('Data Rencana APBDes Telah di acc');
				  window.location='".base_url()."index.php/RAPBDes/c_26_RAPBDes';
				  </script>";

		}

		public function index()
		{
			$data = array(
				'view' => 'main_page/RAPBDes/v_26_RAPBDes.php' ,

				'ambil' => $this->m_26_RAPBDes->ambildata(), 
				);
			
			$this->load->view('v_26_beranda',$data);
		}

		
		public function excel()
		{
			$data = array(
				'view' => 'main_page/RAPBDes/v_26_Excel_RAPBDes.php' , 

				'ambil' => $this->m_26_RAPBDes->ambildata(), 
				);
			$this->load->view('main_page/RAPBDes/v_26_Excel_RAPBDes.php',$data);
		}

		public function hapus()
		{
			$id = $_GET['id'];
			$this->m_26_RAPBDes->hapus($id);

			$modelData = array(
				'email' => $_SESSION['email'] , 
				);

			$tampil = $this->m_23_auth->tampil($modelData);

			$aksi 	= "Menghapus Data RAPBDes ".$tampil[0]->email;
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
					  alert('Data Rencana APBDes Berhasil dihapus');
					  window.location='".base_url()."index.php/RAPBDes/c_26_RAPBDes';
					  </script>";	
		}

		public function Ubah()
		{

			$id = $_GET['id'];
			$penanggungjawab = $_SESSION['email'];
			$cari = array(
				'email' => $penanggungjawab,
				);
			$datapj = $this->m_26_RAPBDes->ambilpenanggungjawab($cari);

			$data = array(
					'view' => 'main_page/RAPBDes/v_26_Ubah_RAPBDes.php',
					'ambildata' => $this->m_26_RAPBDes->ambildataberdasarkan($id),
					'datapj' => $datapj,
					);
			$this->load->view('v_23_index',$data);
		}

		public function ubahdata()
		{
				$rencana = $_POST['rencana'];
				$Angka = trim($_POST['anggaran']);
				$target = $_POST['ubahtarget'];
				$status = $_POST['status'];
				$keterangan = $_POST['keterangan'];
				$TahunUbah = $_POST['ubahtahun'];
				$penanggungjawab = $_POST['penanggungjawab'];
								
				if(is_numeric($Angka) == False){
							echo "<script>
									alert('Anggaran Biaya Harus Berisi Angka !')
								 	window.location='".base_url()."index.php/RAPBDes/c_26_RAPBDes';
						  			</script>";
				}else{

					if($TahunUbah == "Tahun"){
						echo "<script>
							alert('Tolong pilih Tahun')
						 	window.location='".base_url()."index.php/RAPBDes/c_26_RAPBDes';
				  			</script>";

					}else{
							$idambil = $_GET['id'];
				
							$modelData = array(
							'email' => $_SESSION['email'] , 
							);

							$tampil = $this->m_23_auth->tampil($modelData);

							$aksi 	= "Mengubah Data RAPBDes ".$tampil[0]->email;
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

							$this->m_26_RAPBDes->ubah($idambil,$Angka,$rencana,$target,$status,$keterangan,$TahunUbah,$penanggungjawab);

							echo "<script>
								  alert('Data Rencana APBDes Berhasil Diubah');
								  window.location='".base_url()."index.php/RAPBDes/c_26_RAPBDes';
								  </script>";
				}
			}			
		}

		public function tambah()
		{
			$penanggungjawab = $_SESSION['email'];
			$cari = array(
				'email' => $penanggungjawab,
				);
			
			$datapj = $this->m_26_RAPBDes->ambilpenanggungjawab($cari);

			$data = array(
				'view' => 'main_page/RAPBDes/v_26_Buat_RAPBDes.php',
				'datapj' => $datapj,
				);
			$this->load->view('v_26_beranda',$data);
		}

		public function lihat()
		{
			$data = array(
				'view' => 'main_page/RAPBDes/v_26_RAPBDes.php',
				
				'ambil' => $this->m_26_RAPBDes->ambildata(),
				);
			$this->load->view('v_26_beranda',$data);
		}

		public function export()
		{
			$data = array(
				'view' => 'main_page/RAPBDes/v_26_Data_RAPBDes.php' ,

				'ambil' => $this->m_26_RAPBDes->ambildata(), 
				);
			
			$this->load->view('v_23_index',$data);
		}

		public function simpan()
		{
			$nomorperdes = $_POST['nomorperdes'];
			$tahun = $_POST['tahun'];
			$status = $_POST['status'];
			$penanggungjawab = $_POST['penanggungjawab'];

			if(isset($_POST['simpan'])){
			
			
				$data = array(
			        'id' => '',
			        'nomor_perdes' => $nomorperdes,
			        'tahun' => $tahun,
			        'status' => $status,
			        'penanggung_jawab' => $penanggungjawab,
			        'grant' => '0',
			        
				);
				$this->m_26_RAPBDes->simpan($data);
				

				$modelData = array(
					'email' => $_SESSION['email'] , 
					);

				$tampil = $this->m_23_auth->tampil($modelData);

				$aksi 	= "Menyimpan Data RAPBDes ".$tampil[0]->email;
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
					  alert('Data RAPBDes Berhasil Disimpan');
					  window.location='".base_url()."RAPBDes/c_26_RAPBDes';
					  </script>";
				}
			}
		
	}

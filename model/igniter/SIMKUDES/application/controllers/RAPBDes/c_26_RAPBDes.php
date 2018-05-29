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
			$this->load->model('APBDes/m_26_APBDes');
			$this->load->model('auth/m_23_log');
			$this->load->model('auth/m_23_auth');
			$this->load->model('rekening/m_23_rekening');
			$this->load->model('PerangkatDesa/m_26_Perangkat_Desa');
		}

		public function templateRekeningPertahun($tahun)
		{
			$query = $this->m_23_rekening->rekeningDefault($tahun);
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

		public function pdf()
		{
			$nama_dokumen='Rencana Anggaran Pembangunan dan Belanja Desa'; //Beri nama file PDF hasil.
			define('_MPDF_PATH','MPDF60/');
			include(_MPDF_PATH . "mpdf.php");
			$mpdf=new mPDF('utf-8', 'A4-P'); // Create new mPDF Document
			 
			ob_start();

			$data = array(
				'view' => 'main_page/RAPBDes/v_23_pdf_RAPBDes.php' , 
				'perdes' => $this->m_26_Perangkat_Desa->ambildata(),
				'ambil' => $this->m_26_RAPBDes->ambildata(), 
				);
			$this->load->view('main_page/RAPBDes/v_23_pdf_RAPBDes.php',$data);

		
			$html = ob_get_contents();
			ob_end_clean();
			
			$mpdf->WriteHTML(utf8_encode($html));
			$mpdf->Output($nama_dokumen.".pdf" ,'I');
			exit;
		}

		public function hapus()
		{
			$id = $_GET['id'];
			$tahun = $_GET['tahun'];

			$dataWhere = array(
				'nomor_perdes' => $id ,
				'tahun' => $tahun ,
				 );

			$dataWhere2 = array(
				'tahun' => $tahun ,
				 );

			$this->m_26_RAPBDes->hapus($dataWhere, $dataWhere2);

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
				$this->session->unset_userdata('tahun');
				echo "<script>
					  alert('Data Rencana Berhasil dihapus');
					  window.location='".base_url()."';
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
			$kode = $this->uri->segment(6);
			$penanggungjawab = $_SESSION['email'];
			$cari = array(
				'email' => $penanggungjawab,
				);
			
			$datapj = $this->m_26_RAPBDes->ambilpenanggungjawab($cari);

			$data = array(
				'view' => 'main_page/RAPBDes/v_26_Buat_RAPBDes.php',
				'datapj' => $datapj,
				'noPerdes' => $this->getPerdes(date("Y"), $kode), 
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

		public function getPerdes($tahun, $kode)
		{
			if ($kode == "") {
				$kode="PERDES";
			}
		    $query = "select max(nomor_perdes) as maxKode from rapbdes" ;
		    $sql = $this->db->query($query);
		    $data = $sql->result();
		    $Kode = $data[0]->maxKode;
		    $kodeauto = (int)substr($Kode, 0, 5);
		    // var_dump($kodeauto);
		    // exit();
		    $kodeauto ++;
		    $maxstring = $kodeauto;
		    $char="CS000";
		    $id = "/".$kode."/".$tahun;
		    if (strlen($maxstring)==1) {
		        $id = "00".$maxstring.$id;
		    }elseif (strlen($maxstring)==2) {
		        $id = "0".$maxstring.$id;
		    }elseif (strlen($maxstring)==3) {
		        $id = "".$maxstring.$id;
		    }else{
		        $id = "".$maxstring.$id;
		    }
		    
		    return $newID =$id;
		}
		public function ambilNomorPerdes()
		{
			$kode = $this->uri->segment(4);
			$tahun = $_GET['tahun'];
			$nomor_perdes = $this->getPerdes($tahun, $kode);
		    ?>
			    <div class="control-group" id="nomor_perdes">
	                <label class="control-label" for="basicinput">Nomor PERDES</label>
	                <div class="controls">
	                    <div class="input-append">
	                        <input type="text" name="nomorperdes" readonly="" maxlength="100" style="width: 350px" id="txtPerdes" required placeholder="Nomor Perdes" value="<?php echo $nomor_perdes ?>" class="span8">
	                    </div>
	                </div>
	            </div>
		    <?php
		}

		public function simpan()
		{
			$nomorperdes = $_POST['nomorperdes'];
			$tahun = $_POST['tahun'];
			$status = $_POST['status'];
			$penanggungjawab = $_POST['penanggungjawab'];
			$TahunPerdes = substr($nomorperdes, 11);
			$k = date("Y");
			if ($k == $tahun && $status != "murni") {
				if(isset($_POST['simpan'])){
					$data = array(
				        'nomor_perdes' => $nomorperdes,
				        'tahun' => $tahun,
				        'status' => $status,
				        'penanggung_jawab' => $penanggungjawab,
				        'grant' => '0',
				        
					);
					$this->m_26_APBDes->simpanPerubahan($data);
					

					$modelData = array(
						'email' => $_SESSION['email'] , 
						);

					$tampil = $this->m_23_auth->tampil($modelData);

					$aksi 	= "Menyimpan Data APBDes Perubahan ".$tampil[0]->email;
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
					$this->templateRekeningPertahun($tahun);
					echo "<script>
						  alert('Data Perubahan Berhasil Disimpan');
						  window.location='".base_url()."APBDes/c_26_APBDes/apbdesPerubahan';
						  </script>";
				}//tutup if isset($_POST['simpan'])
			// tutup if $k == $tahun
				exit();
			}



				if ($tahun == $TahunPerdes) {
					$cek = $this->m_26_RAPBDes->cekNomorPerdes($nomorperdes);
					if ($cek == 1) {
						if ($k == $tahun) {
							if(isset($_POST['simpan'])){
								$data = array(
							        'nomor_perdes' => $nomorperdes,
							        'tahun' => $tahun,
							        'status' => $status,
							        'penanggung_jawab' => $penanggungjawab,
							        'grant' => '0',
							        
								);
								$this->m_26_APBDes->simpanPerubahan($data);
								

								$modelData = array(
									'email' => $_SESSION['email'] , 
									);

								$tampil = $this->m_23_auth->tampil($modelData);

								$aksi 	= "Menyimpan Data APBDes Perubahan ".$tampil[0]->email;
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
								$this->templateRekeningPertahun($tahun);
								echo "<script>
									  alert('Data Perubahan Berhasil Disimpan');
									  window.location='".base_url()."RAPBDes/c_26_RAPBDes';
									  </script>";
							}//tutup if isset($_POST['simpan'])
						// tutup if $k == $tahun
						}else{
							?>
								<script type="text/javascript">
									alert('Nomor Perdes dengan tahun <?php echo $tahun ?> telah digunakan');
									window.location="<?php echo base_url() ?>/RAPBDes/c_26_RAPBDes/tambah";
								</script>
							<?php
						}
					//tutup $cek == 1
					}else{
						if(isset($_POST['simpan'])){
							$data = array(
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
							$this->templateRekeningPertahun($tahun);
							echo "<script>
								  alert('Data RAPBDes Berhasil Disimpan');
								  window.location='".base_url()."RAPBDes/c_26_RAPBDes';
								  </script>";
						}//tutup if isset($_POST['simpan'])
					}// else dari if ($cek == 1)
				// tutup if $tahun == $TahunPerdes
				}else{
					?>
						<script type="text/javascript">
							alert('Tahun dengan tahun pada kode tidak boleh berbeda');
							window.location="<?php echo base_url() ?>/RAPBDes/c_26_RAPBDes/tambah"
						</script>
					<?php
				}
			}
		
	}

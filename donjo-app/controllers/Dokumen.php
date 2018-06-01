<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dokumen extends CI_Controller{

	function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('user_model');
		$grup	= $this->user_model->sesi_grup($_SESSION['sesi']);
		if($grup!=1 AND $grup!=2 AND $grup!=3 AND $grup!=4) {
			if(empty($grup))
				$_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
			else
				unset($_SESSION['request_uri']);
			redirect('siteman');
		}
		$this->load->model('header_model');
		$this->load->model('user_model');
		$this->load->model('web_dokumen_model');
		$this->modul_ini = 13;
		$this->controller = 'dokumen';
	}

	function clear(){
		unset($_SESSION['cari']);
		unset($_SESSION['filter']);
		redirect('dokumen');
	}

	function index($kat=1, $p=1,$o=0){



		$data['user_role'] = $this->user_model->get_role();

		$data['p']        = $p;
		$data['o']        = $o;
		$data['kat']	  = $kat;

		if(isset($_SESSION['cari']))
			$data['cari'] = $_SESSION['cari'];
		else $data['cari'] = '';

		if(isset($_SESSION['filter']))
			$data['filter'] = $_SESSION['filter'];
		else $data['filter'] = '';

		if(isset($_POST['per_page']))
			$_SESSION['per_page']=$_POST['per_page'];
		$data['per_page'] = $_SESSION['per_page'];

		$data['kat_nama'] = $this->web_dokumen_model->kat_nama($kat);
		$data['paging']  = $this->web_dokumen_model->paging($kat, $p, $o);
		$data['main']    = $this->web_dokumen_model->list_data($kat, $o, $data['paging']->offset, $data['paging']->per_page);
		$data['keyword'] = $this->web_dokumen_model->autocomplete();

		$header = $this->header_model->get_data();
		$nav['act']=4;

		$this->load->view('header', $header);
		$this->load->view('web/nav',$nav);
		$this->load->view('dokumen/table',$data);
		$this->load->view('footer');
	}

	function form($kat=1,$p=1,$o=0,$id=''){

		$data['p'] = $p;
		$data['o'] = $o;
		$data['kat'] = $kat;

		if($id){
			$data['dokumen']     = $this->web_dokumen_model->get_dokumen($id,$kat);
			$data['form_action'] = site_url("dokumen/update/$kat/$id/$p/$o");
		}
		else{
			$data['dokumen']     = null;
			$data['form_action'] = site_url("dokumen/insert");
		}

		$header = $this->header_model->get_data();
		$nav['act']=4;
		$this->load->view('header', $header);
		$this->load->view('web/nav',$nav);
		$this->load->view('dokumen/form',$data);
		$this->load->view('footer');
	}

	function search(){
		$cari = $this->input->post('cari');
		$kat = $this->input->post('kategori');
		if($cari!='')
			$_SESSION['cari']=$cari;
		else unset($_SESSION['cari']);
		redirect("dokumen/index/$kat");
	}

	function filter(){
		$filter = $this->input->post('filter');
		$kat = $this->input->post('kategori');
		if($filter!=0)
			$_SESSION['filter']=$filter;
		else unset($_SESSION['filter']);
		redirect("dokumen/index/$kat");
	}

	function insert(){
		$_SESSION['success']=1;
		$kat = $this->input->post('kategori');
		$outp = $this->web_dokumen_model->insert($kat);
		if (!$outp) $_SESSION['success']=-1;
		redirect("dokumen/index/$kat");
	}

	function update($kat,$id='',$p=1,$o=0){
		$_SESSION['success']=1;
		$kategori = $this->input->post('kategori');
		if (!empty($kategori))
			$kat = $this->input->post('kategori');
		$outp = $this->web_dokumen_model->update($id,$kat);
		if (!$outp) $_SESSION['success']=-1;
		redirect("dokumen/index/$kat/$p/$o");
	}

	function delete($kat=1,$p=1,$o=0,$id=''){
		$_SESSION['success']=1;
		$this->web_dokumen_model->delete($id,$kat);
		redirect("dokumen/index/$kat/$p/$o");
	}

	function delete_all($kat=1,$p=1,$o=0){
		$_SESSION['success']=1;
		$this->web_dokumen_model->delete_all($kat);
		redirect("dokumen/index/$kat/$p/$o");
	}	

	function dokumen_lock($kat=1,$id=''){
		$this->web_dokumen_model->dokumen_lock($id,1);
		redirect("dokumen/index/$kat/$p/$o");
	}


	function approve(){
		$id = $this->input->post("id");
		$this->web_dokumen_model->approve_ekspedisi($id,1);
		$this->web_dokumen_model->approve_aparat($id,1);
		$this->web_dokumen_model->approve_inventaris($id,1);
		$this->web_dokumen_model->approve_peraturan_desa($id,1);
		$this->web_dokumen_model->approve_agenda($id,1);
		$this->web_dokumen_model->approve_lembaranberitadesa($id,1);
		$this->web_dokumen_model->approve_bukutamubpd($id,1);
		$this->web_dokumen_model->approve_daftarhadirrapatbpd($id,1);
		$this->web_dokumen_model->approve_daftaranggotabpd($id,1);
		$this->web_dokumen_model->approve_dataaspirasimasyarakat($id,1);
		$this->web_dokumen_model->approve_datakegiatanbpd($id,1);
		$this->web_dokumen_model->approve_datanotulenrapatbpd($id,1);
		$this->web_dokumen_model->approve_dataperatuankeputusanbpd($id,1);
		$this->web_dokumen_model->approve_datatanahdidesa($id,1);
		$this->web_dokumen_model->approve_inventarishasilpembangunan($id,1);
		$this->web_dokumen_model->approve_kaderpemberdayaanmasyarakat($id,1);
		$this->web_dokumen_model->approve_Keputusankepaladesa($id,1);
		$this->web_dokumen_model->approve_Keputusanmusyawarahdesa($id,1);
		$this->web_dokumen_model->approve_Keputusanmusyawarahperencanaanpembangunandesa($id,1);
		$this->web_dokumen_model->approve_Laporankeuanganbpd($id,1);
		$this->web_dokumen_model->approve_Peraturandidesa($id,1);
		//tambahan
		$this->web_dokumen_model->approve_Agendasuratkeluar($id,1);
		$this->web_dokumen_model->approve_Agendasuratmasuk($id,1);
		$this->web_dokumen_model->approve_Anggaranpendapatanbelanja($id,1);
		$this->web_dokumen_model->approve_Bankdesa($id,1);
		$this->web_dokumen_model->approve_Bukukasumum($id,1);
		$this->web_dokumen_model->approve_DataInventarisbpd($id,1);
		$this->web_dokumen_model->approve_IndukPenduduk($id,1);
		$this->web_dokumen_model->approve_Kartutandapendudukdankeluarga($id,1);
		$this->web_dokumen_model->approve_Kaspembantukegiatan($id,1);
		$this->web_dokumen_model->approve_Kegiatanpembangunan($id,1);
		$this->web_dokumen_model->approve_Mutasipenduduk($id,1);
		$this->web_dokumen_model->approve_Penduduksementara($id,1);
		$this->web_dokumen_model->approve_Rekapitulasipenduduk($id,1);
		$this->web_dokumen_model->approve_RencanaAnggaranBiaya($id,1);
		$this->web_dokumen_model->approve_RencanaKerjaPembangunan($id,1);



		redirect("dokumen/index/$kat/$p/$o");
	}


	function reject(){
		$id = $this->input->post("id");
		$this->web_dokumen_model->reject_ekspedisi($id,1);
		$this->web_dokumen_model->reject_aparat($id,1);
		$this->web_dokumen_model->reject_inventaris($id,1);
		$this->web_dokumen_model->reject_peraturan_desa($id,1);
		$this->web_dokumen_model->reject_agenda($id,1);
		$this->web_dokumen_model->reject_lembaranberitadesa($id,1);
		$this->web_dokumen_model->reject_bukutamubpd($id,1);
		$this->web_dokumen_model->reject_daftarhadirrapatbpd($id,1);
		$this->web_dokumen_model->reject_daftaranggotabpd($id,1);
		$this->web_dokumen_model->reject_dataaspirasimasyarakat($id,1);
		$this->web_dokumen_model->reject_datakegiatanbpd($id,1);
		$this->web_dokumen_model->reject_datanotulenrapatbpd($id,1);
		$this->web_dokumen_model->reject_dataperatuankeputusanbpd($id,1);
		$this->web_dokumen_model->reject_datatanahdidesa($id,1);
		$this->web_dokumen_model->reject_inventarishasilpembangunan($id,1);
		$this->web_dokumen_model->reject_kaderpemberdayaanmasyarakat($id,1);
		$this->web_dokumen_model->reject_Keputusankepaladesa($id,1);
		$this->web_dokumen_model->reject_Keputusanmusyawarahdesa($id,1);
		$this->web_dokumen_model->reject_Keputusanmusyawarahperencanaanpembangunandesa($id,1);
		$this->web_dokumen_model->reject_Laporankeuanganbpd($id,1);
		$this->web_dokumen_model->reject_Peraturandidesa($id,1);
				//tambahan
		$this->web_dokumen_model->reject_Agendasuratkeluar($id,1);
		$this->web_dokumen_model->reject_Agendasuratmasuk($id,1);
		$this->web_dokumen_model->reject_Anggaranpendapatanbelanja($id,1);
		$this->web_dokumen_model->reject_Bankdesa($id,1);
		$this->web_dokumen_model->reject_Bukukasumum($id,1);
		$this->web_dokumen_model->reject_DataInventarisbpd($id,1);
		$this->web_dokumen_model->reject_IndukPenduduk($id,1);
		$this->web_dokumen_model->reject_Kartutandapendudukdankeluarga($id,1);
		$this->web_dokumen_model->reject_Kaspembantukegiatan($id,1);
		$this->web_dokumen_model->reject_Kegiatanpembangunan($id,1);
		$this->web_dokumen_model->reject_Mutasipenduduk($id,1);
		$this->web_dokumen_model->reject_Penduduksementara($id,1);
		$this->web_dokumen_model->reject_Rekapitulasipenduduk($id,1);
		$this->web_dokumen_model->reject_RencanaAnggaranBiaya($id,1);
		$this->web_dokumen_model->reject_RencanaKerjaPembangunan($id,1);
		redirect("dokumen/index/$kat/$p/$o");
	}


	public function export_excel($indentity='',$id=''){
        //load librarynya terlebih dahulu
        $this->load->library("Excel/PHPExcel");

        $title='';
        if($indentity == '6'){ // jika form requestnya ekspedisi
        	$title = 'ekspedisi-data-' . date('ymd') . '.xlsx';
            $dataAll = $this->web_dokumen_model->getDetailEkpedisi($id);
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0)
                        //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                        ->setCellValue('A1', 'Data Input Form Ekspedisi')
                        ->setCellValue('A2', 'Judul')
                        ->setCellValue('A3', 'No Urut')
                        ->setCellValue('A4', 'Tanggal Pengiriman')
                        ->setCellValue('A5', 'Tanggal No Surat')
                        ->setCellValue('A6', 'Isi Surat')
                        ->setCellValue('A7', 'Ditujukan Kepada')
                        ->setCellValue('A8', 'Keterangan')
                        ->setCellValue('A9', 'Status Approve');

           	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:B1');
           	$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->setCellValue('B2', $dataAll['nama']);
            $objPHPExcel->getActiveSheet()->setCellValue('B3', $dataAll['no_urut']);
            $objPHPExcel->getActiveSheet()->setCellValue('B4', $dataAll['tanggal_pengiriman']);
            $objPHPExcel->getActiveSheet()->setCellValue('B5', $dataAll['tanggal_no_surat']);
            $objPHPExcel->getActiveSheet()->setCellValue('B6', $dataAll['isi_surat']);
            $objPHPExcel->getActiveSheet()->setCellValue('B7', $dataAll['ditujukan_kepada']);
            $objPHPExcel->getActiveSheet()->setCellValue('B8', $dataAll['keterangan']);

            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);

            if($dataAll['is_approve'] == 1){
            	$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Approved');
            }else if($dataAll['is_approve'] == 2){
            	$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Rejected');
            }else{
            	$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Waiting Approval');
            }
      
        }else if($indentity == '2'){ // jika form inventaris
        	$title = 'inventaris-data-' . date('ymd') . '.xlsx';
            $dataAll = $this->web_dokumen_model->getDetailInventaris($id);
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0)
                        //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                        ->setCellValue('A1', 'Data Input Form Inventari Data')
                        ->setCellValue('A2', 'Judul')
                        ->setCellValue('A3', 'No Urut')
                        ->setCellValue('A4', 'Jenis Barang / Bangunan')
                        ->setCellValue('A5', 'Asal Barang / Bangunan')
                        ->setCellValue('A6', 'Keadaan Barang / Bangunan Awal Tahun')
                        ->setCellValue('A7', 'Penghapusan Barang')
                        ->setCellValue('A8', 'Tanggal Penghapusan')
                        ->setCellValue('A9', 'Status')
                        ->setCellValue('A10', 'Keterangan');

           	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:B1');
           	$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->setCellValue('B2', $dataAll['nama']);
            $objPHPExcel->getActiveSheet()->setCellValue('B3', $dataAll['no_urut']);
            $objPHPExcel->getActiveSheet()->setCellValue('B4', $dataAll['jenis_barang_at_bangunan']);
            $objPHPExcel->getActiveSheet()->setCellValue('B5', $dataAll['asal_barang_bangunan']);
            $objPHPExcel->getActiveSheet()->setCellValue('B6', $dataAll['keadaanbarang']);
            $objPHPExcel->getActiveSheet()->setCellValue('B7', $dataAll['penghapusanbarang']);
            $objPHPExcel->getActiveSheet()->setCellValue('B8', $dataAll['tanggal_penghapusan']);
            $objPHPExcel->getActiveSheet()->setCellValue('B10', $dataAll['keterangan']);

            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);

            if($dataAll['is_approve'] == 1){
            	$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Approved');
            }else if($dataAll['is_approve'] == 2){
            	$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Rejected');
            }else{
            	$objPHPExcel->getActiveSheet()->setCellValue('B9', 'Waiting Approval');
            }
        }else if($indentity == '3'){
        	$title = 'peraturan-desa-data-' . date('ymd') . '.xlsx';
            $dataAll = $this->web_dokumen_model->getDetailPeraturanDesa($id);
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0)
                        //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                        ->setCellValue('A1', 'Data Input Form Peraturan Desa')
                        ->setCellValue('A2', 'Judul')
                        ->setCellValue('A3', 'Uraian')
                        ->setCellValue('A4', 'Nomor Dan Tanggal Ditetapkan')
                        ->setCellValue('A5', 'Tentang')
                        ->setCellValue('A6', 'Diundangkan')
                        ->setCellValue('A7', 'Status')
                        ->setCellValue('A8', 'Keterangan');

           	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:B1');
           	$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->setCellValue('B2', $dataAll['nama']);
            $objPHPExcel->getActiveSheet()->setCellValue('B3', $dataAll['uraiansingkat']);
            $objPHPExcel->getActiveSheet()->setCellValue('B4', $dataAll['nomber_tanggalperaturandesa']);
            $objPHPExcel->getActiveSheet()->setCellValue('B5', $dataAll['tentang']);
            $objPHPExcel->getActiveSheet()->setCellValue('B6', $dataAll['nomor_tanggalkesepakatan']);
            $objPHPExcel->getActiveSheet()->setCellValue('B8', $dataAll['keterangan']);

            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(40);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);

            if($dataAll['is_approve'] == 1){
            	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Approved');
            }else if($dataAll['is_approve'] == 2){
            	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Rejected');
            }else{
            	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Waiting Approval');
            }
        }else if($indentity == '4'){
        	$title = 'aparat-pemerintahan-desa-' . date('ymd') . '.xlsx';
            $dataAll = $this->web_dokumen_model->getDetailAparatPemerintahan($id);
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0)
                        //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                        ->setCellValue('A1', 'Data Input Form Aparat Pemerintahan')
                        ->setCellValue('A2', 'Judul')
                        ->setCellValue('A3', 'No Urut')
                        ->setCellValue('A4', 'Nama Lengkap')
                        ->setCellValue('A5', 'Nomor Induk')
                        ->setCellValue('A6', 'Nomor Induk Pegawai')
                        ->setCellValue('A7', 'Jenis Kelamin')
                        ->setCellValue('A8', 'Tempat Tanggal Lahir')
                        ->setCellValue('A9', 'Agama')
                        ->setCellValue('A10', 'Pangkat Golongan')
                        ->setCellValue('A11', 'Jabatan')
                        ->setCellValue('A12', 'Pendidikan Terakhir')
                        ->setCellValue('A13', 'Nomor Tanggal Keputusan Pengangkatan')
                        ->setCellValue('A14', 'Nomor Tanggal Keputusan Pemberentian')
                        ->setCellValue('A15', 'Status')
                        ->setCellValue('A16', 'Keterangan');

           	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:B1');
           	$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->setCellValue('B2', $dataAll['nama']);
            $objPHPExcel->getActiveSheet()->setCellValue('B3', $dataAll['nourut']);
            $objPHPExcel->getActiveSheet()->setCellValue('B4', $dataAll['nama_lengkap']);
            $objPHPExcel->getActiveSheet()->setCellValue('B5', $dataAll['nomor_induk_apr_pem_desa']);
            $objPHPExcel->getActiveSheet()->setCellValue('B6', $dataAll['nomor_induk_pegawai']);
            $objPHPExcel->getActiveSheet()->setCellValue('B7', $dataAll['jenis_kelamin']);
	        $objPHPExcel->getActiveSheet()->setCellValue('B8', $dataAll['tempat_n_tanggal_lahir']);
            $objPHPExcel->getActiveSheet()->setCellValue('B9', $dataAll['agama']);
	        $objPHPExcel->getActiveSheet()->setCellValue('B10', $dataAll['pangkat_golongan']);
	        $objPHPExcel->getActiveSheet()->setCellValue('B11', $dataAll['jabatan']);
	        $objPHPExcel->getActiveSheet()->setCellValue('B12', $dataAll['pendidikan_terakhir']);
	        $objPHPExcel->getActiveSheet()->setCellValue('B13', $dataAll['no_n_tanggal_keputusan_pengangkatan']);
	        $objPHPExcel->getActiveSheet()->setCellValue('B14', $dataAll['no_n_tanggal_keputusan_pemberhentian']);

            $objPHPExcel->getActiveSheet()->setCellValue('B16', $dataAll['keterangan']);


      

            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(40);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);

            if($dataAll['is_approve'] == 1){
            	$objPHPExcel->getActiveSheet()->setCellValue('B15', 'Approved');
            }else if($dataAll['is_approve'] == 2){
            	$objPHPExcel->getActiveSheet()->setCellValue('B15', 'Rejected');
            }else{
            	$objPHPExcel->getActiveSheet()->setCellValue('B15', 'Waiting Approval');
            }
        }else if($indentity == '5'){
        	$title = 'peraturan-desa-data-' . date('ymd') . '.xlsx';
            $dataAll = $this->web_dokumen_model->getDetailPeraturanDesa($id);
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->setActiveSheetIndex(0)
                        //mengisikan value pada tiap-tiap cell, A1 itu alamat cellnya 
                        ->setCellValue('A1', 'Data Input Form Ekspedisi')
                        ->setCellValue('A2', 'Judul')
                        ->setCellValue('A3', 'Uraian')
                        ->setCellValue('A4', 'Nomor Dan Tanggal Ditetapkan')
                        ->setCellValue('A5', 'Tentang')
                        ->setCellValue('A6', 'Diundangkan')
                        ->setCellValue('A7', 'Status')
                        ->setCellValue('A8', 'Keterangan');

           	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A1:B1');
           	$objPHPExcel->getActiveSheet()->getStyle('A1:B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $objPHPExcel->getActiveSheet()->setCellValue('B2', $dataAll['nama']);
            $objPHPExcel->getActiveSheet()->setCellValue('B3', $dataAll['uraiansingkat']);
            $objPHPExcel->getActiveSheet()->setCellValue('B4', $dataAll['nomber_tanggalperaturandesa']);
            $objPHPExcel->getActiveSheet()->setCellValue('B5', $dataAll['tentang']);
            $objPHPExcel->getActiveSheet()->setCellValue('B6', $dataAll['nomor_tanggalkesepakatan']);
            $objPHPExcel->getActiveSheet()->setCellValue('B8', $dataAll['keterangan']);

            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(40);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);

            if($dataAll['is_approve'] == 1){
            	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Approved');
            }else if($dataAll['is_approve'] == 2){
            	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Rejected');
            }else{
            	$objPHPExcel->getActiveSheet()->setCellValue('B7', 'Waiting Approval');
            }
        }


      
        //mulai menyimpan excel format xlsx, kalau ingin xls ganti Excel2007 menjadi Excel5          
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        //sesuaikan headernya 
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        //ubah nama file saat diunduh
        header('Content-Disposition: attachment;filename='. $title .'');
        //unduh file
        $objWriter->save("php://output");

    }

    public function export_pdf($indentity='',$id=''){
    	$this->load->library('Pdf');
    	if($indentity == '6'){ // jika form requestnya ekspedisi
    		$dataDetail = $this->web_dokumen_model->getDetailEkpedisi($id);
            $data['ekspedisi'] = $dataDetail;
            if($dataDetail['is_approve'] == 1 ){ 
            	$data['status'] = 'Approved'; 
        	}else if($dataDetail['is_approve'] == 2){
        		$data['status'] = 'Rejected';
        	}else{
        		$data['status'] = 'Waiting Approval';
            }
            
			$this->load->view('export_document/ekspedisi', $data);
		}else if($indentity == '2'){
			$dataDetail = $this->web_dokumen_model->getDetailInventaris($id);
            $data['inventaris'] = $dataDetail;
            if($dataDetail['is_approve'] == 1 ){ 
            	$data['status'] = 'Approved'; 
        	}else if($dataDetail['is_approve'] == 2){
        		$data['status'] = 'Rejected';
        	}else{
        		$data['status'] = 'Waiting Approval';
            }
            
			$this->load->view('export_document/inventaris', $data);
		}else if($indentity == '3'){
			$dataDetail = $this->web_dokumen_model->getDetailPeraturanDesa($id);
            $data['peraturan'] = $dataDetail;
            if($dataDetail['is_approve'] == 1 ){ 
            	$data['status'] = 'Approved'; 
        	}else if($dataDetail['is_approve'] == 2){
        		$data['status'] = 'Rejected';
        	}else{
        		$data['status'] = 'Waiting Approval';
            }
            
			$this->load->view('export_document/peraturandesa', $data);
		}else if($indentity == '4'){
			$dataDetail = $this->web_dokumen_model->getDetailAparatPemerintahan($id);
            $data['peraturan'] = $dataDetail;
            if($dataDetail['is_approve'] == 1 ){ 
            	$data['status'] = 'Approved'; 
        	}else if($dataDetail['is_approve'] == 2){
        		$data['status'] = 'Rejected';
        	}else{
        		$data['status'] = 'Waiting Approval';
            }
            
			$this->load->view('export_document/apartpemerintah', $data);
		}
    }

	function dokumen_unlock($kat=1,$id=''){
		$this->web_dokumen_model->dokumen_lock($id,2);
		redirect("dokumen/index/$kat/$p/$o");
	}
}
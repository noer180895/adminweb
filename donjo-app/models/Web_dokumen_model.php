<?php

define("KODE_KATEGORI", serialize(array(
			1 => 'Umum',
			2 => 'SK Kepala Desa',
			3 => 'Peraturan Desa')));

class Web_dokumen_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function autocomplete(){
		$sql = "SELECT satuan FROM dokumen WHERE id_pend = 0
					UNION SELECT nama FROM dokumen WHERE id_pend = 0";
		$query = $this->db->query($sql);
		$data  = $query->result_array();

		$i=0;
		$outp='';
		while($i<count($data)){
			$outp .= ",'" .$data[$i]['satuan']. "'";
			$i++;
		}
		$outp = strtolower(substr($outp, 1));
		$outp = '[' .$outp. ']';
		return $outp;
	}

	


	function search_sql($kat){
		if(isset($_SESSION['cari'])){
			$cari = $_SESSION['cari'];
			$kw = $this->db->escape_like_str($cari);
			$kw = '%' .$kw. '%';
			$search_sql= " AND (nama LIKE '$kw')";
		
			return $search_sql;
			
		}
		
	}	

	function filter_sql($kat){
		if($kat == "1"){ // hanya untuk kategori dokumen umum
			if(isset($_SESSION['filter'])){
				$kf = $_SESSION['filter'];
				$filter_sql= " AND enabled = $kf";
			return $filter_sql;
			}
		}
	}

	private function _main_sql($kat){
		if($kat == "6") // jika dia request ekspedisi
		{
			$sql = " FROM dokumen_ekspedisi where kategori = 6";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "4"){
			$sql = " FROM dokumen_aparatpemerintahandesa where kategori = 4";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "2"){
			$sql = " FROM dokumen_inventaris where kategori = 2";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "3"){
			$sql = " FROM dokumen_peraturandesa where kategori = 3";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "5"){
			$sql = " FROM dokumen_agenda where kategori = 5";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "7"){
			$sql = " FROM dokumen_lembaranberitadesa where kategori = 7";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "8"){
			$sql = " FROM dokumen_bukutamubpd where kategori = 8";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "9"){
			$sql = " FROM dokumen_daftarhadirrapatbpd where kategori = 9";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "10"){
			$sql = " FROM dokumen_daftaranggotabpd where kategori = 10";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "11"){
			$sql = " FROM dokumen_dataaspirasimasyarakat where kategori = 11";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "12"){
			$sql = " FROM dokumen_datakegiatanbpd where kategori = 12";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "13"){
			$sql = " FROM dokumen_datanotulenrapatbpd where kategori = 13"; //done db
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "14"){
			$sql = " FROM dokumen_dataperaturankeputusanbpd where kategori = 14"; // done db
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "15"){
			$sql = " FROM dokumen_datatanahdidesa where kategori = 15"; //done db
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "16"){
			$sql = " FROM dokumen_inventarishasilpembangunan where kategori = 16";  //dene db
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "17"){
			$sql = " FROM dokumen_kaderpemberdayaanmasyarakat where kategori = 17"; //done db
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "18"){
			$sql = " FROM dokumen_keputusankepaladesa where kategori = 18";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "19"){
			$sql = " FROM dokumen_keputusanmusyawarahdesa where kategori = 19";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "20"){
			$sql = " FROM dokumen_keputusanmusyawarahperencanaanpembangunandesa where kategori = 20";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "21"){
			$sql = " FROM dokumen_laporankeuanganbpd where kategori = 21";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "22"){
			$sql = " FROM dokumen_peraturandidesa where kategori = 22";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
			//tambahan
		}elseif($kat == "23"){
			$sql = " FROM dokumen_DataInventarisbpd where kategori = 23";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "24"){
			$sql = " FROM dokumen_IndukPenduduk where kategori = 24";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "25"){
			$sql = " FROM dokumen_Mutasipenduduk where kategori = 25";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "26"){
			$sql = " FROM dokumen_Rekapitulasipenduduk where kategori = 26";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "27"){
			$sql = " FROM dokumen_Penduduksementara where kategori = 27";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "28"){
			$sql = " FROM dokumen_Kartutandapendudukdankeluarga where kategori = 28"; 
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "29"){
			$sql = " FROM dokumen_Anggaranpendapatanbelanja where kategori = 29"; 
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "30"){
			$sql = " FROM dokumen_RencanaAnggaranBiaya where kategori = 30";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "31"){
			$sql = " FROM dokumen_Kaspembantukegiatan where kategori = 31";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "32"){
			$sql = " FROM dokumen_Bukukasumum where kategori = 32";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "33"){
			$sql = " FROM dokumen_Bankdesa where kategori = 33";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "34"){
			$sql = " FROM dokumen_RencanaKerjaPembangunan where kategori = 34";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "35"){
			$sql = " FROM dokumen_Kegiatanpembangunan where kategori = 35";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "36"){
			$sql = " FROM dokumen_Agendasuratkeluar where kategori = 36";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}elseif($kat == "37"){
			$sql = " FROM dokumen_Agendasuratmasuk where kategori = 37";
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}else{

			$sql = " FROM dokumen WHERE id_pend = 0 AND kategori = ".$kat;
			$sql .= $this->search_sql($kat);
			$sql .= $this->filter_sql($kat);
		}

		return $sql;
	}

	function paging($kat,$p=1,$o=0){

		$sql      = "SELECT COUNT(id) AS id".$this->_main_sql($kat);
		$sql     .= $this->search_sql();
		$query    = $this->db->query($sql);
		$row      = $query->row_array();
		$jml_data = $row['id'];

		$this->load->library('paging');
		$cfg['page']     = $p;
		$cfg['per_page'] = $_SESSION['per_page'];
		$cfg['num_rows'] = $jml_data;
		$this->paging->init($cfg);

		return $this->paging;
	}

	function list_data($kat,$o=0,$offset=0,$limit=500){

		switch($o){
			case 1: $order_sql = ' ORDER BY nama'; break;
			case 2: $order_sql = ' ORDER BY nama DESC'; break;
			case 3: $order_sql = ' ORDER BY enabled'; break;
			case 4: $order_sql = ' ORDER BY enabled DESC'; break;
			case 5: $order_sql = ' ORDER BY tgl_upload'; break;
			case 6: $order_sql = ' ORDER BY tgl_upload DESC'; break;
			default:$order_sql = ' ORDER BY id';
		}

		$paging_sql = ' LIMIT ' .$offset. ',' .$limit;

		$sql   = "SELECT * ".$this->_main_sql($kat);
		$sql .= $order_sql;
		$sql .= $paging_sql;

		$query = $this->db->query($sql);
		$data=$query->result_array();

		$i=0;
		$j=$offset;

		
			while($i<count($data)){
				$data[$i]['no']=$j+1;
				if($kat == 1){ // jika form dokumen umum
					$data[$i]['attr'] = json_decode($data[$i]['attr'], true);

					if($data[$i]['enabled']==1)
						$data[$i]['aktif']="Ya";
					else
						$data[$i]['aktif']="Tidak";
				}

				$i++;
				$j++;
			}
		
		return $data;
	}

	function semua_mime_type(){
	  $semua_mime_type = array_merge(unserialize(MIME_TYPE_DOKUMEN), unserialize(MIME_TYPE_GAMBAR), unserialize(MIME_TYPE_ARSIP));
	  $semua_mime_type = array_diff($semua_mime_type, array('application/octet-stream'));
	  return $semua_mime_type;
	}

	function semua_ext(){
	  $semua_ext = array_merge(unserialize(EXT_DOKUMEN), unserialize(EXT_GAMBAR), unserialize(EXT_ARSIP));
	  return $semua_ext;
	}

	function upload_dokumen(&$data, $file_lama=""){
		unset($data['old_file']);
		if(empty($_FILES['satuan']['tmp_name'])){
			return false;
		}

		$_SESSION['error_msg'] = "";
		$_SESSION['success'] = 1;
	  $lokasi_file = $_FILES['satuan']['tmp_name'];
		if(empty($lokasi_file)){
			$_SESSION['success']=-1;
			return false;
		}
	  if (function_exists('finfo_open')) {
	    $finfo = finfo_open(FILEINFO_MIME_TYPE);
	    $tipe_file = finfo_file($finfo, $lokasi_file);
	  } else
		  $tipe_file = $_FILES['satuan']['type'];
	  $nama_file   = $_FILES['satuan']['name'];
	  $nama_file   = str_replace(' ', '-', $nama_file); 	 // normalkan nama file
	  $ext = get_extension($nama_file);

		if(!in_array($tipe_file, $this->semua_mime_type()) OR !in_array($ext, $this->semua_ext())){
			$_SESSION['error_msg'].= " -> Jenis file salah: " . $tipe_file . " " . $ext;
			$_SESSION['success']=-1;
			return false;
		} elseif(isPHP($lokasi_file, $nama_file)){
			$_SESSION['error_msg'].= " -> File berisi script ";
			$_SESSION['success']=-1;
			return false;
		}

		if (!empty($data['id_pend']))
			$nama_file = $data['id_pend']."_".$data['nama']."_".generator(6)."_".$nama_file;
		else
			$nama_file = $data['nama']."_".generator(6)."_".$nama_file;
		$nama_file = urlencode($nama_file);
		UploadDocument($nama_file, $file_lama);
		$data['satuan'] = $nama_file;
		return true;
	}

	function insert($kat){
		$data = $_POST;

		if($kat == 6){ // jika tipe kategorinya adalah ekspedisi
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_ekspedisi',$data);
			} else return false;
		}elseif($kat == 4){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_aparatpemerintahandesa',$data);
			} else return false;
		}elseif($kat == 2){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_inventaris',$data);
			} else return false;
		}elseif($kat == 3){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_peraturandesa',$data);
			} else return false;
		}elseif($kat == 5){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_agenda',$data);
			} else return false;
		}elseif($kat == 7){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_lembaranberitadesa',$data);
			} else return false;			
		}elseif($kat == 8){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_bukutamubpd',$data);
			} else return false;
			
		}elseif($kat == 9){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_daftarhadirrapatbpd',$data);
			} else return false;
			
		}elseif($kat == 10){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_daftaranggotabpd',$data);
			} else return false;
			
		}elseif($kat == 11){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_dataaspirasimasyarakat',$data);
			} else return false;
			
		}elseif($kat == 12){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_datakegiatanbpd',$data);
			} else return false;
			
		}elseif($kat == 13){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_datanotulenrapatbpd',$data);
			} else return false;
			
		}elseif($kat == 14){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_dataperaturankeputusanbpd',$data);
			} else return false;
			
		}elseif($kat == 15){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_datatanahdidesa',$data);
			} else return false;
			
		}elseif($kat == 16){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_inventarishasilpembangunan',$data);
			} else return false;
			
		}elseif($kat == 17){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_kaderpemberdayaanmasyarakat',$data);
			} else return false;
			
		}elseif($kat == 18){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_keputusankepaladesa',$data);
			} else return false;
			
		}elseif($kat == 19){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_keputusanmusyawarahdesa',$data);
			} else return false;
			
		}elseif($kat == 20){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_keputusanmusyawarahperencanaanpembangunandesa',$data);
			} else return false;
			
		}elseif($kat == 21){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_laporankeuanganbpd',$data);
			} else return false;
			
		}elseif($kat == 22){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_peraturandidesa',$data);
			} else return false;
			//tambahan
			
		}elseif($kat == 23){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_DataInventarisbpd',$data);
			} else return false;		
		}elseif($kat == 24){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_IndukPenduduk',$data);
			} else return false;
			
		}elseif($kat == 25){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Mutasipenduduk',$data);
			} else return false;
			
		}elseif($kat == 26){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Rekapitulasipenduduk',$data);
			} else return false;
			
		}elseif($kat == 27){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Penduduksementara',$data);
			} else return false;
			
		}elseif($kat == 28){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Kartutandapendudukdankeluarga',$data);
			} else return false;
			
		}elseif($kat == 29){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Anggaranpendapatanbelanja',$data);
			} else return false;
			
		}elseif($kat == 30){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_RencanaAnggaranBiaya',$data);
			} else return false;
			
		}elseif($kat == 31){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Kaspembantukegiatan',$data);
			} else return false;
			
		}elseif($kat == 32){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Bukukasumum',$data);
			} else return false;
			
		}elseif($kat == 33){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Bankdesa',$data);
			} else return false;
			
		}elseif($kat == 34){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_RencanaKerjaPembangunan',$data);
			} else return false;
			
		}elseif($kat == 35){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Kegiatanpembangunan',$data);
			} else return false;
			
		}elseif($kat == 36){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Agendasuratkeluar',$data);
			} else return false;
			
		}elseif($kat == 37){
			if ($this->upload_dokumen($data)) {
				// $data['attr'] = json_encode($data['attr']);
				$data['created_date'] =  date("Y-m-d h:i:s");
				$data['updated_date']= date("Y-m-d h:i:s");
				return $this->db->insert('dokumen_Agendasuratmasuk',$data);
			} else return false;
			
		}else{
			if ($this->upload_dokumen($data)) {
				$data['attr'] = json_encode($data['attr']);
				return $this->db->insert('dokumen',$data);
			} else return false;
		}
	}

	function update($id=0,$kat){
		$data = $_POST;
		if($kat == "6"){
			if (!$this->upload_dokumen($data, $data['old_file']))
 				unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_ekspedisi',$data);
 		}else if($kat == "2"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_inventaris',$data);
 		}else if($kat == "3"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_peraturandesa',$data);
 		}else if($kat == "4"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_aparatpemerintahandesa',$data);
 		}else if($kat == "5"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_agenda',$data);
 		}else if($kat == "7"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_lembaranberitadesa',$data);
 		}else if($kat == "8"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_bukutamubpd',$data);


 		}else if($kat == "26"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_rekapitulasipenduduk',$data);

 		}else if($kat == "27"){
 			if (!$this->upload_dokumen($data, $data['old_file']))
 			unset($data['satuan']);
 			$data['attr'] = json_encode($data['attr']);
			$data['updated_date']= date("Y-m-d h:i:s");
 			return $this->db->where('id',$id)->update('dokumen_Penduduksementara',$data);

 			

		}else{
			if (!$this->upload_dokumen($data, $data['old_file']))
			unset($data['satuan']);
			$data['attr'] = json_encode($data['attr']);
			return $this->db->where('id',$id)->update('dokumen',$data);
		}
	}


	function delete($id='',$kat){
 		if($kat == "6"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_ekspedisi')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_ekspedisi');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;

 		}else if($kat == "2"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_inventaris')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_inventaris');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else if($kat == "3"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_peraturandesa')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_peraturandesa');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else if($kat == "4"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_aparatpemerintahandesa')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_aparatpemerintahandesa');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else if($kat == "5"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_agenda')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_agenda');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else if($kat == "7"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_lembaranberitadesa')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_lembaranberitadesa');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else if($kat == "8"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_bukutamubpd')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_bukutamubpd');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;

 		}else if($kat == "26"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_rekapitulasipenduduk')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_rekapitulasipenduduk');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else if($kat == "27"){
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen_Penduduksementara')->row()->satuan;
 			$outp = $this->db->where('id',$id)->delete('dokumen_Penduduksementara');
 			if($outp)
 			unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}else{
 			$old_dokumen = $this->db->select('satuan')->where('id',$id)->get('dokumen')->row()->satuan;
 		$outp = $this->db->where('id',$id)->delete('dokumen');
 			if($outp)
 				unlink(LOKASI_DOKUMEN . $old_dokumen);
 			else $_SESSION['success']=-1;
 		}
 	}


	function delete_all($kat){
		$id_cb = $_POST['id_cb'];
		if(count($id_cb)){
			foreach($id_cb as $id){
				$this->delete($id,$kat);
			}
		}
		else $_SESSION['success']=-1;
	}

	function dokumen_lock($id='',$val=0){

		$sql  = "UPDATE dokumen SET enabled=? WHERE id=?";
		$outp = $this->db->query($sql, array($val,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// approve ekspedisi
	function approve_ekspedisi($id=''){
		$sql  = "UPDATE dokumen_ekspedisi SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject ekspedisi
	function reject_ekspedisi($id=''){
		$sql  = "UPDATE dokumen_ekspedisi SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve aparat
	function approve_aparat($id=''){
		$sql  = "UPDATE dokumen_aparatpemerintahandesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject aparat
	function reject_aparat($id=''){
		$sql  = "UPDATE dokumen_aparatpemerintahandesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve inventaris
	function approve_inventaris($id=''){
		$sql  = "UPDATE dokumen_inventaris SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject inventaris
	function reject_inventaris($id=''){
		$sql  = "UPDATE dokumen_inventaris SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve peraturan desa
	function approve_peraturan_desa($id=''){
		$sql  = "UPDATE dokumen_peraturandesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject peraturan desa
	function reject_peraturan_desa($id=''){
		$sql  = "UPDATE dokumen_peraturandesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve agenda
	function approve_agenda($id=''){
		$sql  = "UPDATE dokumen_agenda SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject agenda
	function reject_agenda($id=''){
		$sql  = "UPDATE dokumen_agenda SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve lembaran berita desa
	function approve_lembaranberitadesa($id=''){
		$sql  = "UPDATE dokumen_lembaranberitadesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject lembaran berita desa
	function reject_lembaranberitadesa($id=''){
		$sql  = "UPDATE dokumen_lembaranberitadesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve bukutamubpd
	function approve_bukutamubpd($id=''){
		$sql  = "UPDATE dokumen_bukutamubpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject bukutamubpd
	function reject_bukutamubpd($id=''){
		$sql  = "UPDATE dokumen_bukutamubpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve daftar hadir rapat bpd
	function approve_daftarhadirrapatbpd($id=''){
		$sql  = "UPDATE dokumen_daftarhadirrapatbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject  daftar hadir rapat bpd
	function reject_daftarhadirrapatbpd($id=''){
		$sql  = "UPDATE dokumen_daftarhadirrapatbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve daftar anggota bpd
	function approve_daftaranggotabpd($id=''){
		$sql  = "UPDATE dokumen_daftaranggotabpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject daftar anggota bpd
	function reject_daftaranggotabpd($id=''){
		$sql  = "UPDATE dokumen_daftaranggotabpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}
	// approve data aspirasi masyarakat
	function approve_dataaspirasimasyarakat($id=''){
		$sql  = "UPDATE dokumen_dataaspirasimasyarakat SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject data aspirasi masyarakat
	function reject_dataaspirasimasyarakat($id=''){
		$sql  = "UPDATE dokumen_dataaspirasimasyarakat SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve data kegiatan bpd
	function approve_datakegiatanbpd($id=''){
		$sql  = "UPDATE dokumen_datakegiatanbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject data kegiatan bpd
	function reject_datakegiatanbpd($id=''){
		$sql  = "UPDATE dokumen_datakegiatanbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

		// approve data notulen rapat bpd
	function approve_datanotulenrapatbpd($id=''){
		$sql  = "UPDATE dokumen_datanotulenrapatbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject data kegiatan bpd
	function reject_datanotulenrapatbpd($id=''){
		$sql  = "UPDATE dokumen_datanotulenrapatbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve data peraturan keputusan bpd
	function approve_dataperatuankeputusanbpd($id=''){
		$sql  = "UPDATE dokumen_dataperaturankeputusanbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject data peraturan keputusan bpd
	function reject_dataperatuankeputusanbpd($id=''){
		$sql  = "UPDATE dokumen_dataperaturankeputusanbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve data tanahdidesa
	function approve_datatanahdidesa($id=''){
		$sql  = "UPDATE dokumen_datatanahdidesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject data tanah didesa
	function reject_datatanahdidesa($id=''){
		$sql  = "UPDATE dokumen_datatanahdidesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve inventaris hasil pembangunan
	function approve_inventarishasilpembangunan($id=''){
		$sql  = "UPDATE dokumen_inventarishasilpembangunan SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject inventaris hasil pembangunan
	function reject_inventarishasilpembangunan($id=''){
		$sql  = "UPDATE dokumen_inventarishasilpembangunan SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve kader pemberdayaan masyarakat
	function approve_kaderpemberdayaanmasyarakat($id=''){
		$sql  = "UPDATE dokumen_kaderpemberdayaanmasyarakat SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject kader pemberdayaan masyarakat
	function reject_kaderpemberdayaanmasyarakat($id=''){
		$sql  = "UPDATE dokumen_kaderpemberdayaanmasyarakat SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}
		// approve keputusan kepala desa
	function approve_Keputusankepaladesa($id=''){
		$sql  = "UPDATE dokumen_keputusankepaladesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject keputusan kepala desa
	function reject_Keputusankepaladesa($id=''){
		$sql  = "UPDATE dokumen_keputusankepaladesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve keputusan musyawarah desa
	function approve_Keputusanmusyawarahdesa($id=''){
		$sql  = "UPDATE dokumen_keputusanmusyawarahdesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject keputusan musyawarah desa
	function reject_Keputusanmusyawarahdesa($id=''){
		$sql  = "UPDATE dokumen_keputusanmusyawarahdesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve keputusan musyawarah  perencanaan pembangunan desa
	function approve_Keputusanmusyawarahperencanaanpembangunandesa($id=''){
		$sql  = "UPDATE dokumen_keputusanmusyawarahperencanaanpembangunandesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject keputusan musyawarah  perencanaan pembangunan desa
	function reject_Keputusanmusyawarahperencanaanpembangunandesa($id=''){
		$sql  = "UPDATE dokumen_keputusanmusyawarahperencanaanpembangunandesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve Laporan Keuangan BPD
	function approve_Laporankeuanganbpd($id=''){
		$sql  = "UPDATE dokumen_laporankeuanganbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject Laporan Keuangan BPD
	function reject_Laporankeuanganbpd($id=''){
		$sql  = "UPDATE dokumen_laporankeuanganbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve Peraturan di desa
	function approve_Peraturandidesa($id=''){
		$sql  = "UPDATE dokumen_peraturandidesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject Peraturan di desa
	function reject_Peraturandidesa($id=''){
		$sql  = "UPDATE dokumen_peraturandidesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	//=========tambahan======//

		// approve agenda keluar
	function approve_Agendasuratkeluar($id=''){
		$sql  = "UPDATE dokumen_Agendasuratkeluar SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}


	// reject data agenda keluar
	function reject_Agendasuratkeluar($id=''){
		$sql  = "UPDATE dokumen_Agendasuratkeluar SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve data agenda masuk
	function approve_Agendasuratmasuk($id=''){
		$sql  = "UPDATE dokumen_Agendasuratmasuk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject data agenda masuk
	function reject_Agendasuratmasuk($id=''){
		$sql  = "UPDATE dokumen_Agendasuratmasuk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve anggaran pendapatan belanja
	function approve_Anggaranpendapatanbelanja($id=''){
		$sql  = "UPDATE dokumen_Anggaranpendapatanbelanja SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject anggaran pendapatan belanja
	function reject_Anggaranpendapatanbelanja($id=''){
		$sql  = "UPDATE dokumen_Anggaranpendapatanbelanja SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve bank desa
	function approve_Bankdesa($id=''){
		$sql  = "UPDATE dokumen_Bankdesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject bank desa
	function reject_Bankdesa($id=''){
		$sql  = "UPDATE dokumen_Bankdesa SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}
		// approve bank umum
	function approve_Bukukasumum($id=''){
		$sql  = "UPDATE dokumen_Bukukasumum SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject bank umum
	function reject_Bukukasumum($id=''){
		$sql  = "UPDATE dokumen_Bukukasumum SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve data inventaris bpd
	function approve_DataInventarisbpd($id=''){
		$sql  = "UPDATE dokumen_DataInventarisbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject data inventaris bpd
	function reject_DataInventarisbpd($id=''){
		$sql  = "UPDATE dokumen_DataInventarisbpd SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve induk penduduk
	function approve_IndukPenduduk($id=''){
		$sql  = "UPDATE dokumen_IndukPenduduk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject induk penduduk
	function reject_IndukPenduduk($id=''){
		$sql  = "UPDATE dokumen_IndukPenduduk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve ktp dan kel
	function approve_Kartutandapendudukdankeluarga($id=''){
		$sql  = "UPDATE dokumen_Kartutandapendudukdankeluarga SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject ktp dan kel
	function reject_Kartutandapendudukdankeluarga($id=''){
		$sql  = "UPDATE dokumen_Kartutandapendudukdankeluarga SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve Peraturan di desa
	function approve_Kaspembantukegiatan($id=''){
		$sql  = "UPDATE dokumen_Kaspembantukegiatan  SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject Peraturan di desa
	function reject_Kaspembantukegiatan($id=''){
		$sql  = "UPDATE dokumen_Kaspembantukegiatan  SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	//sini
		// approve kegiatan pembangunan
	function approve_Kegiatanpembangunan($id=''){
		$sql  = "UPDATE dokumen_Kegiatanpembangunan SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject kegiatan pembangunan
	function reject_Kegiatanpembangunan($id=''){
		$sql  = "UPDATE dokumen_Kegiatanpembangunan SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}
		// approve mutasi penduduk
	function approve_Mutasipenduduk($id=''){
		$sql  = "UPDATE dokumen_Mutasipenduduk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject mutasi penduduk
	function reject_Mutasipenduduk($id=''){
		$sql  = "UPDATE dokumen_Mutasipenduduk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve penduduk sementara
	function approve_Penduduksementara($id=''){
		$sql  = "UPDATE dokumen_Penduduksementara SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject penduduk sementara 
	function reject_Penduduksementara($id=''){
		$sql  = "UPDATE dokumen_Penduduksementara SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve induk penduduk
	function approve_Rekapitulasipenduduk($id=''){
		$sql  = "UPDATE dokumen_Rekapitulasipenduduk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject induk penduduk
	function reject_Rekapitulasipenduduk($id=''){
		$sql  = "UPDATE dokumen_Rekapitulasipenduduk SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve ktp dan kel
	function approve_RencanaAnggaranBiaya($id=''){
		$sql  = "UPDATE dokumen_RencanaAnggaranBiaya SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject ktp dan kel
	function reject_RencanaAnggaranBiaya($id=''){
		$sql  = "UPDATE dokumen_RencanaAnggaranBiaya SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// approve rencana kerja pembangunan
	function approve_RencanaKerjaPembangunan($id=''){
		$sql  = "UPDATE dokumen_RencanaKerjaPembangunan SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(1,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	// reject rencana kerja pembangunan
	function reject_RencanaKerjaPembangunan($id=''){
		$sql  = "UPDATE dokumen_RencanaKerjaPembangunan SET is_approve=? WHERE id=?";
		$outp = $this->db->query($sql, array(2,$id));

		if($outp) $_SESSION['success']=1;
			else $_SESSION['success']=-1;
	}

	function get_dokumen($id=0,$kat){
		if($kat == "6"){
 			$sql   = "SELECT * FROM dokumen_ekspedisi WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;
 		}else if($kat == "2"){
 			$sql   = "SELECT * FROM dokumen_inventaris WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;

 		}else if($kat == "3"){
 			$sql   = "SELECT * FROM dokumen_peraturandesa WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;

 		 }else if($kat == "4"){
 			$sql   = "SELECT * FROM dokumen_aparatpemerintahandesa WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;

 		 }else if($kat == "5"){
 			$sql   = "SELECT * FROM dokumen_agenda WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;
 		}else if($kat == "7"){
 			$sql   = "SELECT * FROM dokumen_lembaranberitadesa WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;

 		}else if($kat == "8"){
 			$sql   = "SELECT * FROM dokumen_bukutamubpd WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;
 		}else if($kat == "26"){
 			$sql   = "SELECT * FROM dokumen_rekapitulasipenduduk WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;
 		}else if($kat == "27"){
 			$sql   = "SELECT * FROM dokumen_Penduduksementara WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
 			$data['attr'] = json_decode($data['attr'], true);
 			return $data;
 		
 			

 			

 		}else{
 			$sql   = "SELECT * FROM dokumen WHERE id=?";
 			$query = $this->db->query($sql,$id);
 			$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
 			return $data;
 		}
	}

	function dokumen_show(){
		$sql   = "SELECT * FROM dokumen WHERE enabled=?";
		$query = $this->db->query($sql,1);
		$data  = $query->result_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;
	}

	function kat_nama($kat=1){
		$kategori = unserialize(KODE_KATEGORI);
		$kat_nama = $kategori[$kat];
		if (empty($kat_nama)) $kat_nama = $kategori[1];
		return $kat_nama;
	}

	function getDetailEkpedisi($id=0){
		$sql   = "SELECT * FROM dokumen_ekspedisi WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;

    }

    function getDetailInventaris($id=0){
		$sql   = "SELECT * FROM dokumen_inventaris WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;

    }


     function getDetailPeraturanDesa($id=0){
		$sql   = "SELECT * FROM dokumen_peraturandesa WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;

    }


    function getDetailAparatPemerintahan($id=0){
		$sql   = "SELECT * FROM dokumen_aparatpemerintahandesa WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;

    }


     function getDetailAgenda($id=0){
		$sql   = "SELECT * FROM dokumen_agenda WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;

    }

    function getDetailLembarDesa($id=0){
    	$sql   = "SELECT * FROM dokumen_lembaranberitadesa WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;
    }


    function getDetailBukuTamuBpd($id=0){
    	$sql   = "SELECT * FROM dokumen_bukutamubpd WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;
    }

    
    function getDetailRekapitulasi($id=0){
    	$sql   = "SELECT * FROM dokumen_rekapitulasipenduduk WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;
    }


    function getDetailPendudukSementara($id=0){
    	$sql   = "SELECT * FROM dokumen_Penduduksementara WHERE id=?";
		$query = $this->db->query($sql,$id);
		$data  = $query->row_array();
		$data['attr'] = json_decode($data['attr'], true);
		return $data;
    }

    


	function list_kategori(){
		return unserialize(KODE_KATEGORI);
	}



}
?>
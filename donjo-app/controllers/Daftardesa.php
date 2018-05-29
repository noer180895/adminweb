<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Daftardesa extends CI_Controller{

	function __construct(){
		parent::__construct();
		session_start();
		$this->load->model('user_model');
		$grup	= $this->user_model->sesi_grup($_SESSION['sesi']);
		if($grup!=1 AND $grup!=2) {
			if(empty($grup))
				$_SESSION['request_uri'] = $_SERVER['REQUEST_URI'];
			else
				unset($_SESSION['request_uri']);
			redirect('siteman');
		}
		$this->load->model('config_model');
		$this->load->model('header_model');
		$this->modul_ini = 1;
	}

	function clear(){
		unset($_SESSION['caridesa']);
		unset($_SESSION['filter']);
		redirect('daftardesa');
	}

	function index(){
		// echo "index";	
		if(isset($_SESSION['caridesa']))
			$data['caridesa'] = $_SESSION['caridesa'];
		else $data['caridesa'] = '';

		if(isset($_SESSION['filter']))
			$data['filter'] = $_SESSION['filter'];
		else $data['filter'] = '';

		$data['main'] = $this->config_model->get_data_all();
		$data['keyword'] = $this->config_model->autocomplete();
		$header = $this->header_model->get_data();

		$nav['act']= 0;
		$this->load->view('header',$header);

		$this->load->view('home/nav',$nav);
		$this->load->view('home/daftardesa',$data);
		$this->load->view('footer');
	}

	function form($id=''){
		$this->load->model('provinsi_model');

		if($id){
			$data['pamong']          = $this->config_model->get_data($id);
			$data['form_action'] = site_url("daftardesa/update/$id");
		}
		else{
			$data['pamong']          = null;
			$data['form_action'] = site_url("daftardesa/insert");
		}

		$intId = (int)$id;
		$header = $this->header_model->get_data();
		$data['main'] = $this->config_model->get_data($intId);
		$this->load->view('header',$header);
		$data['list_provinsi'] = $this->provinsi_model->list_data();
		$nav['act']= 0;
		if ($data['main']) $data['form_action'] = site_url("daftardesa/update/".$data['main']['id']);
		else $data['form_action'] = site_url("daftardesa/insert/");
		$this->load->view('home/nav',$nav);
		$this->load->view('home/daftardesa_form',$data);
		$this->load->view('footer');
	}

	function filter(){
		$filter = $this->input->post('filter');
		if($filter!="")
			$_SESSION['filter']=$filter;
		else unset($_SESSION['filter']);
		redirect('daftardesa');
	}

	function search(){
		$caridesa = $this->input->post('caridesa');
		if($caridesa!='')
			$_SESSION['caridesa']=$cari;
		else unset($_SESSION['caridesa']);
		redirect('daftardesa');
	}

	function insert(){
		$this->config_model->insert();
		redirect('daftardesa');
	}

	function update($id=''){
		$this->config_model->update($id);
		redirect('daftardesa');
	}

	function delete($id=''){
		$_SESSION['success']=1;
		$outp = $this->config_model->delete($id);
		if (!$outp) $_SESSION['success']=-1;
		redirect('daftardesa');
	}

	function delete_all(){
		$this->config_model->delete_all();
		redirect('daftardesa');
	}

	function ttd_on($id=''){
		$this->config_model->ttd($id,1);
		redirect('daftardesa');
	}

	function ttd_off($id=''){
		$this->config_model->ttd($id,0);
		redirect('daftardesa');
	}


	
	function ajax_kantor_maps(){
		$data['desa'] = $this->config_model->get_data();
		$data['form_action'] = site_url("daftardesa/update_kantor_maps/");
		$this->load->view("home/ajax_kantor_desa_maps", $data);
	}

	function ajax_wilayah_maps(){
		$data['desa'] = $this->config_model->get_data();
		$data['form_action'] = site_url("daftardesa/update_wilayah_maps/");
		$this->load->view("home/ajax_wilayah_desa_maps", $data);
	}

	function update_kantor_maps(){
		$this->config_model->update_kantor();
		redirect("daftardesa/konfigurasi");
	}

	function update_wilayah_maps(){
		$this->config_model->update_wilayah();
		redirect("daftardesa/konfigurasi");
	}

	function upgrade_silent(){
		$nav['act']= 0;
		$header = $this->header_model->get_data();
		$this->load->view('header',$header);
		$this->load->view('home/nav',$nav);
		$this->load->view('home/upgrade_form');
		$this->load->view('footer');
	}

	function upgrader(){
		$kode = $_POST['upkode'];
		if($kode=="formasikombinasi")
			$this->config_model->upgrade();
		else
			$_SESSION['success']=-1;

		redirect("daftardesa/upgrade_silent");
	}
}



<?php 
	$this->load->model('m_log');
	if (empty($_SESSION['email']) && empty($_SESSION['level'])) {
		header('location:'.base_url().'auth/c_23_login');
	}
	$this->load->view('include/v_26_header_awal');
?>

<?php 
	$this->load->view($view);
?>

<?php 
	$this->load->view('include/v_26_footer_awal');
?>


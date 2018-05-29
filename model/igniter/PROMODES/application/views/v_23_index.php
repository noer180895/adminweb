

<?php 
	$this->load->model('m_log');
	if (empty($_SESSION['email']) && empty($_SESSION['level'])) {
		$this->load->view('include/v_23_header_belum_login');
	}else{
		$this->load->view('include/v_23_header');
	}
?>

<?php 
	$this->load->view($view);
?>

<?php 
	$this->load->view('include/v_23_footer');
?>


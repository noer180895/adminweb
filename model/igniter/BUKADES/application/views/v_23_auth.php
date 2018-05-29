<?php 
	if (isset($_SESSION['email']) && isset($_SESSION['level'])) {
		header('location:'.base_url());
	}
	$this->load->view('include/v_23_header_auth');
?>

<?php 
	$this->load->view($view);
?>

<?php 
	$this->load->view('include/v_23_footer');
?>
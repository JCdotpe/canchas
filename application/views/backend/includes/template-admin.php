<?php $this->load->view('backend/includes/header-admin'); ?>
<?php 
if(isset($nav)){
		$this->load->view('backend/includes/nav-admin'); 
}else{
		echo '<div class="container-fluid">';
} 
?>
<?php $this->load->view($main_content); ?>
<?php 
if(!isset($static)){
	if(isset($sidebar)){
		$this->load->view('backend/includes/sidebar-admin'); 
	}else{
		
	}
}
?>
<?php $this->load->view('backend/includes/footer-admin'); ?>
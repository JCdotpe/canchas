<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ubigeo_ajax extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		
		$this->load->model('ubigeo_model');
	}


	public function index()
	{
		show_404();
		
	}
	
	public function get_ajax_prov()
	{
		// $this->output->cache(9999999999);
		$code = $this->input->post('dep');
		$is_ajax = $this->input->post('ajax');
		if($is_ajax){
			$data['datos'] = $this->ubigeo_model->get_provs($code)->result();
			$this->load->view('backend/json/json_view', $data);		
		}else{
			show_404();
		}
	}		

	public function get_ajax_dist()
	{
		// $this->output->cache(9999999999);
		$prov = $this->input->post('prov');
		$dep = $this->input->post('dep');
		$is_ajax = $this->input->post('ajax');
		if($is_ajax){
			$data['datos'] = $this->ubigeo_model->get_dis($dep,$prov)->result();
			$this->load->view('backend/json/json_view', $data);	
		}else{
			show_404();
		}
	}		

	// public function get_ajax_ccpp($c)
	// {
	// 	$this->output->cache(30);
	// 	$code = $this->input->post('code');
	// 	$prov = $this->input->post('prov');
	// 	$dep = $this->input->post('dep');
	// 	$is_ajax = $this->input->post('ajax');
	// 	if($is_ajax){
	// 		$data['datos'] = $this->pesca_model->get_ccpp($dep,$prov,$code)->result();
	// 		$this->load->view('backend/json/json_view', $data);	
	// 	}else{
	// 		show_404();
	// 	}
	// }


	// public function get_ajax_ccpp_all($c)
	// {
	// 	$this->output->cache(30);
	// 	$code = $this->input->post('code');
	// 	$prov = $this->input->post('prov');
	// 	$dep = $this->input->post('dep');
	// 	$is_ajax = $this->input->post('ajax');
	// 	if($is_ajax){
	// 		$data['datos'] = $this->pescador_model->get_ccpp($dep,$prov,$code)->result();
	// 		$this->load->view('backend/json/json_view', $data);	
	// 	}else{
	// 		show_404();
	// 	}
	// }			
}

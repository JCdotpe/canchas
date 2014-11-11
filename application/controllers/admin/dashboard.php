<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('ubigeo_model');	
		$this->load->model('encuesta_model');	
	}

	public function index(){

		$data['nav'] = FALSE;
		$data['title'] = 'Canchas!';
		$data['main_content'] = 'admin/admin';
		$this->load->view('backend/includes/template', $data);	

	}

	
}

?>
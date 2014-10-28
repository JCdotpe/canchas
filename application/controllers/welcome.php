<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('ubigeo_model');	
		$this->load->model('encuesta_model');	

		// if (!$this->ion_auth->logged_in()) {
		// 	redirect('auth/login');
		// }

		// $roles = $this->ion_auth->get_roles();
		// $flag = FALSE;
		// foreach ($roles as $role) {
		// 	if ($role->id == 1 || $role->id == 2) {
		// 		$flag = TRUE;
		// 		break;
		// 	}
		// }

		// if (!$flag) {
		// 	show_404();
		// 	die();
		// }
	}

	public function index()
	{

		$data['nav'] = TRUE;
		$data['title'] = 'Canchas!';
		$data['main_content'] = 'canchas/welcome_view';
		$this->load->view('backend/includes/template', $data);
	}
}

?>
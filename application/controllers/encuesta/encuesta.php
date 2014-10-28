<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Encuesta extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('ubigeo_model');	
		$this->load->model('encuesta_model');	

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}

		$roles = $this->ion_auth->get_roles();
		$flag = FALSE;
		foreach ($roles as $role) {
			if ($role->id == 1 || $role->id == 2) {
				$flag = TRUE;
				break;
			}
		}

		if (!$flag) {
			show_404();
			die();
		}
	}

	public function index()
	{
		$data['user'] = $this->ion_auth->user()->row();
		$data['dptos'] = $this->ubigeo_model->get_dptos();

		$data['POSTULANTE'] = $this->encuesta_model->get_cap($data['user']->username, 'POSTULANTE');
		$data['POSTULANTE_B'] = $this->encuesta_model->get_cap($data['user']->username, 'POSTULANTE_B');

		$data['CAP01'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP01');
		$data['CAP02'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP02');
		$data['CAP03'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP03');
		$data['CAP04'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP04');
		$data['CAP04B'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP04B');
		$data['CAP05'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP05');
		$data['CAP06'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP06');
		$data['CAP07'] = $this->encuesta_model->get_cap($data['user']->username, 'CAP07');



		$data['nav'] = TRUE;
		$data['title'] = 'Encuesta';
		$data['main_content'] = 'encuesta/encuesta_view';
		$this->load->view('backend/includes/template', $data);
	}
}

?>
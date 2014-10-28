<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Import_users extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('muestra_model');		

		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}

		$roles = $this->ion_auth->get_roles();
		$flag = FALSE;
		foreach ($roles as $role) {
			if ($role->id == 1) {
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
		$users = $this->muestra_model->get_users();

		foreach($users->result() as $u){
			$username = $u->DNI;
			$password = $u->DNI;
			$email = $u->EMAIL;
			$additional_data = array(
									'first_name' => $u->NOMBRES,
									'last_name' =>  $u->PATERNO . ' ' .  $u->MATERNO,
									);
			$group = array('2'); // Sets user to admin. No need for array('1', '2') as user is always set to member by default

			$this->ion_auth->register($username, $password, $email, $additional_data, $group);
			
		    echo $username . ' ' .  $password  . ' ' . $email . ' ' . print_r($additional_data) . ' ' . print_r($group);
		}

	}
}

?>
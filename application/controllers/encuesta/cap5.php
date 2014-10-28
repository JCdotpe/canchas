<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cap5 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
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
		$is_ajax = $this->input->post('ajax');
		if($is_ajax){

			$fields = $this->encuesta_model->get_fields('CAP05');
			//id
			$user = $this->ion_auth->user()->row();

			$id = $user->username;			
			foreach ($fields as $a=>$b) {
				if(!in_array($b, array('Postulante_Id','usr_creacion','usr_edicion','fec_creacion','fec_edicion','last_ip','user_agent'))){
					$c_data[$b] = ($this->input->post($b) == '') ? NULL : $this->input->post($b);
				}
			}	

			$c_data['last_ip'] =  $this->input->ip_address();
			$c_data['user_agent'] = $this->agent->agent_string();

			$flag = 0;
			$msg = 'Error inesperado, por favor intentalo nuevamente';

			if ($this->encuesta_model->consulta_in_cap($id,'CAP05')->num_rows() == 0) {
				// inserta nuevo registro
				$c_data['Postulante_Id'] = $id;
				$c_data['usr_creacion'] = $id;
				$c_data['fec_creacion'] = date('Y-m-d H:i:s');			
					if($this->encuesta_model->insert_cap('CAP05',$c_data) > 0){
						$flag = 1;
						$msg = 'Se ha registrado satisfactoriamente el Cap. V';
					}
			} else {
				// actualiza
				$c_data['usr_edicion'] = $id;
				$c_data['fec_edicion'] = date('Y-m-d H:i:s');
					if($this->encuesta_model->update_cap('CAP05',$c_data,$id) > 0){
						$flag = 1;
						$msg = 'Se ha modificado satisfactoriamente el Cap. V';
					}

			}			
			$datos['flag'] = $flag;	
			$datos['msg'] = $msg;	
			$data['datos'] = $datos;
			$this->load->view('backend/json/json_view', $data);		

		}else{
			show_404();;
		}
	}
}

?>
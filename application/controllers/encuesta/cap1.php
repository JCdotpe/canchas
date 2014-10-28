<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cap1 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('encuesta_model');	
		$this->load->model('cap1_model');	

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

			$fields_n = $this->encuesta_model->get_fields('CAP01');
			//id
			$user = $this->ion_auth->user()->row();

			$id = $user->username;		

			$pcar_num = $this->input->post('pcap1_num');

		
			foreach ($fields_n as $a=>$b) {
				if(!in_array($b, array('C1P101x','Postulante_Id','usr_creacion','usr_edicion','fec_creacion','fec_edicion','last_ip','user_agent'))){							
					$pre_n[$b] = ($this->input->post($b) == '') ? NULL : $this->input->post($b);
				}	
			}

			$flag = 1;
			$msg = 'Se ha registrado satisfactoriamente el Cap I';

			$this->cap1_model->delete_cap1_n($id);

			$c_data_n['Postulante_Id'] = $id;
			$c_data_n['last_ip'] =  $this->input->ip_address();
			$c_data_n['user_agent'] = $this->agent->agent_string();

			$c_data_n['usr_creacion'] = $id;
			$c_data_n['fec_creacion'] = date('Y-m-d H:i:s');	
			if($pcar_num > 0){
				$cc = 0;
				foreach($pre_n['C1P101'] as &$z){

						foreach ($fields_n as $a=>$b) {
							if(!in_array($b, array('C1P101x','Cap01_id','Postulante_Id','usr_creacion','usr_edicion','fec_creacion','fec_edicion','last_ip','user_agent'))){
									$c_data_n[$b] = (!isset($pre_n[$b][$cc]) || $pre_n[$b][$cc] == '') ? NULL : $pre_n[$b][$cc];
							}	
						}
					    $this->encuesta_model->insert_cap('CAP01',$c_data_n);			
					    $cc++;
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
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('encuesta_model');	
		$this->load->model('car_model');	

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

			$fields = $this->encuesta_model->get_fields('POSTULANTE');
			$fields_n = $this->encuesta_model->get_fields('POSTULANTE_B');
			//id
			$user = $this->ion_auth->user()->row();

			$id = $user->username;		

			$pcar_num = $this->input->post('pcar_num');

			//pcar
			foreach ($fields as $a=>$b) {
				if(!in_array($b, array('Postulante_Id','usr_creacion','usr_edicion','fec_creacion','fec_edicion','last_ip','user_agent'))){
					 if($b == 'C0SELECC')
					 	$c_data[$b] = ($this->input->post($b) == '') ? NULL :  sprintf("%05d", $this->input->post($b));
					 else
						$c_data[$b] = ($this->input->post($b) == '') ? NULL :  $this->input->post($b);
				}
			}	

		
			foreach ($fields_n as $a=>$b) {
				if(!in_array($b, array('Postulante_Id','usr_creacion','usr_edicion','fec_creacion','fec_edicion','last_ip','user_agent'))){							
					$pre_n[$b] = ($this->input->post($b) == '') ? NULL : $this->input->post($b);
				}	
			}


			$c_data['last_ip'] =  $this->input->ip_address();
			$c_data['user_agent'] = $this->agent->agent_string();

			$flag = 0;
			$msg = 'Error inesperado, por favor intentalo nuevamente';
			if ($this->encuesta_model->consulta_in_cap($id,'POSTULANTE')->num_rows() == 0) {

				$c_data['Postulante_Id'] = $id;
				$c_data['usr_creacion'] = $id;
				$c_data['fec_creacion'] = date('Y-m-d H:i:s');	
				// inserta nuevo registro
					if($this->encuesta_model->insert_cap('POSTULANTE',$c_data) > 0){
						$flag = 1;
						$msg = 'Se ha registrado satisfactoriamente la Carátula';
					}else{
						$flag = 0;
						$msg = 'Ocurrió un error 00x-Car-i';		
					}

			} else {
				$c_data['usr_edicion'] = $id;
				$c_data['fec_edicion'] = date('Y-m-d H:i:s');			
				// actualiza
					if($this->encuesta_model->update_cap('POSTULANTE',$c_data,$id) > 0){
						$flag = 1;
						$msg = 'Se ha actualizado satisfactoriamente la Carátula';
					}else{
						$flag = 0;
						$msg = 'Ocurrió un error 00x-Car-u';		
					}

			}

			$this->car_model->delete_car_n($id);

			$c_data_n['Postulante_Id'] = $id;
			$c_data_n['last_ip'] =  $this->input->ip_address();
			$c_data_n['user_agent'] = $this->agent->agent_string();

			$c_data_n['usr_creacion'] = $id;
			$c_data_n['fec_creacion'] = date('Y-m-d H:i:s');	
			if($pcar_num > 0){
				$cc = 0;
				foreach($pre_n['C0P19'] as &$z){

						foreach ($fields_n as $a=>$b) {
							if(!in_array($b, array('id','Postulante_Id','usr_creacion','usr_edicion','fec_creacion','fec_edicion','last_ip','user_agent'))){
									$c_data_n[$b] = (!isset($pre_n[$b][$cc]) || $pre_n[$b][$cc] == '') ? NULL : $pre_n[$b][$cc];
							}	
						}
					    $this->encuesta_model->insert_cap('POSTULANTE_B',$c_data_n);			
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